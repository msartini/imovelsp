<?php
namespace Casaoeste\Services;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Mensageria
 *
 * @author jonyfernandoschulz
 */

use Illuminate\Support\Collection;
class Mensageria {
    //put your code here
    
    public static function frases(){
        return Collection::make([
            'Seu website de imóveis da sua região',
            'Os melhores imóveis para você!', 
            'Os melhores corretores para ajudar você comprar o seu imóvel.',
            'Faça o melhor negócio com os melhores corretores',
        ])->random();
    }

}