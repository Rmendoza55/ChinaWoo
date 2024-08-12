<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoMesa extends Model
{
    use HasFactory;

    public function mesas()
    {
        return $this->hasMany(Mesas::class);
    }
}
