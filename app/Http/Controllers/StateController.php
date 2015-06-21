<?php
/**
 * Created by PhpStorm.
 * User: jonyfernandoschulz
 * Date: 6/6/15
 * Time: 17:31
 */

namespace App\Http\Controllers;

use Input;
use Config;
use Request;
use App\Models\Category;
use App\Models\State;

class StateController extends Controller
{

    protected $state;

    public function __construct(State $state)
    {
        $this->middleware('auth');
        $this->state = $state;
    }

    public function index()
    {
        return $this->state->all();
    }


    public function create()
    {
        return view('estate.create');
    }


    public function show($stateId)
    {
        return $stateId;
    }
    public function store()
    {

        $file = Input::file('file');
        $allowedExts = Config::get('media.allowedExts');
        $allowedMimes = Config::get('media.allowedMimes');
        $temp = explode(".", $file->getClientOriginalName());
        $extension = end($temp);


        var_dump(in_array($extension, $allowedExts));
        var_dump(in_array($file->getMimeType(), $allowedMimes));

        //var_dump(Config::get('media.pathSaveFile'));
        if (!in_array($extension, $allowedExts) || !in_array($file->getMimeType(), $allowedMimes)) {
            echo Config::get('media.pathSaveFile');
            return "Arquivo Inválido";
        }


        Input::file('file')->move(Config::get('media.pathSaveFile'), $file->getClientOriginalName());




        dd(Input::all());
    }
}
