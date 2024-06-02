<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pieza extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'descripcion', 'cantidad_disponible', 'precio', 'id_proveedor'];

    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class, 'id_proveedor');
    }

    public function detallesReparacion()
    {
        return $this->hasMany(DetalleReparacion::class, 'id_pieza');
    }
}
