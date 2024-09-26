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
        Schema::create('t_barangs', function (Blueprint $table) {
            $table->id();
            $table->char("satuan", length:3);
            $table->char("namaBarang", length: 20);
            $table->char("kdBarang", length: 5);
            $table->integer("hargaJual");
            $table->integer("hargaBeli");
            $table->integer("stok");
            $table->char("status", length: 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_barangs');
    }
};
