<?php


namespace TM\Core\Controllers\Auth;


use App\Http\Controllers\Controller;

class LoginHandler extends Controller
{
    public function __invoke()
    {
        return "Hello from Login Handler";
    }
}
