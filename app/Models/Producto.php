<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;
use App\Models\User;

class Producto extends Model
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

    public function user()
    {
        return $this->belongsTo(User::class, 'creado_por');
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
