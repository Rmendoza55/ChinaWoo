<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagos extends Model
{
    use HasFactory;

    public function estadopago()
    {
        return $this->belongsTo(EstadoPago::class);
    }

    public function tipopago()
    {
        return $this->belongsTo(TipoPago::class);
    }

    public function orden()
    {
        return $this->belongsToMany(Ordenes::class);
    }
}
