<?php

namespace Casaoeste\Repositories;

use Casaoeste\Models\Category;
use Casaoeste\Models\Media;
use Casaoeste\Interfaces\MediaInterface;

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
