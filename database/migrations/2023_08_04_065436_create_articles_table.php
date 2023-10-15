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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->text('contenu');
            $table->enum('type', ['evenement', 'blog']);
            $table->string('url');
            $table->date('date_publication');
            $table->date('date_debut')->nullable();
            $table->date('date_fin')->nullable();
            $table->enum('statut', ['en attente', 'en ligne']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
