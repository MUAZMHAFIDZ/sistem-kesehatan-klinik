<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Profil extends Model
{
    use HasFactory;
    protected $table = 'profil';
    protected $fillable = ['deskripsi','email','pengalaman','pendidikan','alamat'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
