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
        Schema::create('antrian', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 30)->notNull();
            $table->bigInteger('no_telepon')->nullable();
            $table->string('alamat', 255)->notNull();
            $table->integer('usia')->notNull();
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan'])->notNull();
            $table->date('tanggal_periksa')->notNull();
            $table->enum('gigi_sakit', ['ya', 'tidak'])->notNull();
            $table->enum('gigi_berdarah', ['ya', 'tidak'])->notNull();
            $table->string('kategori_layanan', 40)->notNull();
            $table->integer('durasi_layanan')->nullable();
            $table->time('waktu')->nullable();
            $table->integer('nomor')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('antrian');
    }
};
