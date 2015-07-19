<?php

namespace Casaoeste\Repositories;

use Casaoeste\Models\Estate;
use Casaoeste\Models\Category;
use Casaoeste\Models\EstateImages;
use Casaoeste\Interfaces\EstateImageInterface;
use Config;
use File;
use Image;

class EstateImageRepository implements EstateImageInterface
{
    protected $media;

    public function __construct(EstateImages $media)
    {
        $this->media = $media;
    }

    public function all()
    {
        return $this->media->all();
    }

    public function getById($idMedia)
    {
        return $this->media->find($idMedia);
    }

    public function newImage(Array $files, Estate $estate)
    {

        try {
            $sequence = 0;
            foreach ($files as $file) {
                $temp = explode(".", $file->getClientOriginalName());
                $extension = end($temp);
                $newFileName = $estate->id . '_' . date('Ymd-his').'-' . ++$sequence;

                $estateImage = new EstateImages();

                $estateImage->estate_id = $estate->id;
                $estateImage->file_original_name = $file->getClientOriginalName();
                $estateImage->filename = $newFileName . '.' . $extension;
                $estateImage->extension = $extension;
                $estateImage->fullpath = Config::get('media.pathSaveFile') . '/' .  $newFileName . '.' . $extension;
                $estateImage->save();

                $file->move(Config::get('media.pathSaveFile'), $newFileName . '.' . $extension);

                Image::make(Config::get('media.pathSaveFile').'/'.$newFileName . '.' .  $extension)->resize(300, 200)->save(Config::get('media.pathSaveFile').'/'. $newFileName. '-300x200.' . $extension);

                Image::make(Config::get('media.pathSaveFile').'/'.$newFileName . '.' .  $extension)->widen(400)->greyscale()->save(Config::get('media.pathSaveFile').'/'. $newFileName. '-400.' . $extension);

                //Image::make(Config::get('media.pathSaveFile').'/'.$newFileName . '.' .  $extension)->widen(800)->greyscale()->save(Config::get('media.pathSaveFile').'/'. $newFileName. '-800.' . $extension);

                //Image::make(Config::get('media.pathSaveFile').'/'.$newFileName . '.' .  $extension)->crop(800, 200, 0, 325)->save(Config::get('media.pathSaveFile').'/'. $newFileName. '-crop-800.' . $extension);

                Image::make(Config::get('media.pathSaveFile').'/'.$newFileName . '.' .  $extension)->fit(800, 200)->save(Config::get('media.pathSaveFile').'/'. $newFileName. '-fit-800-300.' . $extension);
            }

            return true;
        } catch (Exception $e) {
            var_dump($e);
            return false;
        }
    }
}
