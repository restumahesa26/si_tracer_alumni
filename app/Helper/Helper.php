<?php

namespace App\Helper;

use App\Models\Alumni;
use App\Models\Hapalan;
use Illuminate\Support\Facades\Auth;

function nilai($value)
    {
        if ($value == '0') {
            return 0;
        } else {
            return 1;
        }
    }

class Helper
{
    public static function getAlumniPerTahun()
    {
        $items = Alumni::where('tahun_lulus', '!=', '')->select('tahun_lulus')->groupBy('tahun_lulus')->get()->toArray();

        return $items;
    }

    public static function countAlumniPerTahun($tahun)
    {
        $item = Alumni::where('tahun_lulus', $tahun)->count();

        return $item;
    }

    public static function getAlumniJenisKelamin()
    {
        $items = Alumni::where('jenis_kelamin', '!=', '')->select('jenis_kelamin')->groupBy('jenis_kelamin')->orderByRaw("FIELD(jenis_kelamin , 'L', 'P') ASC")->get()->toArray();

        return $items;
    }

    public static function countAlumniJenisKelamin($jenis_kelamin)
    {
        $item = Alumni::where('jenis_kelamin', $jenis_kelamin)->count();

        return $item;
    }

    public static function getAlumniJurusan()
    {
        $items = Alumni::where('jurusan', '!=', '')->select('jurusan')->groupBy('jurusan')->orderByRaw("FIELD(jurusan , 'IPA', 'IPS') ASC")->get()->toArray();

        return $items;
    }

    public static function countAlumniJurusan($jurusan)
    {
        $item = Alumni::where('jurusan', $jurusan)->count();

        return $item;
    }

    public static function countAlumniJalurSeleksi($jalur_seleksi)
    {
        $item = Alumni::join('perguruan_tinggi', 'perguruan_tinggi.nisn', 'alumni.nisn')->where('jalur_seleksi', $jalur_seleksi)->count();

        return $item;
    }

    public static function countAlumniJenisUniversitas($jenis_universitas)
    {
        $item = Alumni::join('perguruan_tinggi', 'perguruan_tinggi.nisn', 'alumni.nisn')->where('jenis_universitas', $jenis_universitas)->count();

        return $item;
    }

    public static function countAlumniStatus($status_sekarang)
    {
        $item = Alumni::where('status_sekarang', $status_sekarang)->count();

        return $item;
    }

    public static function progress()
    {
        $nisn = Auth::user()->alumni->nisn;

        $item = Hapalan::where('nisn', $nisn)->first();

        $value = nilai($item->juz_1) + nilai($item->juz_2) + nilai($item->juz_3) + nilai($item->juz_4) + nilai($item->juz_5) + nilai($item->juz_6) + nilai($item->juz_7) + nilai($item->juz_8) + nilai($item->juz_9) + nilai($item->juz_10) + nilai($item->juz_11) + nilai($item->juz_12) + nilai($item->juz_13) + nilai($item->juz_14) + nilai($item->juz_15) + nilai($item->juz_16) + nilai($item->juz_17) + nilai($item->juz_18) + nilai($item->juz_19) + nilai($item->juz_20) + nilai($item->juz_21) + nilai($item->juz_22) + nilai($item->juz_23) + nilai($item->juz_24) + nilai($item->juz_25) + nilai($item->juz_26) + nilai($item->juz_27) + nilai($item->juz_28) + nilai($item->juz_29) + nilai($item->juz_30);

        return $value * 100 / 30;
    }
}
