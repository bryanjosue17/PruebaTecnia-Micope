<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha_recepcion',
        'id_estado',
        'diagnostico',
        'solucion',
        'id_cliente',
        'id_equipo',
        'id_tecnico',
    ];

    public function estado()
    {
        return $this->belongsTo(EstadoServicio::class, 'id_estado');
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }

    public function equipo()
    {
        return $this->belongsTo(Equipo::class, 'id_equipo');
    }

    public function tecnico()
    {
        return $this->belongsTo(Tecnico::class, 'id_tecnico');
    }
}
