<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Capacitaciones extends Model
{
    use HasFactory;
    protected $fillabe = ['capacitacion','descripcion','duracion','empleado_id'];

    public function empleados() : BelongsToMany{
        return $this->belongsToMany(Empleados::class);
    }
}
