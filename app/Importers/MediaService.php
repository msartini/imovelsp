<?php
namespace App\Importers;

use App\Http\Repositories\DbUserRepository;

/**
*
*/
class MediaService
{
    protected $media;

    public function __construct(DbUserRepository $dbUserRepository)
    {
        $this->users = $dbUserRepository;
    }


    public function getUsers()
    {
        $allusers = $this->users->findFile();
        return $allusers;
    }
}
