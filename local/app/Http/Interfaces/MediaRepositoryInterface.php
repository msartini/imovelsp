<?php namespace App\Http\Interfaces;

interface MediaRepositoryInterface {

	public function all();

	public function findFirst();

	public function createOrUpdate( $objeto );
        
        public function getByExtension( $extension );

}