<?php
namespace App;

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
class Post extends Eloquent
{
    protected $table = 'posts';

    public function comments()
    {
        return $this->hasMany('App\Comment', 'post_id');
    }
}
