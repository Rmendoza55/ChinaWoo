<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platos extends Model
{
    use HasFactory;

    public function estado_producto()
    {
        return $this->belongsTo(EstadoProducto::class);
    }

    public function detalle_ordenes()
    {
        return $this->hasMany(DetalleOrdenes::class);
    }
}
