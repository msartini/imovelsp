<?php 
/**
 * Trata todos os tipos de medias que passam por imoveis
 * PHP version 5.5
 * 
 * @category App
 * @package  App
 * @author   Marcio Sartini <marcio.sartini@grupofolha.com.br>
 * @internal Medias para imoveis
 * @license  http://sartini.com.br Imoveis
 * @link     medias para todas as fotos e videos dos imoveis
 */

namespace App\Http\Controllers;

use App\Media;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Redis\RedisServiceProvider;

/**
 * Trata todos os tipos de medias que passam por imoveis
 * PHP version 5.5
 * 
 * @category App
 * @package  App
 * @author   Marcio Sartini <marcio.sartini@grupofolha.com.br>
 * @internal Medias para imoveis
 * @license  http://sartini.com.br Imoveis
 * @link     medias para todas as fotos e videos dos imoveis
 */
class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
    */
    public function index()
    {
        //$arquivo = new Media();
        //$arquivo->nome = "Arquivo do word";
        //$arquivo.save();
        $arquivos = new Media();
        $arquivos->arquivo = "documento";
        $arquivos->save();

        $files = $arquivos->all();
        //    var_dump(config('database.redis.default'));
        // try {
        //     $redis = Redis::connection();
        // } catch (Exception $e) {
        //     echo 'Erro de conexão com Redis', $e->getMessage() . '\n';
        // }

        //$redis->set('message', 'ola tudo bem');

        //$name = $redis->get('message')

        $titulo = "Lista arquivos de mídia - message";

        //print_r( $arquivos->get_element_by_rg() ) ;

        //return view( 'media' )->with( 'files' , $files );

        return view('media', compact('titulo', 'files'));

    }

    /**
     * Display the specified resource.
     * @param int $idObj id do item
     * @return Response
     */
    public function show($idObj)
    {
        return "show method" . $idObj;
    }
}
