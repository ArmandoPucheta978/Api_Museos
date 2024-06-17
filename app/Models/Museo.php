<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Museo extends Model
{
    use HasFactory;
    protected $table ='museos';

    protected $fillable = [
        'nombre',
        'ubicacion',
        'ciudad',
        'pais',
        'costo_entrada',
        'descripcion',
        'contacto',
        'sitio_web',
    ];

    public function tipos()
    {
        return $this->belongsToMany(Tipo::class, 'museo_tipo');
    }

    public function horarios()
    {
        return $this->hasMany(Horario::class);
    }

    public function imagenes()
    {
        return $this->hasMany(Imagen::class);
    }

    public function calificaciones()
    {
        return $this->hasMany(Calificacion::class);
    }

    public function promedioCalificaciones()
    {
        return $this->calificaciones()->avg('puntuacion');
    }
}