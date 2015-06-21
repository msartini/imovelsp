<?php
namespace App\Http\Controllers;

/**
 * Created by PhpStorm.
 * User: jonyfernandoschulz
 * Date: 6/2/15
 * Time: 21:21
 */



class FileController extends Controllerw
{
    public function index()
    {
        $input = '19h00 - 20h00 19h00 - 20h00';
        $salary = preg_replace("/\d{2}h\d{2}\s\-\s\d{2}h\d{2}/", '', $input);
        var_dump($salary);
    }
}
