<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoMuseo extends Model
{
    use HasFactory;
    protected $table = 'museo_tipo';

    public function museos()
    {
        return $this->belongsToMany(Museo::class, 'museo_tipo');
    }
}
