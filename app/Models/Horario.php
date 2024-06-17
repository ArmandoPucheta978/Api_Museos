<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;
    protected $table = 'horarios';
    protected $fillable = ['museo_id', 'dia_semana', 'hora_apertura', 'hora_cierre'];

    public function museo()
    {
        return $this->belongsTo(Museo::class);
    }
}
