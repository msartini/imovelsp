<?php namespace App;


class MediaDTO {

    private $id;

	private $arquivo;

	private $extensao;


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getArquivo()
    {
        return $this->arquivo;
    }

    public function setArquivo($arquivo)
    {
        $this->arquivo = $arquivo;

        return $this;
    }

    public function getExtensao()
    {
        return $this->extensao;
    }

    public function setExtensao($extensao)
    {
        $this->extensao = $extensao;

        return $this;
    }



}
