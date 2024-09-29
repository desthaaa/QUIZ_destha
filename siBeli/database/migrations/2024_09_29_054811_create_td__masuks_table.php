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
        Schema::create('td__masuks', function (Blueprint $table) {
            $table->id();
            $table->integer("idMasuk", length:5);
            $table->char("kdMasuk", length: 10);
            $table->char("kdBarangBeli", length: 7);
            $table->integer("jumlah", length: 3);
            $table->integer("subtotal", length: 5);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('td__masuks');
    }
};
