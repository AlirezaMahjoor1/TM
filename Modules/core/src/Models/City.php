<?php

namespace TM\Core\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'name', '_lft', '_rgt', 'parent_id'
    ];

    public function districts()
    {
       return $this->hasMany(District::class);
    }

    public function technicians()
    {
       return $this->hasMany(Technician::class);
    }
}
