<?php namespace App\Http\Repositories;

use App\Http\Interfaces\UserRepositoryInterface;
use App\User;

class DbUserRepository implements UserRepositoryInterface
{

    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function all()
    {
        return $this->user->all();
    }

    public function findFirst()
    {
        return $this->user->find(1);
    }

    public function findFile()
    {
        //$user = $this->user->find(1);
        return $this->user->find(1);
    }
}
