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
        Schema::create('designated', function (Blueprint $table) {
            // Chaves estrangeiras
            $table->unsignedBigInteger('id_teacher');
            $table->unsignedBigInteger('id_courses');

            // Definição das chaves estrangeiras
            $table->foreign('id_teacher')
                  ->references('id_teacher')
                  ->on('teachers')
                  ->onDelete('cascade');
            
            $table->foreign('id_courses')
                  ->references('id_courses')
                  ->on('courses')
                  ->onDelete('cascade');

            // Chave primária composta
            $table->primary(['id_teacher', 'id_courses']);
            
            $table->timestamps(); // Omitido
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('designated');
    }
};