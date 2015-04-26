<?php namespace App\Http\Repositories; 
use App\Http\Interfaces\MediaRepositoryInterface;


use App\Media;
use App\MediaDTO;

class MediaRepository implements MediaRepositoryInterface {
    

	public function __construct(Media $media)
    {
        $this->media = $media;
    }


	public function all(){
		return $this->media->all();
	}



	public function findById( $id ){
		return $this->media->find( $id );
	}

	public function findFirst(){
		return $this->media->find(1);
	}

	public function createOrUpdate( $dto ) {
		if (  $dto->getId() ) {
                    $this->media = Media::find( $dto->getId() ) ;

                    if ( ! $this->media) {
                    	$this->media = new Media() ;
                    }
                   
		} else {
                    $this->media = new Media();
		}
		
                
        $this->media->arquivo = $dto->getArquivo();

        $this->media->extensao = $dto->getExtensao();
        
        
        $this->media->save();
		return $this->media;
	}
        
        public function getByExtension( $extension ) {
            return $this->media->where('extensao', '=', $extension)->get();
        }
        
        
        

}