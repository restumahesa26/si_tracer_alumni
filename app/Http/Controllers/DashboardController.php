<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $alumni = Alumni::count();
        $alumniKuliah = Alumni::where('status_sekarang', 'Melanjutkan Pendidikan')->count();
        $alumniAbdiNegara = Alumni::where('status_sekarang', 'Abdi Negara')->count();
        $alumniKerja = Alumni::where('status_sekarang', 'Bekerja')->count();
        $alumniLainnya = Alumni::where('status_sekarang', 'Lainnya')->count();

        return view('pages.admin.dashboard', compact('alumni', 'alumniKuliah', 'alumniAbdiNegara', 'alumniKerja', 'alumniLainnya'));
    }
}
