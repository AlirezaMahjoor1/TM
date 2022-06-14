<?php

namespace TM\Core\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use TM\Core\Models\User;
use TM\Core\Request\LoginRequest;

class LoginHandler extends Controller
{
    public function __invoke(LoginRequest $request)
    {
        $password = bcrypt($request->password);
        DB::table('users')->insert([
            'name' => 'ali',
            'cell_number' => '09192906680',
            'password' => $password
        ]);

        $credentials = $request->only('cell_number', 'password');

        if (auth()->attempt($credentials)) {
            $token = auth()->user()->createToken('Personal Client')->accessToken;

            return  $token;
                    } else {
            return 'Your cellNumber Or password not exist!';
        }
    }
}
