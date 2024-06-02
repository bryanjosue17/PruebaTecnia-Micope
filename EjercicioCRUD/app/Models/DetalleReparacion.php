<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleReparacion extends Model
{
    use HasFactory;

    protected $table = 'detalle_reparaciones'; // Asegúrate de que el nombre de la tabla sea correcto

    protected $fillable = [
        'id_servicio',
        'id_pieza',
        'descripcion',
        'cantidad',
        'costo',
    ];

    public function servicio()
    {
        return $this->belongsTo(Servicio::class, 'id_servicio');
    }

    public function pieza()
    {
        return $this->belongsTo(Pieza::class, 'id_pieza');
    }
}
