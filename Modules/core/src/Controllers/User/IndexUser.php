<?php

namespace TM\Core\Controllers\User;

use App\Http\Controllers\Controller;
use TM\Core\Infrastructures\Interfaces\UserRepositoryInterface;

class IndexUser extends Controller
{
    public function __invoke()
    {
        return app()->make(UserRepositoryInterface::class)->index();
    }
}
