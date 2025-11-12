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
        Schema::create('courses', function (Blueprint $table) {
            $table->id('id_courses');
            $table->string('title', 100);
            $table->string('modality', 100);
            $table->text('description');
            $table->string('duration', 30);

            // Chave estrangeira
            $table->unsignedBigInteger('id_categories');
            $table->foreign('id_categories')
                  ->references('id_categories')
                  ->on('categories')
                  ->onDelete('cascade'); // Ação em caso de deleção (opcional)

            $table->timestamps(); // Omitido
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};