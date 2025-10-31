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
        Schema::table('posts', function (Blueprint $table) { // Modifier la table posts 
            $table->foreignId('category_id')->after('id')->nullable()->constrained()->nullOnDelete(); // Ajouter la colonne category_id avec contrainte de clé étrangère
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) { // Modifier la table posts
            $table->dropForeign(['category_id']); // Supprimer la contrainte de clé étrangère
            $table->dropColumn('category_id'); // Supprimer la colonne category_id
        });
    }
};
