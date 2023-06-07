<?php

namespace App\Http\Controllers\Admin;

use App\Exports\AlumniExport;
use App\Exports\HapalanExport;
use App\Exports\PekerjaanExport;
use App\Exports\PerguruanTinggiExport;
use App\Exports\PrestasiAkademikExport;
use App\Exports\PrestasiNonAkademikExport;
use App\Http\Controllers\Controller;
use App\Models\Alumni;
use App\Models\Hapalan;
use App\Models\Pekerjaan;
use App\Models\PerguruanTinggi;
use App\Models\PrestasiAkademik;
use App\Models\PrestasiNonAkademik;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class DataAlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Alumni::latest()->get();

        return view('pages.admin.data-alumni.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => ['required', 'string', 'max:255'],
            'nisn' => ['required', 'string', 'max:255', 'unique:alumni'],
            'email' => ['required', 'string', 'max:255', 'email', 'unique:users'],
            // 'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'password' => ['required', 'confirmed', 'min:8', 'max:16'],
        ]);

        if ($validator->fails()) {
            Alert::toast('Perhatikan data yang diisi', 'error')->position('top');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::create([
            'role' => 'Alumni',
            'nama' => $request->nama,
            'username' => $request->nisn,
            'email' => $request->email,
            'status' => $request->email,
            'password' => Hash::make($request->password),
            'status' => '0'
        ]);

        Alumni::create([
            'user_id' => $user->id,
            'nisn' => $request->nisn,
        ]);

        Hapalan::create([
            'nisn' => $request->nisn
        ]);

        Alert::toast('Berhasil Menambah Data Alumni', 'success')->position('top');
        return redirect()->route('data-alumni.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = Alumni::findOrFail($id);

        return view('pages.admin.data-alumni.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = Alumni::findOrFail($id);

        return view('pages.admin.data-alumni.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = Alumni::findOrFail($id);

        if ($item->user->email != $request->email) {
            $validator2 = Validator::make($request->all(), [
                'email' => ['required', 'string', 'max:255', 'email', 'unique:users'],
            ]);

            if ($validator2->fails()) {
                Alert::toast('Perhatikan data yang diisi', 'error')->position('top');
                return redirect()->back()->withErrors($validator2)->withInput();
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

        $user = User::findOrFail($item->user_id);
        $user->nama = $request->nama;
        $user->username = $request->nisn;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->save();

        $item->update([
            'nisn' => $request->nisn,
        ]);

        Alert::toast('Berhasil Mengubah Data Alumni', 'success')->position('top');
        return redirect()->route('data-alumni.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Alumni::findOrFail($id);
        $user_id = $item->user_id;

        $item->delete();

        $user = User::findOrFail($user_id);
        $user->delete();

        return redirect()->route('data-alumni.index');
    }

    public function print()
    {
        $items = Alumni::join('users as user', 'user.id', 'alumni.user_id')->orderBy('user.nama', 'ASC')->get();

        return view('pages.admin.data-alumni.pdf', compact('items'));
    }

    public function print2()
    {
        return Excel::download(new AlumniExport, 'alumni.xlsx');
    }

    public function printAkademik()
    {
        $items = PrestasiAkademik::orderByRaw("FIELD(tingkat , 'Kabupaten', 'Provinsi', 'Nasional', 'Internasional') ASC")->get();

        return view('pages.admin.data-alumni.akademik-pdf', compact('items'));
    }

    public function printAkademik2()
    {
        return Excel::download(new PrestasiAkademikExport, 'akademik.xlsx');
    }

    public function printNonAkademik()
    {
        $items = PrestasiNonAkademik::orderByRaw("FIELD(tingkat , 'Kabupaten', 'Provinsi', 'Nasional', 'Internasional') ASC")->get();

        return view('pages.admin.data-alumni.non-akademik-pdf', compact('items'));
    }

    public function printNonAkademik2()
    {
        return Excel::download(new PrestasiNonAkademikExport, 'non-akademik.xlsx');
    }

    public function printPerguruan()
    {
        $items = PerguruanTinggi::orderBy('tahun_masuk', 'ASC')->get();

        return view('pages.admin.data-alumni.ptn-pdf', compact('items'));
    }

    public function printPerguruan2()
    {
        return Excel::download(new PerguruanTinggiExport, 'ptn.xlsx');
    }

    public function printPekerjaan()
    {
        $items = Pekerjaan::orderBy('nama_pekerjaan', 'ASC')->get();

        return view('pages.admin.data-alumni.pekerjaan-pdf', compact('items'));
    }

    public function printPekerjaan2()
    {
        return Excel::download(new PekerjaanExport, 'pekerjaan.xlsx');
    }

    public function printHapalan()
    {
        $items = Hapalan::join('users', 'users.username', 'hapalan.nisn')->orderBy('users.nama', 'ASC')->get('hapalan.*');

        return view('pages.admin.data-alumni.hapalan-pdf', compact('items'));
    }

    public function printHapalan2()
    {
        return Excel::download(new HapalanExport, 'hapalan.xlsx');
    }
}
