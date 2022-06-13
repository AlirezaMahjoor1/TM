<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;

class User extends Model
{
    use HasApiTokens;
}
