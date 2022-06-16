<?php

use Illuminate\Support\Facades\Route;
use TM\Notification\Services\Sms\SendSms;

Route::namespace('Auth')->group(function () {
    Route::post('login', 'LoginHandler');
    Route::post('register', 'RegisterHandler');
});
