<?php  namespace App\Http\Repositories;

use App\Http\Interfaces\PostRepositoryInterface;
use App\Post;
use App\Comment;

class PostRepository implements PostRepositoryInterface
{
    public function all()
    {
        return Post::all();
    }


    /**
    *   Eager Loading, with comments relation
    *   foreach ($eagerPosts as $post) {
    *        echo $post->title . '<br>';
    *        foreach ($post->comments as $comment) {
    *            echo $comment->comment . '<br>';
    *        }
    *        echo "<hr>";
    *    }
    *
    */
    public function allEagerLoad()
    {
        return Post::with('comments')->get();
    }

    public function findCommentByPostId($id)
    {
        return Post::find($id)->comments;
    }

    public function findById($id)
    {
        return Post::find($id);
    }

    public function findByTitle($title)
    {
        return Post::find()->where('title', '=', $title)->first();
    }

    public function insertCommentByPost($post_id, $comment)
    {
        $comment = new Comment(['comment' => $comment]);

        $post = Post::find($post_id);

        $comment = $post->comments()->save($comment);

        return true;
    }

    public function updateCommentByPost(array $post)
    {

        $comment = Comment::find($post['comment_id']);

        if (!$comment) {
            return "Erro recuperando comentário para efetuar atualização";
        }

        $comment->comment = $post['comment'];

        $post = Post::find($comment->post_id);

        if (!$comment) {
            return "Erro recuperando post para salvar comentário";
        }

        $comment = $post->comments()->save($comment);

        return $comment;

    }
}
