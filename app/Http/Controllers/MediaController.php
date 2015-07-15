<?php
/**
 * Trata todos os tipos de medias que passam por imoveis
 * PHP version 5.5
 * @category App
 * @package  App
 * @author   Marcio Sartini <marcio.sartini@grupofolha.com.br>
 * @internal Medias para imoveis
 * @license  http://sartini.com.br Imoveis
 * @link     medias para todas as fotos e videos dos imoveis
 */

namespace Casaoeste\Http\Controllers;

use Casaoeste\Repositories\DbUserRepository;
use Casaoeste\Repositories\MediaRepository;
use Casaoeste\Models\Media;
use Casaoeste\Http\Controllers\Controller;

/**
 * Trata todos os tipos de medias que passam por imoveis
 * PHP version 5.5
 * @category App
 * @package  App
 * @author   Marcio Sartini <marcio.sartini@grupofolha.com.br>
 * @internal Medias para imoveis
 * @license  http://sartini.com.br Imoveis
 * @link     medias para todas as fotos e videos dos imoveis
 */
class MediaController extends Controller
{

    protected $media = "media";
    protected $repo;

    public function __construct(DbUserRepository $repo, MediaRepository $media)
    {
        $this->repo = $repo;
        $this->media = $media;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
    */
    public function index()
    {
        $arquivos = new Media();
        $arquivos->arquivo = "ue";
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

        return view('media', compact('titulo', 'files'));

    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($mediaId)
    {
        $media = $this->media;
        return $media->getById($mediaId);
    }
}
