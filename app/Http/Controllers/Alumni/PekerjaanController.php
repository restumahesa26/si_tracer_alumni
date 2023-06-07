<?php

namespace App\Http\Controllers\Alumni;

use App\Http\Controllers\Controller;
use App\Models\Pekerjaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class PekerjaanController extends Controller
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
            'nama_pekerjaan' => ['required', 'string', 'max:255'],
            'jabatan' => ['nullable', 'string', 'max:255'],
            'instansi' => ['required', 'string', 'max:255'],
        ]);

        if ($validator->fails()) {
            Alert::toast('Perhatikan data yang diisi', 'error')->position('top');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Pekerjaan::create([
            'nisn' => Auth::user()->alumni->nisn,
            'nama_pekerjaan' => $request->nama_pekerjaan,
            'jabatan' => $request->jabatan,
            'instansi' => $request->instansi,
        ]);

        Alert::toast('Berhasil Menambah Data Pekerjaan', 'success')->position('top');
        return redirect()->route('home.pekerjaan');
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
            'nama_pekerjaan' => ['required', 'string', 'max:255'],
            'jabatan' => ['nullable', 'string', 'max:255'],
            'instansi' => ['required', 'string', 'max:255'],
        ]);

        if ($validator->fails()) {
            Alert::toast('Perhatikan data yang diisi', 'error')->position('top');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $item = Pekerjaan::findOrFail($id);

        $item->update([
            'nama_pekerjaan' => $request->nama_pekerjaan,
            'jabatan' => $request->jabatan,
            'instansi' => $request->instansi,
        ]);

        Alert::toast('Berhasil Mengubah Data Pekerjaan', 'success')->position('top');
        return redirect()->route('home.pekerjaan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Pekerjaan::findOrFail($id);

        $item->delete();

        Alert::toast('Berhasil Menghapus Data Pekerjaan', 'success')->position('top');
        return redirect()->route('home.pekerjaan');
    }
}
