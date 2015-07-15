<?php namespace Casaoeste\Interfaces;

interface EstateImageInterface
{
    public function all();
    public function getById($mediaId);
    public function newImage(Array $media);
}
