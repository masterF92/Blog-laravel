<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    // Récupérer les posts associés à une catégorie
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class); // Une catégorie peut avoir plusieurs posts
    }
}
