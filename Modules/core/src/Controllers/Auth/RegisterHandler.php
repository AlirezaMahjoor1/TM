<?php


namespace TM\Core\Controllers\Auth;

use TM\Core\Infrastructures\Interfaces\RegisterRepositoryInterface;
use TM\Core\Models\User;
use TM\Core\Request\RegisterRequest;
use App\Http\Controllers\Controller;
use TM\Core\Services\Auth\ClientAuthService;
use TM\Core\Services\UserVerifier;

class RegisterHandler extends Controller
{
    public function __invoke(RegisterRequest $request)
    {
        return app()->make(RegisterRepositoryInterface::class)->register($request->all());
    }
}
