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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->integer('category')->nullable();
            $table->string('nomeproduto', 100)->nullable();
            $table->double('valorproduto')->nullable();
            $table->date('datavencimento')->nullable();
            $table->integer('quantidadeestoque')->nullable();
            $table->boolean('produtoperecivel')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
