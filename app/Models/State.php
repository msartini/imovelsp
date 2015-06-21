<?php
namespace App\Models;

use Eloquent;
use App\Models\Category;

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
class State extends Eloquent
{
    protected $table = 'estates';

    public function category()
    {
        return $this->hasOne('App\Category', 'category_id');
    }
}
