<?php

namespace TM\Core\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technician extends Model
{
    protected $fillable = [
        'name', 'cell_number', 'verified', 'password', 'about', 'latitude', 'longitude',
        'city_id', 'district_id', 'is_banned', 'remember_token'
    ];

    public function users()
    {
        $this->belongsToMany(User::class);
    }
}
