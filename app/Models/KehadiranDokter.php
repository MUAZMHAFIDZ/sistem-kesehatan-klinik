<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KehadiranDokter extends Model
{
    use HasFactory;
    protected $table = 'kehadiran_dokter';
    protected $fillable = ['id_dokter', 'terakhir_hadir'];

    public function users() {
        return $this->belongsTo(User::class, 'id_dokter');
    }
}
