<?php namespace Casaoeste\Http\Controllers;

/**
 * Description of FornecedorController
 *
 * @author marciosartini
 */

USE Input;
use Illuminate\Http\Request;


/**
 *  Description of FornecedorController
 *
 *  @method   transacoes de fornecedores
 *  @category Controllers
 *  @package  Controller
 *  @author   Marcio Sartini <msartini@gmail.com>
 *  @license  Sartini http://sartini.com.br
 *  @link     Fornecedores
 */
class FornecedorController extends Controller
{

    protected $auth;

    public function __construct()
    {
        //$this->middleware('auth.basic');
    }

    public function index()
    {
        
        return view("fornecedor/cadastro");
    }
    
    public function show()
    {
        return "lista completa de fornecedores" ;
    }
    
    public function store(Request $request)
    {
        dd($request->input());
        $name = strip_tags($request->input('name'));
        return $name;
    }
}
