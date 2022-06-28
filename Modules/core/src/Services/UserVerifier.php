<?php

namespace TM\Core\Services;

use Illuminate\Support\Facades\Cache;
use mysql_xdevapi\Exception;
use TM\Core\Models\User;
use TM\Notification\Services\Sms\SendSms;

class UserVerifier
{
    public static function sendCode($user): SendSms
    {
        $randNumber = rand(100000, 999999);
        Cache::put('code_' . $randNumber, $user->id, 120);
        $sms = new SendSms($user->cell_number, $randNumber);
        $sms->send();
        return $sms;

    }

    public static function verifyUser($code)
    {
        $userId = Cache::pull('code_' . $code);
        if ($userId) {
            $user = User::query()->findOrFail($userId);
            $user->update(['verified' => 1]);
            return $user;
        }

    }

    public static function isVerified($request): bool
    {
        $verified = User::query()->where('cell_number', $request->cell_number)->where('verified', 1)->exists();
        if ($verified) {
            return true;
        }
        else
            return false;
    }
}
