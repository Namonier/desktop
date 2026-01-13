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
        Schema::create('sobre', function (Blueprint $table) {
            $table->id();
            $table->text('texto');       // Para textos longos de descrição
            $table->string('endereco');  // Endereço
            $table->string('email');     // E-mail de contato
            $table->string('telefone');  // Telefone/WhatsApp
            $table->timestamps();        // created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sobre');
    }
};
