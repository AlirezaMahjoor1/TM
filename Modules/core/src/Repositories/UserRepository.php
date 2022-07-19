<?php

namespace TM\Core\Repositories;

use Spatie\QueryBuilder\QueryBuilder;
use TM\Core\Infrastructures\Interfaces\UserRepositoryInterface;
use TM\Core\Models\User;

class UserRepository implements UserRepositoryInterface
{

    public function index()
    {
        $users = QueryBuilder::for(User::class)
            ->allowedFilters(['name'])
            ->get();
        return $users;
    }
}
