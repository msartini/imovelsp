<?php

namespace App\Http\Controllers;

use Input;
use Config;
use Image;
use Illuminate\Http\Request;
use Validator;
use App\Models\State;
use App\Models\EstateImages;
use Lang;

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
    public function store(Request $request)
    {

        echo Lang::getLocale();
        $validator = Validator::make($request->all(), [
            'file' => 'required',
        ]);
        $messages = $validator->errors();
        echo '<ul>';
        foreach ($messages->all('<li>:message</li>') as $message) {
            echo $message;
        }
        echo '</ul>';

        dd($messages);
        if ($validator) {
            dd('Arquivo obrigatorio');
        }
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


        $newFileName = date('Ymd-his');

        $estateImage = new EstateImages();
        $estateImage->file_original_name = $file->getClientOriginalName();
        $estateImage->filename = $file->getClientOriginalName();
        $estateImage->extension = $extension;
        $estateImage->fullpath = Config::get('media.pathSaveFile') . '/' .  $newFileName . '.' . $extension;
        $estateImage->save();

        $estateImage->find($estateImage);


        $newFileName = $newFileName . '_' .  $estateImage->id;
        $estateImage->filename = $newFileName;
        $estateImage->save();


        Request::file('file')->move(Config::get('media.pathSaveFile'), $newFileName . '.' . $extension);

        Image::make(Config::get('media.pathSaveFile').'/'.$newFileName . '.' .  $extension)->resize(300, 200)->save(Config::get('media.pathSaveFile').'/'. $newFileName. '-300x200.' . $extension);

        Image::make(Config::get('media.pathSaveFile').'/'.$newFileName . '.' .  $extension)->widen(400)->greyscale()->save(Config::get('media.pathSaveFile').'/'. $newFileName. '-400.' . $extension);

        Image::make(Config::get('media.pathSaveFile').'/'.$newFileName . '.' .  $extension)->widen(800)->greyscale()->save(Config::get('media.pathSaveFile').'/'. $newFileName. '-800.' . $extension);


        Image::make(Config::get('media.pathSaveFile').'/'.$newFileName . '.' .  $extension)->crop(800, 200, 0, 325)->save(Config::get('media.pathSaveFile').'/'. $newFileName. '-crop-800.' . $extension);

        Image::make(Config::get('media.pathSaveFile').'/'.$newFileName . '.' .  $extension)->fit(800, 200)->save(Config::get('media.pathSaveFile').'/'. $newFileName. '-fit-800-300.' . $extension);



        dd(Input::all());
    }
}
