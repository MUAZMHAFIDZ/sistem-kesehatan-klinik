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
        Schema::table('antrian', function (Blueprint $table) {
            $table->unsignedBigInteger('id_dokter');
            $table->unsignedBigInteger('id_pasien')->nullable();
            $table->boolean('riwayat');



            $table->foreign('id_dokter')->references('id')->on('users');
            $table->foreign('id_pasien')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('antrian', function (Blueprint $table) {
            Schema::dropIfExists('riwayat');
        });
    }
};
