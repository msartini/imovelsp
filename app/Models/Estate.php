<?php
namespace Casaoeste\Models;

use Eloquent;
use Casaoeste\Models\Category;

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
class Estate extends Eloquent
{

    protected $table = 'estates';


    public function category()
    {
        return $this->hasOne('Casaoeste\Category', 'category_id');
    }

    public function getId()
    {
        return $this->id;
    }
}
