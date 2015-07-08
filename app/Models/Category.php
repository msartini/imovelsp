<?php
namespace App\Models;

use Eloquent;
use App\Models\State;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Category
 *
 * @author marcios sartini
 */
class Category extends Eloquent
{
    protected $table = 'categories';

    public function states()
    {
        return $this->belongsTo('App\State');
    }
}
