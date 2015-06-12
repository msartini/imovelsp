<?php namespace App\Http\Controllers;

use App\Http\Models\Frontibrary;
use Symfony\Component\HttpFoundation\Response;
use view;

class ProfileController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Welcome Controller
    |--------------------------------------------------------------------------
    | This controller renders the "marketing page" for the application and
    | is configured to only allow guests. Like most of the other sample
    | controllers, you are free to modify or remove it as you desire.
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return void
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
        $frontparam = new Frontibrary("jquery", "bootstrap");
        return view('user')->with('css', $frontparam);
    }
        
    public function perfil()
    {
        return view('profileclone');
    }

    public function soma($aValor, $bValor)
    {
        return $aValor + $bValor;
    } 
                

}
