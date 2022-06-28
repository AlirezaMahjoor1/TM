<?php

namespace TM\Core\Repositories;

use Illuminate\Database\Eloquent\Model;
use TM\Core\Infrastructures\Interfaces\RegisterRepositoryInterface;
use TM\Core\Models\User;
use TM\Core\Services\Auth\UserAuthService;
use TM\Core\Services\Responser;
use TM\Core\Services\UserVerifier;

class RegisterRepository implements RegisterRepositoryInterface
{

    public function register(array $data)
    {
        $data['password'] = bcrypt($data['password']);
        $user = User::query()->updateOrCreate(['cell_number' => $data['cell_number']],$data);

        UserVerifier::sendCode($user);

        return Responser::success(null, trans('core::message.verify_code_sent'));
    }
}
