<?php

namespace TM\Core\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $fillable = [
        'name_fa', 'type', 'city_id',
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function technicians()
    {
        return $this->hasMany(Technician::class);
    }

}
