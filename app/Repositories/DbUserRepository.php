<?php namespace Casaoeste\Repositories;

use Casaoeste\Interfaces\UserRepositoryInterface;
use Casaoeste\User;

class DbUserRepository implements UserRepositoryInterface
{

    protected $user;

    public function __construct(User $user)
    {
        $this->users = $user;
    }

    public function all()
    {
        return $this->users->all();
    }

    public function findFirst()
    {
        return $this->users->find(1);
    }

    public function findFile()
    {
        return $this->users->all();
    }
}
