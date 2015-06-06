<?php namespace App\Http\Controllers;

/**
 * Description of Postcontroller
 *
 * @author marciosartini
 */

use App\Post;
use App\Comment;

use App\Repositories\PostRepository;

use Carbon\Carbon;

/**
 *  Description of PostController
 *
 *  @method   transacoes de produtos
 *  @category Controllers
 *  @package  Controller
 *  @author   Marcio Sartini <msartini@gmail.com>
 *  @license  Sartini http://sartini.com.br
 *  @link     Produtos
 */
class PostController extends Controller
{

    protected $posts;

    /**
     * Constructor recebe injecao de dependencia
     *
     * @param PostRepository $postRepository
     * @internal param DbUserRepository $dbUserRepository Injeçao de dependencia de Users
     *
     * @return \App\Http\Controllers\PostController
     */
    public function __construct(PostRepository $postRepository)
    {
        $this->posts = $postRepository;
    }
    
     /**
    * Constructor recebe injecao de dependencia
    *
    * @return void
    */
    public function index()
    {


        $post = array (
            'post_id' => 1,
            'comment_id' => 7,
            'comment' => 'Alterado o comentario 7 do post 1 - as: ' . Carbon::now()
        );
        $posts = $this->posts->updateCommentByPost($post);

        $titulo = "Lista de imagens";

        return view('posts.post', compact('titulo', 'posts'));
    }
}
