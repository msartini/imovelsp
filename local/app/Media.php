<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model  {

    protected $table = 'medias';
    
    public function get_element_by_rg(){
        return array( '1' => 'Employer' ) ;
    }
    
}
