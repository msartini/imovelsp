<?php namespace App\Http\Controllers;
 
use App\Media;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

 

class MediaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{     
            //$arquivo = new Media();
            //$arquivo->nome = "Arquivo do word";
            //$arquivo.save();
            $arquivos = new Media(); 
            $arquivos->arquivo = "documento";
            $arquivos->save() ;
            
            $files = $arquivos->all() ;
            
            $titulo = "Lista arquivos de mídia" ; 
            
            //print_r( $arquivos->get_element_by_rg() ) ;
            
            //return view( 'media' )->with( 'files' , $files );
            
            return view( 'media' , compact( 'titulo' , 'files') );
            
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
