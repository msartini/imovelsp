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
use Image;
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

        $newFileName = date('Ymd');

        Request::file('file')->move(Config::get('media.pathSaveFile'), $newFileName . '.' . $extension);

        Image::make(Config::get('media.pathSaveFile').'/'.$newFileName . '.' .  $extension)->resize(300, 200)->save(Config::get('media.pathSaveFile').'/'. $newFileName. '-300x200.' . $extension);

        Image::make(Config::get('media.pathSaveFile').'/'.$newFileName . '.' .  $extension)->widen(400)->greyscale()->save(Config::get('media.pathSaveFile').'/'. $newFileName. '-400.' . $extension);

        Image::make(Config::get('media.pathSaveFile').'/'.$newFileName . '.' .  $extension)->widen(800)->greyscale()->save(Config::get('media.pathSaveFile').'/'. $newFileName. '-800.' . $extension);


        Image::make(Config::get('media.pathSaveFile').'/'.$newFileName . '.' .  $extension)->crop(800, 200, 0, 325)->save(Config::get('media.pathSaveFile').'/'. $newFileName. '-crop-800.' . $extension);

        Image::make(Config::get('media.pathSaveFile').'/'.$newFileName . '.' .  $extension)->fit(800, 200)->save(Config::get('media.pathSaveFile').'/'. $newFileName. '-fit-800-300.' . $extension);



        dd(Input::all());
    }
}
