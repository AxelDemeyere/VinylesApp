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
        Schema::create('vinyles', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->integer('annee');
            $table->string('image');
            $table->string('description');
            $table->foreignId('artiste_id')->constrained();
            $table->foreignId('label_id')->constrained();
            $table->foreignId('comment_id')->constrained();

            $table->timestamps();
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vinyle');
    }
};

