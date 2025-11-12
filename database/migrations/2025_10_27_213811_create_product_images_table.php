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
        Schema::create('product_images', function (Blueprint $table) {
            $table->id('id_product_image');
            $table->string('image_url', 200);
            $table->string('title', 100);
            $table->tinyInteger('is_home');
            
            // Chave estrangeira
            $table->unsignedBigInteger('id_product');
            $table->foreign('id_product')
                  ->references('id_product')
                  ->on('products')
                  ->onDelete('cascade'); // Ação em caso de deleção (opcional)

            $table->timestamps(); // Omitido
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_images');
    }
};