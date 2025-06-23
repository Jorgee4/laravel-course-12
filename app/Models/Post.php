<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Testing\Fluent\Concerns\Has;

class Post extends Model
{
    use HasFactory; // Esto es necesario para habilitar las fábricas de modelos

    protected $fillable = [
        'title',
        'slug',
        'content',
        'category_id',
        'description',
        'posted',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
        // Esto establece una relación de pertenencia entre el modelo Post y el modelo Category
        // donde 'category_id' en la tabla de posts es la clave ajena que referencia a la tabla de categorías.
    }
}
