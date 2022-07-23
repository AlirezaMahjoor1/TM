<?php

namespace TM\Core\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Technician extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'cell_number', 'verified', 'password', 'about', 'latitude', 'longitude',
        'city_id', 'district_id', 'is_banned', 'remember_token'
    ];

    protected static function newFactory()
    {
        $modelName = Str::after(get_called_class(), 'Models\\');
        $path = 'Database\\Factories\\' . $modelName . 'Factory';
        return new $path;
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }
}
