<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Puestos extends Model
{
    use HasFactory;
    protected $fillable = ['puesto','descripcion','departamento_id']; 
    public function empleados() : HasMany{
        return $this->hasMany(Empleados::class);
    }

}
