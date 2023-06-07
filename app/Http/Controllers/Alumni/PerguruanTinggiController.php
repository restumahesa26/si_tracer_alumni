<?php

namespace App\Http\Controllers\Alumni;

use App\Http\Controllers\Controller;
use App\Models\PerguruanTinggi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class PerguruanTinggiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
            'nama_universitas' => ['required', 'string', 'max:255'],
            'jenis_universitas' => ['required', 'string', 'max:255'],
            'jalur_seleksi' => ['required', 'string', 'max:255'],
            'tahun_masuk' => ['required', 'digits:4', 'integer', 'min:1900'],
            'tahun_lulus' => ['nullable', 'digits:4', 'integer', 'min:1900'],
        ]);

        if ($validator->fails()) {
            Alert::toast('Perhatikan data yang diisi', 'error')->position('top');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $item = new PerguruanTinggi();
        $item->nisn = Auth::user()->alumni->nisn;
        $item->nama_universitas = $request->nama_universitas;
        $item->nama_program_studi = $request->nama_program_studi;
        $item->jenis_universitas = $request->jenis_universitas;
        $item->jalur_seleksi = $request->jalur_seleksi;
        $item->tahun_masuk = $request->tahun_masuk;
        $item->tahun_lulus = $request->tahun_lulus;
        $item->save();

        Alert::toast('Berhasil Menambah Data Perguruan Tinggi', 'success')->position('top');
        return redirect()->route('home.perguruan-tinggi');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'nama_universitas' => ['required', 'string', 'max:255'],
            'jenis_universitas' => ['required', 'string', 'max:255'],
            'jalur_seleksi' => ['required', 'string', 'max:255'],
            'tahun_masuk' => ['required', 'digits:4', 'integer', 'min:1900'],
            'tahun_lulus' => ['nullable', 'digits:4', 'integer', 'min:1900'],
        ]);

        if ($validator->fails()) {
            Alert::toast('Perhatikan data yang diisi', 'error')->position('top');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $item = PerguruanTinggi::findOrFail($id);
        $item->nama_universitas = $request->nama_universitas;
        $item->nama_program_studi = $request->nama_program_studi;
        $item->jenis_universitas = $request->jenis_universitas;
        $item->jalur_seleksi = $request->jalur_seleksi;
        $item->tahun_masuk = $request->tahun_masuk;
        $item->tahun_lulus = $request->tahun_lulus;
        $item->save();

        Alert::toast('Berhasil Mengubah Data Perguruan Tinggi', 'success')->position('top');
        return redirect()->route('home.perguruan-tinggi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = PerguruanTinggi::findOrFail($id);

        $item->delete();

        Alert::toast('Berhasil Menghapus Data Perguruan Tinggi', 'success')->position('top');
        return redirect()->route('home.perguruan-tinggi');
    }
}
