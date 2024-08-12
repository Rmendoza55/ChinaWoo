<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesas extends Model
{
    use HasFactory;

    public function estado_mesa()
    {
        return $this->belongsTo(EstadoMesa::class);
    }

    public function detalle_ordenes()
    {
        return $this->hasMany(DetalleOrdenes::class);
    }
}
