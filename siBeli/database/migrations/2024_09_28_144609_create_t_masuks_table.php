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
        Schema::create('t_masuks', function (Blueprint $table) {
            $table->id();
            $table->char("kdSupplier", length: 7);
            $table->char("tglMasuk");
            $table->integer("kdAdmin", length: 3);
            $table->char("kdMasuk", length: 10);
            $table->char("totalMasuk", length: 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_masuks');
    }
};
