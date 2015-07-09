<?php

namespace App\Http\Controllers;

use Input;
use Config;
use Image;
use Illuminate\Http\Request;
use App\Models\State;
use App\Models\EstateImages;
use Lang;
use App\Validators\ImoveisValidation;
use App\Repositories\EstateImageRepository;

class StateController extends Controller
{

    protected $states;
    protected $media;
    protected $validator;

    public function __construct(State $states, EstateImages $images, ImoveisValidation $validation, EstateImageRepository $media)
    {
        $this->middleware('auth');
        $this->states = $states;
        $this->validator = $validation;
        $this->media = $media;
    }

    public function index()
    {
        return $this->states->all();
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
        $validator = $this->validator->validate($request->all());

        $messages = $validator->errors();

        if ($validator->fails()) {
            echo '<ul>';
            foreach ($messages->all('<li>:message</li>') as $message) {
                echo $message;
            }
            echo '</ul>';
            dd('Campos obrigatórios');
        }

        $estateImage = $this->media->newImage($request->file('file'));
    }
}
