<?php namespace App\Http\Controllers;
 
 
use App\Http\Controllers\Controller;
 
use App\Http\Repositories\MediaRepository;
use GuzzleHttp\Client;
use App\Http\Requests;
use Input;
use Validator;
use Redirect;
use App\Media;
use App\MediaDTO;

class MediaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	protected $media;

	public function __construct( MediaRepository $media ) {
		$this->media = $media;
	}

	public function index()
	{     
          

            $dados = new MediaDTO();
            $dados->setId( 7 );
            $dados->setArquivo("REGISTRO NUMERO 7, ALTERADO O TIPO DE DOCUMENTO ");
            $dados->setExtensao("docx");

 

            $this->media->createOrUpdate( $dados );	

            $filtroPorExtensao = $this->media->getByExtension('xls');

            $files = $this->media->all();
            
            $titulo = "Lista arquivos de mídia" ; 

            $primeiro = $this->media->findFirst();  
           
            return view( 'media' , compact( 'titulo' , 'files', 'primeiro', 'filtroPorExtensao' ) );
            
	}
  

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return "show method" . $id;
	}


	public function contato(){
		return view('contato')->with('longitude', '0');
	}

	public function geocode(){

		$postData = Input::all();

	 	$messages = [
         'estado.required' => 'Estado é obrigatório',
         'cidade.required' => 'Você precisa de uma cidade',
		 ];
		$rules = [
		  'estado' => 'required',
		  'cidade' => 'required',
		];

		$validator = Validator::make($postData, $rules, $messages);
	  
	 	if ($validator->fails()) {
	      // send back to the page with the input data and errors
	      return Redirect::to('/contato')->withInput()->withErrors($validator);
	    }
	    else {

	    	$client = new Client();

	    	$url = 'http://maps.google.com/maps/api/geocode/json?address=';
			$concat = ', ';
			$space = '+';
			$address = Input::get('logradouro') . $space;
			$address = Input::get('endereco') . $concat;
			$address .=Input::get('numero') . $concat;
			$address .=Input::get('bairro') . $concat;
			$address .=Input::get('cidade') . $concat;
			$address .=Input::get('estado');
			$address = str_replace(" ", "+", $address);
			$region = "br";

			$url =  "$url$address&sensor=false&region=$region";
		  	//$response = GuzzleHttp\get('http://maps.google.com/maps/api/geocode/json?address=avenida%20raimundo%20pereira%20de%20magalhaes,%203363,%20sao%20paulo');
		  	//$json = $client->get('http://maps.google.com/maps/api/geocode/json?address=avenida%20raimundo%20pereira%20de%20magalhaes,%203363,%20sao%20paulo');
 	 		$response = $client->get( $url );
 	 		$json = $response->json();

		 	if ($this->findKey($json, 'lng') ) {
				$lat = $json['results'][0]['geometry']['location']['lat'];
				$long = $json['results'][0]['geometry']['location']['lng'];
				Input::merge(array('long' => $long));
				Input::merge(array('lat' => $lat));
		  	} else {
				Input::merge(array('long' => ''));
				Input::merge(array('lat' => ''));
		  	}

			//$json = $client->get( 'http://maps.google.com/maps/api/geocode/json?address=avenida%20raimundo%20pereira%20de%20magalhaes,%203363,%20sao%20paulo' );
			//$json = file_get_contents("$url$address&sensor=false&region=$region");
			//$json = json_decode($json);
			//$lat = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lat'};
			//$long = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lng'};
	      	//return view('contato')->with('longitude', $long)->with('latitude', $lat);
	      	return Redirect::to('contato')->withInput();
	    }
	}

	function findKey($array, $keySearch) { // check whether input is an array
		$isKey = false;
		if(is_array($array)){
			foreach ($array as $item){
				if (isset($item[$keySearch]) || $this->findKey($item, $keySearch) === true){
				    $isKey = true;
				}
			}
		}
		return $isKey;
	}

}
