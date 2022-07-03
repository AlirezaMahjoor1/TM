<?php


namespace TM\Core\Controllers\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use TM\Core\Services\Responser;

class LogoutHandler extends Controller
{
    public function __invoke()
    {
        $token = auth()->user()->token();
        DB::table('oauth_access_tokens')->where('id', $token->id)->delete();
        DB::table('oauth_refresh_tokens')->where('id', $token->id)->delete();
        return Responser::success(null,trans('core::message.logout'));

    }

}
