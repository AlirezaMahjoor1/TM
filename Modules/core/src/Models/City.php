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
        $this->hasMany(District::class);
    }
}
