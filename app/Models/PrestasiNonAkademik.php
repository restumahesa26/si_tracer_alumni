<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrestasiNonAkademik extends Model
{
    use HasFactory;

    public $table = 'prestasi_non_akademik';

    protected $fillable = [
        'nisn', 'prestasi', 'deskripsi', 'sertifikat', 'tingkat'
    ];

    public function alumni()
    {
        return $this->hasOne(Alumni::class, 'nisn', 'nisn');
    }
}
