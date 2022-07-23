<?php

namespace TM\Core\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Skill extends Model
{
    use HasFactory;
    protected $fillable= ['name'];

    protected static function newFactory()
    {
        $modelName = Str::after(get_called_class(), 'Models\\');

        $path = 'Database\\Factories\\' . $modelName . 'Factory';

        return new $path;
    }

    public function technicians()
    {
        return $this->belongsToMany(Technician::class);

    }
}
