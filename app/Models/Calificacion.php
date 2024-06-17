<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    use HasFactory;
        
    protected $table = 'calificaciones';

    protected $fillable = ['museo_id', 'puntuacion'];

    public function museo()
    {
        return $this->belongsTo(Museo::class);
    }
}
