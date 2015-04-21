<?php namespace App\Http\Controllers;

/**
 * Description of FornecedorController
 *
 * @author marciosartini
 */
use Illuminate\Http\Request ;

//use Illuminate\Routing\Controller;


class FornecedorController extends Controller {

    public function index() {
        return view( "fornecedor/cadastro" ) ;
    }
    
    public function show() {
        return "lista completa de fornecedores" ;
    }
    
    public function store( Request $request) {
        $name = strip_tags( $request->input('name') ) ;
        return $name;
    }
    
}
