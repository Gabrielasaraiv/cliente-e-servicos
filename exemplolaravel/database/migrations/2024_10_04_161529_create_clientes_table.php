<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 80)->nullable(false);
            $table->string('celular')->nullable(false);
            $table->string('CPF')->nullable(false);
            $table->string('email', 100)->nullable(false);
            $table->date('data_nascimento')->nullable(false);
            $table->string('cidade', 100)->nullable(false);
            $table->string('estado', 80)->nullable(false);
            $table->string('pais')->nullable(false);
            $table->string('rua', 100)->nullable(false);
            $table->string('numero')->nullable(false);
            $table->string('bairro')->nullable(false);
            $table->string('CEP')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};

/* nome, celular, CPF, e-mail, data de 
nascimento, Cidade, estado, país, rua, numero, bairro, CEP*/