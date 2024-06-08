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
            $table->string('nama_dokter', 50);
            $table->boolean('status');
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
