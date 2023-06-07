<?php

use App\Http\Controllers\Admin\DataAdminController;
use App\Http\Controllers\Admin\DataAlumniController;
use App\Http\Controllers\Alumni\HapalanController;
use App\Http\Controllers\Alumni\NilaiPerguruanTinggiController;
use App\Http\Controllers\Alumni\PekerjaanController;
use App\Http\Controllers\Alumni\PerguruanTinggiController;
use App\Http\Controllers\Alumni\PrestasiAkademikController;
use App\Http\Controllers\Alumni\PrestasiNonAkademikController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/alumni', [HomeController::class, 'alumni'])->name('home.alumni');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard')->middleware('role:Admin');
    Route::get('/profil-alumni', [HomeController::class, 'profile'])->name('home.profil-alumni')->middleware('role:Alumni');
    Route::get('/hapalan-alqur`an', [HomeController::class, 'hapalan'])->name('home.hapalan')->middleware('role:Alumni');
    Route::put('/profil-alumni/update', [HomeController::class, 'update_profile'])->name('home.update-profil-alumni')->middleware('role:Alumni');
    Route::get('/tracer-alumni/prestasi-akademik', [HomeController::class, 'prestasi_akademik'])->name('home.prestasi-akademik')->middleware('role:Alumni');
    Route::get('/tracer-alumni/prestasi-non-akademik', [HomeController::class, 'prestasi_non_akademik'])->name('home.prestasi-non-akademik')->middleware('role:Alumni');
    Route::get('/tracer-alumni/perguruan-tinggi', [HomeController::class, 'perguruan_tinggi'])->name('home.perguruan-tinggi')->middleware('role:Alumni');
    Route::get('/tracer-alumni/pekerjaan', [HomeController::class, 'pekerjaan'])->name('home.pekerjaan')->middleware('role:Alumni');
    Route::get('/data-alumni/download-data-alumni-pdf', [DataAlumniController::class, 'print'])->name('data-alumni.print')->middleware('role:Admin');
    Route::get('/data-alumni/download-data-alumni-excel', [DataAlumniController::class, 'print2'])->name('data-alumni.print-2')->middleware('role:Admin');
    Route::get('/data-alumni/download-prestasi-akademik-pdf', [DataAlumniController::class, 'printAkademik'])->name('data-alumni.print-akademik')->middleware('role:Admin');
    Route::get('/data-alumni/download-prestasi-akademik-excel', [DataAlumniController::class, 'printAkademik2'])->name('data-alumni.print-akademik-2')->middleware('role:Admin');
    Route::get('/data-alumni/download-prestasi-non-akademik-pdf', [DataAlumniController::class, 'printNonAkademik'])->name('data-alumni.print-non-akademik')->middleware('role:Admin');
    Route::get('/data-alumni/download-prestasi-non-akademik-excel', [DataAlumniController::class, 'printNonAkademik2'])->name('data-alumni.print-non-akademik-2')->middleware('role:Admin');
    Route::get('/data-alumni/download-perguruan-tinggi-pdf', [DataAlumniController::class, 'printPerguruan'])->name('data-alumni.print-ptn')->middleware('role:Admin');
    Route::get('/data-alumni/download-perguruan-tinggi-excel', [DataAlumniController::class, 'printPerguruan2'])->name('data-alumni.print-ptn-2')->middleware('role:Admin');
    Route::get('/data-alumni/download-pekerjaan-pdf', [DataAlumniController::class, 'printPekerjaan'])->name('data-alumni.print-pekerjaan')->middleware('role:Admin');
    Route::get('/data-alumni/download-pekerjaan-excel', [DataAlumniController::class, 'printPekerjaan2'])->name('data-alumni.print-pekerjaan-2')->middleware('role:Admin');
    Route::get('/data-alumni/download-hapalan-pdf', [DataAlumniController::class, 'printHapalan'])->name('data-alumni.print-hapalan')->middleware('role:Admin');
    Route::get('/data-alumni/download-hapalan-excel', [DataAlumniController::class, 'printHapalan2'])->name('data-alumni.print-hapalan-2')->middleware('role:Admin');
    Route::resource('data-alumni', DataAlumniController::class)->middleware('role:Admin');
    Route::resource('data-admin', DataAdminController::class)->middleware('role:Admin');
    Route::resource('prestasi-akademik-alumni', PrestasiAkademikController::class)->middleware('role:Alumni');
    Route::resource('prestasi-non-akademik-alumni', PrestasiNonAkademikController::class)->middleware('role:Alumni');
    Route::resource('perguruan-tinggi-alumni', PerguruanTinggiController::class)->middleware('role:Alumni');
    Route::resource('nilai-perguruan-tinggi-alumni', NilaiPerguruanTinggiController::class)->middleware('role:Alumni');
    Route::resource('pekerjaan-alumni', PekerjaanController::class)->middleware('role:Alumni');
    Route::resource('hapalan', HapalanController::class)->middleware('role:Alumni');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
