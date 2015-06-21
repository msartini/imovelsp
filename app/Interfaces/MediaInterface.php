<?php namespace App\Interfaces;

interface MediaInterface
{
    public function all();
    public function getById($mediaId);
}
