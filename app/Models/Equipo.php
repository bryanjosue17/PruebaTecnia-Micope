<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    protected $fillable = [
        'modelo', 'numero_serie', 'descripcion_problema', 'id_marca', 'id_tipo_equipo',
    ];

    public function marca()
    {
        return $this->belongsTo(Marca::class, 'id_marca');
    }

    public function tipoEquipo()
    {
        return $this->belongsTo(TipoEquipo::class, 'id_tipo_equipo');
    }
}
