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
            $table->unsignedBigInteger('user_id')->nullable(); // Menambahkan kolom user_id sebagai kunci asing
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Menambahkan constraint foreign key
            $table->string('nama', 50)->nullable(); // Menambahkan kolom nama
            $table->bigInteger('no_telepon')->nullable(); // Menambahkan kolom no_telepon
            $table->string('alamat', 255)->nullable(); // Menambahkan kolom alamat
            $table->integer('usia')->nullable(); // Menambahkan kolom usia
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan'])->nullable(); // Menambahkan kolom jenis_kelamin
            $table->date('tanggal_periksa')->nullable(); // Menambahkan kolom tanggal_periksa
            $table->enum('gigi_sakit', ['ya', 'tidak'])->nullable(); // Menambahkan kolom gigi_sakit
            $table->enum('gigi_berdarah', ['ya', 'tidak'])->nullable(); // Menambahkan kolom gigi_berdarah
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