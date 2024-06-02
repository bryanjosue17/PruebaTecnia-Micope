<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoServicio extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    public function servicios()
    {
        return $this->hasMany(Servicio::class, 'id_estado');
    }

    public function historialEstados()
    {
        return $this->hasMany(HistorialEstado::class, 'id_estado');
    }
}
