<?php

use Illuminate\Support\Facades\Route;
use TM\Notification\Services\Sms\SendSms;

Route::namespace('Auth')->group(function () {
    Route::post('login', 'LoginHandler');
    Route::post('register', 'RegisterHandler');
    Route::post('verify-register', 'VerifyRegister');
    Route::post('logout', 'LogoutHandler')->middleware('auth:apicore');
});
Route::namespace('Technician')->middleware('auth:apicore')->group(function(){
    Route::get('/technicians','IndexTechnician');
//    Rotue::post('/technicians','StoreTechnician');
});
