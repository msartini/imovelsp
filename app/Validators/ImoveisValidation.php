<?php

namespace Casaoeste\Validators;

use Illuminate\Http\Request;
use Validator;
use Config;

/**
*
*/
class ImoveisValidation
{

    public function validate(Array $request)
    {
        $niceNames = array(
            'name' => 'Título do Imóvel'
        );
        $validator = Validator::make($request, [
            'name' => 'required',
        ]);

        $validator->setAttributeNames($niceNames);

        if (!$validator->fails()) {
            $validator = $this->validFile($request['file']);
        }

        return $validator;
    }

    public function validFile(Array $files)
    {

        foreach ($files as $file) {
            $validator = Validator::make(array('file'=> $file), [
                'file' => 'mimes:jpeg,gif,png,jpg',
            ]);

            if (!$validator->passes()) {
                return $validator;
            }
        }

        return $validator;
    }
}
