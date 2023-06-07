<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use App\Models\Hapalan;
use App\Models\Pekerjaan;
use App\Models\PerguruanTinggi;
use App\Models\PrestasiAkademik;
use App\Models\PrestasiNonAkademik;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Validation\Rules;

class HomeController extends Controller
{
    public function home()
    {
        return view('pages.home.home');
    }

    public function profile()
    {
        $item = Alumni::where('user_id', Auth::user()->id)->first();

        return view('pages.home.profil-alumni', compact('item'));
    }

    public function update_profile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => ['required', 'string', 'max:255'],
            'angkatan' => ['required', 'string', 'max:255'],
            'jenis_kelamin' => ['required', 'in:L,P'],
            'tempat_lahir' => ['required', 'string', 'max:255'],
            'tanggal_lahir' => ['required', 'date'],
            'alamat' => ['required', 'string', 'max:255'],
            'no_hp' => ['required', 'numeric'],
            'jurusan' => ['required', 'in:IPA,IPS'],
            'tahun_masuk' => ['required', 'integer', 'min:2000'],
            'tahun_lulus' => ['required', 'integer', 'min:2000'],
        ]);

        if ($validator->fails()) {
            Alert::toast('Perhatikan data yang diisi', 'error')->position('top');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $item = Alumni::where('user_id', Auth::user()->id)->first();

        if ($item->user->email != $request->email) {
            $validator2 = Validator::make($request->all(), [
                'email' => ['required', 'string', 'max:255', 'email', 'unique:users'],
            ]);

            if ($validator2->fails()) {
                Alert::toast('Perhatikan data yang diisi', 'error')->position('top');
                return redirect()->back()->withErrors($validator2)->withInput();
            }
        }

        if ($item->user->username != $request->nisn) {
            $validator4 = Validator::make($request->all(), [
                'username' => ['required', 'string', 'max:255', 'unique:users'],
            ]);

            if ($validator4->fails()) {
                Alert::toast('Perhatikan data yang diisi', 'error')->position('top');
                return redirect()->back()->withErrors($validator4)->withInput();
            }
        }

        if ($request->password) {
            $validator3 = Validator::make($request->all(), [
                // 'password' => ['required', 'confirmed', Rules\Password::defaults()],
                'password' => ['required', 'confirmed', 'min:8', 'max:16'],
            ]);

            if ($validator3->fails()) {
                Alert::toast('Perhatikan data yang diisi', 'error')->position('top');
                return redirect()->back()->withErrors($validator3)->withInput();
            }
        }

        if ($item->nisn != $request->nisn) {
            $validator5 = Validator::make($request->all(), [
                'nisn' => ['required', 'string', 'max:255', 'unique:alumni'],
            ]);

            if ($validator5->fails()) {
                Alert::toast('Perhatikan data yang diisi', 'error')->position('top');
                return redirect()->back()->withErrors($validator5)->withInput();
            }
        }

        $user = User::findOrFail(Auth::user()->id);
        $user->nama = $request->nama;
        $user->username = $request->nisn;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }

        $item->update([
            'nisn' => $request->nisn,
            'angkatan' => $request->angkatan,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'no_hp' => $request->no_hp,
            'jurusan' => $request->jurusan,
            'status_sekarang' => $request->status_sekarang,
            'tahun_masuk' => $request->tahun_masuk,
            'tahun_lulus' => $request->tahun_lulus,
        ]);

        $user->status = '1';
        $user->save();

        Alert::toast('Berhasil Update Profil Alumni', 'success')->position('top');
        return redirect()->route('home.profil-alumni');
    }

    public function alumni()
    {
        $items = Alumni::orderByRaw('ISNULL(angkatan), angkatan ASC')->orderBy('angkatan', 'ASC')->get();

        return view('pages.home.alumni', compact('items'));
    }

    public function prestasi_akademik()
    {
        $items = PrestasiAkademik::where('nisn', Auth::user()->alumni->nisn)->get();

        return view('pages.home.prestasi-akademik', compact('items'));
    }

    public function prestasi_non_akademik()
    {
        $items = PrestasiNonAkademik::where('nisn', Auth::user()->alumni->nisn)->get();

        return view('pages.home.prestasi-non-akademik', compact('items'));
    }

    public function perguruan_tinggi()
    {
        $items = PerguruanTinggi::where('nisn', Auth::user()->alumni->nisn)->get();

        return view('pages.home.perguruan-tinggi', compact('items'));
    }

    public function pekerjaan()
    {
        $items = Pekerjaan::where('nisn', Auth::user()->alumni->nisn)->get();

        return view('pages.home.pekerjaan', compact('items'));
    }

    public function hapalan()
    {
        $item = Hapalan::where('nisn', Auth::user()->alumni->nisn)->first();

        return view('pages.home.hapalan', compact('item'));
    }
}
