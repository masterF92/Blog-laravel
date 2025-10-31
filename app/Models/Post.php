<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory;

    protected $with = ['category','tags'];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    // Récupérer la catégorie associée à un post
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class); // Un post appartient à une catégorie
    }

    // Récupérer les tags associés à un post
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class); // Un post peut avoir plusieurs tags
    }
}
