<?php namespace App\Repositories;

use App\Interfaces\UserRepositoryInterface;
use App\User;

class DbUserRepository implements UserRepositoryInterface
{
    
    public function all()
    {
        return User::all();
    }

    public function findFirst()
    {
        return User::find(1);
    }
}
