<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antrian extends Model
{
    use HasFactory;

    protected $table = 'antrian';
    protected $fillable = [
    'nama',
    'tanggal_periksa',
    'kategori_layanan',
    'no_telepon',
    'alamat',
    'usia',
    'jenis_kelamin',
    'gigi_sakit',
    'gigi_berdarah',
    'durasi_layanan',
    'waktu',
    'nomor',
    'pilih_dokter',
    'status'];

    // Definisikan relasi dengan model User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
