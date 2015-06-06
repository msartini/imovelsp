<?php namespace App\Http\Controllers;

use Mail;
use \App\Http\Models\Frontibrary;
use Illuminate\Support\Facades\Auth;


class UsuarioController extends Controller {

    /*
    |--------------------------------------------------------------------------
    | Welcome Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders the "marketing page" for the application and
    | is configured to only allow guests. Like most of the other sample
    | controllers, you are free to modify or remove it as you desire.
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return \App\Http\Controllers\UsuarioController
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index()
    {


        if (Auth::check()) {
            // The user is logged in...

            $email = Auth::user()->email;
            $id = Auth::id();

            echo $email;
            echo '<br>';
            echo $id;
        }
        return 'ok';

        $frontparam = new Frontibrary("jquery", "bootstrap");


        return view('user', ['titulo' => 'Envio de email', 'css' => $frontparam]);
    }

}
