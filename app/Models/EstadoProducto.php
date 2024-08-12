<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoProducto extends Model
{
    use HasFactory;

    public function productos()
    {
        return $this->hasMany(Productos::class);
    }

    public function platos()
    {
        return $this->hasMany(Platos::class);
    }
}
