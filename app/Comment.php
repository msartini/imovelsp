<?php namespace Casaoeste;

use Eloquent;
use Casaoeste\Post;

class Comment extends Eloquent
{
    // MASS ASSIGNMENT -------------------------------------------------------
    // define which attributes are mass assignable (for security)
    // we only want these 2 attributes able to be filled
    protected $fillable = array('comment');

    // LINK THIS MODEL TO OUR DATABASE TABLE ---------------------------------
    // since the plural of fish isnt what we named our database table we have to define it
    protected $table = 'comments';


    //atualizacao reversa de campos, exemplo, atualiza campos de updated_at no tabela post com a mesma data de comment
    protected $touches = ['post'];

    // DEFINE RELATIONSHIPS --------------------------------------------------
    public function post()
    {
        return $this->belongsTo('Casaoeste\Post');
    }
}
