<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleOrdenes extends Model
{
    use HasFactory;

    public function mesas()
    {
        return $this->belongsTo(Mesas::class);
    }

    public function ordenes()
    {
        return $this->belongsTo(Ordenes::class);
    }

    public function platos()
    {
        return $this->belongsTo(Platos::class);
    }

    public function productos()
    {
        return $this->belongsTo(Productos::class);
    }
}
