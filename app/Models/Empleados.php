<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Empleados extends Model
{
    use HasFactory;
    protected $fillable = ['nombre','apellidos','telefono','email','puesto_id'];

    public function puestos() : HasMany{
        return $this->hasMany(Capacitaciones::class);
    }

    public function puesto(){
        return $this->belongsTo(Puestos::class);
    }

    /*public function departamentos() : HasMany{
        return $this->hasMany(Departamentos::class);
    }
    public function departamento(){
        return $this->belongsTo(Empleados::class);
    }*/
}
