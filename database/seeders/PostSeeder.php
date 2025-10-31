<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all(); // Récupérer toutes les catégories
        $tags = Tag::all(); // Récupérer tous les tags

        Post::factory(20) // Créer 20 posts
            ->sequence(fn () => [ // Assigner une catégorie aléatoire à chaque post
                'category_id' => $categories->random(),
            ])
            ->create()
            ->each(fn ($post) => $post->tags()->attach($tags->random(rand(0, 3)))); // Assigner entre 0 et 3 tags aléatoires à chaque post
    }
}
