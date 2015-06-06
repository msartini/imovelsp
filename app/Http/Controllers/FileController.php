<?php
/**
 * Created by PhpStorm.
 * User: jonyfernandoschulz
 * Date: 6/2/15
 * Time: 21:21
 */

namespace App\Http\Controllers;


class FileController extends Controllerw
{


    public function index()
    {

        //^[0-9]{2}h[0-9]{2}

        //$input = '17/7/2014 14:58:44';

        $input = '19h00 - 20h00 19h00 - 20h00';

        //$salary = preg_replace("/\d{2}\h\d{2}\s/", 'ola', $input);
        $salary = preg_replace("/\d{2}h\d{2}\s\-\s\d{2}h\d{2}/", '', $input);
        var_dump($salary);
    }

} 