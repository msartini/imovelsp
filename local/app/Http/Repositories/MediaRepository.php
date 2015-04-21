<?php namespace App\Http\Repositories; 
use App\Http\Interfaces\MediaRepositoryInterface;
use App\Media;

class MediaRepository implements MediaRepositoryInterface {
    

	public function __construct(Media $media)
    {
        $this->media = $media;
    }


	public function all(){
		return Media::all();
	}

	public function findFirst(){
		return Media::find(1);
	}

	public function createOrUpdate( $dto ) {
		

		if (  $dto->getId() ) {
			$media = Media::find( $dto->getId() ) ;
		} else {
			$media = new Media();
		}
		
		$media->arquivo = $dto->getArquivo();

		$media->save();

		return $media;

	}

}