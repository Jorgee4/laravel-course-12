<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Testing\Fluent\Concerns\Has;

class Category extends Model
{
    use HasFactory; // Esto es necesario para habilitar las fábricas de modelos

    protected $fillable = [
        'title',
        'slug'
    ];

    function posts()
    {
        return $this->hasMany(Post::class);
        // Esto establece una relación de uno a muchos entre el modelo Category y el modelo Post
        // donde una categoría puede tener muchos posts asociados.
    }
}
