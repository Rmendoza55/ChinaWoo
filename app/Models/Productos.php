<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;

    public function estado_producto()
    {
        return $this->belongsTo(EstadoProducto::class);
    }

    public function detalle_orden()
    {
        return $this->hasMany(DetalleOrdenes::class);
    }
}
