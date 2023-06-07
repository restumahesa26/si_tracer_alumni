<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;

    public $table = 'alumni';
    protected $primaryKey = 'nisn';
    public $incrementing = false;
    protected $keyType = 'string';

    public $fillable = [
        'nisn', 'user_id', 'angkatan', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'jurusan', 'no_hp', 'alamat', 'tahun_masuk', 'tahun_lulus', 'status_sekarang'
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function hapalan()
    {
        return $this->hasOne(Hapalan::class, 'nisn', 'nisn');
    }

    public function prestasi_akademik()
    {
        return $this->hasMany(PrestasiAkademik::class, 'nisn', 'nisn');
    }

    public function prestasi_non_akademik()
    {
        return $this->hasMany(PrestasiNonAkademik::class, 'nisn', 'nisn');
    }

    public function perguruan_tinggi()
    {
        return $this->hasMany(PerguruanTinggi::class, 'nisn', 'nisn');
    }

    public function pekerjaan()
    {
        return $this->hasMany(Pekerjaan::class, 'nisn', 'nisn');
    }

    public function getPerguruanTinggi($nisn)
    {
        $check = PerguruanTinggi::where('nisn', $nisn)->where('tahun_lulus', '!=', '')->orderBy('tahun_masuk', 'DESC')->first();

        if ($check) {
            return $check;
        } else {
            $item = PerguruanTinggi::where('nisn', $nisn)->orderBy('tahun_masuk', 'DESC')->first();
            return $item;
        }
    }

    public function getPekerjaan($nisn)
    {
        $item = Pekerjaan::where('nisn', $nisn)->latest()->first();

        return $item;
    }
}
