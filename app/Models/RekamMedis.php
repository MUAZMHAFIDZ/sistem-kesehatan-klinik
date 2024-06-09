<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekamMedis extends Model
{
    use HasFactory;

    protected $table = 'rekam_medis';
    protected $fillable = [
    'id',
    'id_antrian',
    'diagnosa',
    'dibuat',];


    public function antrian()
    {
        return $this->belongsTo(Antrian::class, 'id_antrian');
    }
}
