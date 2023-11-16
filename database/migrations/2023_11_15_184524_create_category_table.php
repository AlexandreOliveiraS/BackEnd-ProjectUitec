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
        Schema::create('category', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category')->constrained(table: 'product', indexName: 'id_category')->nullable();
            $table->String('Eletronicos')->nullable();
            $table->String('Domesticos')->nullable();
            $table->String('Pets')->nullable();
            $table->String('Automoveis')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category');
    }
};
