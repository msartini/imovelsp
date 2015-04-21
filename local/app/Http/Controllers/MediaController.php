<?php namespace App\Http\Controllers;
 
use App\Media;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Repositories\MediaRepository;
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
			$dados->setId(13);
			$dados->setArquivo("DOCUMENTO DO PPT numero DOIS - ALTERADO");
			$dados->setExtensao("ppt");
            $this->media->createOrUpdate( $dados );	

            $files = $this->media->all();
            
            $titulo = "Lista arquivos de mídia" ; 

            $primeiro = $this->media->findFirst();
            
            return view( 'media' , compact( 'titulo' , 'files', 'primeiro' ) );
            
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
