<?php

namespace TM\Core\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use TM\Core\Services\Responser;
use TM\Core\Services\UserVerifier;

class VerifyRegister extends Controller
{
    /**
     * @throws \Illuminate\Validation\ValidationException
     */
    public function __invoke(Request $request)
    {
        $this->validate($request,
            [
                'code' => 'required'
            ],
            [
                'code.required' => trans('core::message.code')
            ]);

        if ($user=UserVerifier::verifyUser($request->code)) {

            return Responser::success(null,trans('core::message.verified'));

        }
        return trans('core::message.invalid_code');

    }
}
