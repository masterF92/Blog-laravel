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
        Schema::create('post_tag', function (Blueprint $table) { // créer la table post_tag
            $table->id(); // Clé primaire
            $table->foreignId('post_id')->constrained()->cascadeOnDelete(); // Clé étrangère vers la table posts
            $table->foreignId('tag_id')->constrained()->cascadeOnDelete(); // Clé étrangère vers la table tags
            $table->timestamps(); // Champs created_at et updated_at  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_tag'); // supprimer la table post_tag
    }
};
