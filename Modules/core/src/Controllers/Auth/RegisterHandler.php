<?php


namespace TM\Core\Controllers\Auth;

use TM\Core\Models\User;
use TM\Core\Request\RegisterRequest;
use App\Http\Controllers\Controller;


class RegisterHandler extends Controller
{
    public function __invoke(RegisterRequest $request)
    {

        $data['name'] = $request->name;
        $data['cell_number'] = $request->cell_number;
        $data['password'] = bcrypt($request->password);
        $user = new User($data);
        $user->save();
        return $user;
    }
}
