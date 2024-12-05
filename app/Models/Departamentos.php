<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Departamentos extends Model
{
    use HasFactory;
    protected $fillable = ['departamento','puesto_id'];

    public function capacitaciones() : HasMany{
        return $this->hasMany(Capacitaciones::class);
    }
    public function puesto()
{
    return $this->belongsTo(Puestos::class);
}
}
