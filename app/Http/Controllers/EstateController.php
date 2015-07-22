<?php

namespace Casaoeste\Http\Controllers;

use Casaoeste\Models\Estate;
use Illuminate\Http\Request;
use Casaoeste\Repositories\EstateRepository;
use Casaoeste\Validators\ImoveisValidation;
use Casaoeste\Repositories\EstateImageRepository;

class EstateController extends Controller
{
    protected $estate;
    protected $media;
    protected $validator;

    public function __construct(
        ImoveisValidation $validation,
        EstateImageRepository $media,
        EstateRepository $estate
    ) {
        $this->middleware('auth');
        $this->estate = $estate;
        $this->validator = $validation;
        $this->media = $media;
    }

    public function index()
    {
        return $this->estate->all();
    }

    public function create()
    {
        return view('estate.create');
    }

    public function show(Estate $estate)
    {
        dd($estate);
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
        $estateImage = true;

        $estate = $this->estate->storeEstate($request);

        //Salva imagens
        if (!$request->file('file') == null && $estate->id) {
            $estateImage = $this->media->newImage($request->file('file'), $estate);
        }

        if (!$estateImage) {
            die('Erro criando imagens');
        }
        return $estate;
    }
}
