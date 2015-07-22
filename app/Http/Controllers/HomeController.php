<?php

namespace Casaoeste\Http\Controllers;

use Auth;

class HomeController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Home Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders your application's "dashboard" for users that
    | are authenticated. Of course, you are free to change or remove the
    | controller as you wish. It is just here to get your app started!
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return \Casaoeste\Http\Controllers\HomeController
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index()
    {

        $authenticated = Auth::check();
        return view('home')->with('auth', $authenticated);

    }

    public function listagemImoveis()
    {
        return view('listagemImoveis');
    }
}
