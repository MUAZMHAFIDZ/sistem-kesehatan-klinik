<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\JadwalDokter;
use App\Models\Profil;
use App\Models\KehadiranDokter;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'fullname',
        'password',
        'image',
        'nohp',
        'email',
        'Authorize',
        'alamat',
        'riwayat_pendidikan',
        'jenis_kelamin',
        'tanggal_lahir',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'password' => 'hashed',
            'nohp' => 'integer',
        ];
    }

    public function profil()
    {
        return $this->hasOne(Profil::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::created(function ($user) {
            if ($user->Authorize === 'Dokter') {
                $jadwal = new JadwalDokter();
                $jadwal->id_dokter = $user->id;
                $jadwal->senin = '00:00-00:00';
                $jadwal->selasa = '00:00-00:00';
                $jadwal->rabu = '00:00-00:00';
                $jadwal->kamis = '00:00-00:00';
                $jadwal->jumat = '00:00-00:00';
                $jadwal->sabtu = '00:00-00:00';
                $jadwal->minggu = '00:00-00:00';
                $jadwal->status = 'Cuti / Libur';
                $jadwal->save();
                $kehadiran = new KehadiranDokter();
                $kehadiran->id_dokter = $user->id;
                $kehadiran->terakhir_hadir = date('Y-m-d');
                $kehadiran->save();
            }
        });
    }

    protected function jadwal()
    {
        return $this->hasOne(JadwalDokter::class);
    }
}
