<?php namespace Casaoeste\Interfaces;

use Casaoeste\Models\Estate;

interface EstateImageInterface
{
    public function all();
    public function getById($mediaId);
    public function newImage(Array $media, Estate $estate);
}
