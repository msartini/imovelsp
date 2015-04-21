<?php namespace App\Http\Controllers;



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProdutoController
 *
 * @author marciosartini
 */

use App\Http\Repositories\DbUserRepository;

class ProdutoController extends Controller {

	protected $users ;

    public function __construct( DbUserRepository $dbUserRepository ) {
    	$this->users = $dbUserRepository ;
        $this->middleware( "guest" ) ;
    }
    
    public function index() {

    	var_dump( $this->users->all() ) ;
    	var_dump( $this->users->findFirst() ) ;

   		return "teste" ;
       //return view( "produtos" ) ;
       
    }
}
