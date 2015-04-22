<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model  {
 
    protected $table = 'medias';
 
    
    public function scopeDocument($query) {
        return $query->whereArquivo('documento');
    }

 
}
