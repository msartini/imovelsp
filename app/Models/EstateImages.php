<?php
namespace App\Models;

use Eloquent;
use App\Comment;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Post
 *
 * @author jonyfernandoschulz
 */
class EstateImages extends Eloquent
{
    protected $table = 'estate_images';

    protected $id;
    protected $filename;
    protected $file_original_name;
    protected $extension;
    protected $fullpath;
}
