<?php

use Illuminate\Support\Facades\Route;

Route::namespace('Auth')->group(function () {
    Route::get('login', 'LoginHandler');
});
