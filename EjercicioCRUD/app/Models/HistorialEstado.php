<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialEstado extends Model
{
    use HasFactory;

    protected $fillable = ['id_servicio', 'id_estado', 'fecha'];

    public function servicio()
    {
        return $this->belongsTo(Servicio::class, 'id_servicio');
    }

    public function estado()
    {
        return $this->belongsTo(EstadoServicio::class, 'id_estado');
    }
}
