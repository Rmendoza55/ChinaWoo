<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Observacion extends Model
{
    use HasFactory;

    public function estado_observacion()
    {
        return $this->belongsTo(EstadoObservacion::class);
    }

    public function ordenes()
    {
        return $this->belongsTo(Ordenes::class);
    }
}
