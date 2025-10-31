<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) { // créer la table posts
            $table->id(); // Clé primaire
            $table->string('title'); // Titre du post
            $table->string('slug')->unique(); // Slug unique pour chaque post
            $table->string('excerpt'); // Extrait du post
            $table->text('content'); // Contenu principal du post
            $table->string('thumbnail'); // URL de l'image miniature
            $table->timestamps(); // Champs created_at et updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts'); // supprimer la table posts
    }
};
