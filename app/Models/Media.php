<?php

/**
 * Trata todos os tipos de medias que passam por imoveis
 * PHP version 5.5
 *
 * @category App
 * @package  App
 * @author   Marcio Sartini <marcio.sartini@grupofolha.com.br>
 * @internal Medias para imoveis
 * @license  http://grupofolha.com.br Thorin
 * @link     medias para todas as fotos e videos dos imoveis
 */
 namespace App\Models;

use Eloquent;

/**
 * Trata todos os tipos de medias que passam por imoveis
 *
 * @category App
 * @package  App
 * @author   Marcio Sartini <marcio.sartini@grupofolha.com.br>
 * @internal Medias para imoveis
 * @license  http://grupofolha.com.br Thorin
 * @link     medias para todas as fotos e videos dos imoveis
 */
class Media extends Eloquent
{

    protected $table = 'medias';

    /**
     * Constructor recebe injecao de dependencia
     *
     * @internal recupera Element by RG
     * @return   int retorna o ID do elemento
     */
    public function getElementByRg()
    {
        return array( '1' => 'Employer' ) ;
    }
}
