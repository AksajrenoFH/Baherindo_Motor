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
        Schema::create('motor_baherindos', function (Blueprint $table) {
            $table->id();
            $table->string('namaMotor');
            $table->decimal('hargaMotor');
            $table->year('tahunMotor');
            $table->integer('kmMotor');
            $table->string('gambarMotor')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motor_baherindos');
    }
};
