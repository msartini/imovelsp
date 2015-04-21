<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model  {

	private $nome;

	private $tipo;

    protected $table = 'medias';
    

   
    
    public function getNome()
    {
        return $this->nome;
    }

    private function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    private function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }


    public function get_element_by_rg(){
        return array( '1' => 'Employer' );
    }
    
}
