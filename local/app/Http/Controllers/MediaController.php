<?php namespace App\Http\Controllers;
 
 
use App\Http\Controllers\Controller;
 
use App\Http\Repositories\MediaRepository;
 
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

}
