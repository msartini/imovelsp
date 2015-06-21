<?php

namespace App\Repositories;

use App\Models\Category;
use App\Models\Media;
use App\Interfaces\MediaInterface;

class MediaRepository implements MediaInterface
{
    protected $media;

    public function __construct(Media $media)
    {
        $this->media = $media;
    }

    public function all()
    {
        return $this->media->all();
    }

    public function getById($mediaId)
    {
        return $this->media->find($mediaId);
    }
}
