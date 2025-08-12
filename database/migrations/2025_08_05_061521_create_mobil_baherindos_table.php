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
        Schema::create('mobil_baherindos', function (Blueprint $table) {
            $table->id();
            $table->string('namaMobil');
            $table->decimal('hargaMobil');
            $table->year('tahunMobil');
            $table->integer('kmMobil');
            $table->string('gambarMobil')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobil_baherindos');
    }
};
