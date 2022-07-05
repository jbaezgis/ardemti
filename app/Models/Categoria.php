<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'description',
        'precio',
        'categoria',
        'estado',
        'creado_por',
    ];
    
}
