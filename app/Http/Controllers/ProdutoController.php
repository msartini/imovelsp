<?php namespace App\Http\Controllers;

/**
 * Description of ProdutoController
 *
 * @author marciosartini
 */


use App\Http\Repositories\DbUserRepository;

/**
 *  Description of ProdutoController
 *
 *  @method   transacoes de produtos
 *  @category Controllers
 *  @package  Controller
 *  @author   Marcio Sartini <msartini@gmail.com>
 *  @license  Sartini http://sartini.com.br
 *  @link     Produtos
 */
class ProdutoController extends Controller
{

    protected $users;

    /**
     * Constructor recebe injecao de dependence
     *
     * @param DbUserRepository $dbUserRepository Injeçao de dependencia de Users
     *
     * @return \App\Http\Controllers\ProdutoController
     */
    public function __construct(DbUserRepository $dbUserRepository)
    {
        $this->users = $dbUserRepository;
        //$this->middleware("guest");
    }
    
     /**
    * Constructor recebe injecao de dependencia
    *
    * @return void
    */
    public function index()
    {
        return $this->users->findFirst();
    }
}
