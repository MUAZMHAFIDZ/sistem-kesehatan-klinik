<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antrian extends Model
{
    use HasFactory;

    protected $table = 'antrian';

    protected $fillable = [
        'kategori_layanan',
        'durasi_layanan',
        'waktu',
        'tanggal_periksa',
        'jenis_kelamin',
        'gigi_sakit',
        'gigi_berdarah',
        'nomor',
        'user_id',
        'nama',
        'no_telepon',
        'alamat',
        'usia',
    ];

    // Definisikan relasi dengan model User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
