<?php
/**
 * Created by PhpStorm.
 * User: jonyfernandoschulz
 * Date: 6/6/15
 * Time: 17:31
 */

namespace App\Http\Controllers;

use Input;

class StateController extends Controller
{

    public function index()
    {

    }


    public function create()
    {
        return view('states.create');
    }

    /**
     * @autor Marcio Sartini
     */
    public function store()
    {
        dd(Input::all());
    }
}