<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoObservacion extends Model
{
    use HasFactory;

    public function observacion()
    {
        return $this->hasMany(Observacion::class);
    }
}
