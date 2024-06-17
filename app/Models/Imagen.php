<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    use HasFactory;
    protected $table = 'imagenes';
    protected $fillable = ['museo_id', 'ruta'];

    public function museo()
    {
        return $this->belongsTo(Museo::class);
    }
}
