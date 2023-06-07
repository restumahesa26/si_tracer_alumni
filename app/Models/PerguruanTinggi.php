<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerguruanTinggi extends Model
{
    use HasFactory;

    public $table = 'perguruan_tinggi';

    protected $fillable = [
        'nisn', 'nama_universitas', 'nama_program_studi','jenis_universitas', 'jalur_seleksi', 'tahun_masuk', 'tahun_lulus', 'ip_1', 'ip_2', 'ip_3', 'ip_4', 'ip_5', 'ip_6', 'ip_7', 'ip_8', 'ip_9', 'ip_10', 'ip_11', 'ip_12', 'ip_13', 'ip_14'
    ];

    public function alumni()
    {
        return $this->hasOne(Alumni::class, 'nisn', 'nisn');
    }
}
