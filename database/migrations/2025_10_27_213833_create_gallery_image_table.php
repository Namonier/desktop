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
        Schema::create('gallery_image', function (Blueprint $table) {
            $table->id('id_gallery_image');
            $table->string('image_url', 200);
            $table->string('description', 200);

            // Chave estrangeira (permite nulos)
            $table->unsignedBigInteger('id_event')->nullable();
            $table->foreign('id_event')
                  ->references('id_event')
                  ->on('events')
                  ->onDelete('set null'); // Define como nulo se o evento for deletado

            $table->timestamps(); // Omitido
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gallery_image');
    }
};