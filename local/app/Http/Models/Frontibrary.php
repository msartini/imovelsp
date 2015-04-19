<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Frontibrary
 *
 * @author MARCIO SARTINI
 */
namespace App\Http\Models;




class Frontibrary {
    //put your code here
    protected $js;
    protected $css;


    public function __construct($js, $css) {
        $this->js = $js;
        $this->css = $css;
    }
    
    public function setJs($js) {
        $this->js = $js;
    }
    public function getJs() {
        return $this->js;
    }
    
    public function setCss($css) {
        $this->css = $css;
    }
    public function getCss() {
        return $this->css;
    }
}
