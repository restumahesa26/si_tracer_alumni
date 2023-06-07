<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pekerjaan extends Model
{
    use HasFactory;

    public $table = 'pekerjaan';

    protected $fillable = [
        'nisn', 'nama_pekerjaan', 'jabatan', 'instansi'
    ];

    public function alumni()
    {
        return $this->hasOne(Alumni::class, 'nisn', 'nisn');
    }
}
