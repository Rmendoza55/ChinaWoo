<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordenes extends Model
{
    use HasFactory;

    public function pagos()
    {
        return $this->belongsToMany(Pagos::class);
    }

    public function usuarios()
    {
        return $this->belongsTo(User::class);
    }

    public function observacion()
    {
        return $this->hasOne(observacion::class);
    }

    public function detalle_orden()
    {
        return $this->hasMany(DetalleOrdenes::class);
    }
}
