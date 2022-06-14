<?php

namespace TM\Core\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;

    protected $fillable =[
        'name',
        'cell_number',
        'password'
    ];
}
