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
        Schema::create('t_suppliers', function (Blueprint $table) {
            $table->id();
            $table->char("kdSupplier", length: 7);
            $table->char("namaSupplier", length: 30);
            $table->char("Alamat", length: 75);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_suppliers');
    }
};
