<?php

namespace TM\Core\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use TM\Core\Models\User;
use TM\Core\Request\LoginRequest;
use TM\Core\Services\Responser;
use TM\Core\Services\UserVerifier;

class LoginHandler extends Controller
{
    public function __invoke(LoginRequest $request)
    {
        $credentials = $request->only('cell_number', 'password');

        if (auth()->attempt($credentials)) {
            if (UserVerifier::isVerified($request)) {
                return auth()->user()->createToken('Personal Client')->accessToken;
            } else {
                return Responser::error(null,trans('core::message.not_verified'));
            }

        } else {
            return Responser::error(null, trans('core::message.credentials'));
        }
    }
}
