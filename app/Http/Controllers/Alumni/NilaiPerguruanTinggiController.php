<?php

namespace App\Http\Controllers\Alumni;

use App\Http\Controllers\Controller;
use App\Models\PerguruanTinggi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class NilaiPerguruanTinggiController extends Controller
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
        //
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
            'ip_1' => ['nullable', 'numeric'],
            'ip_2' => ['nullable', 'numeric'],
            'ip_3' => ['nullable', 'numeric'],
            'ip_4' => ['nullable', 'numeric'],
            'ip_5' => ['nullable', 'numeric'],
            'ip_6' => ['nullable', 'numeric'],
            'ip_7' => ['nullable', 'numeric'],
            'ip_8' => ['nullable', 'numeric'],
            'ip_9' => ['nullable', 'numeric'],
            'ip_10' => ['nullable', 'numeric'],
            'ip_11' => ['nullable', 'numeric'],
            'ip_12' => ['nullable', 'numeric'],
            'ip_13' => ['nullable', 'numeric'],
            'ip_14' => ['nullable', 'numeric'],
        ]);

        if ($validator->fails()) {
            Alert::toast('Perhatikan data yang diisi', 'error')->position('top');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $item = PerguruanTinggi::findOrFail($id);
        $item->ip_1 = $request->ip_1;
        $item->ip_2 = $request->ip_2;
        $item->ip_3 = $request->ip_3;
        $item->ip_4 = $request->ip_4;
        $item->ip_5 = $request->ip_5;
        $item->ip_6 = $request->ip_6;
        $item->ip_7 = $request->ip_7;
        $item->ip_8 = $request->ip_8;
        $item->ip_9 = $request->ip_9;
        $item->ip_10 = $request->ip_10;
        $item->ip_11 = $request->ip_11;
        $item->ip_12 = $request->ip_12;
        $item->ip_13 = $request->ip_13;
        $item->ip_14 = $request->ip_14;
        $item->save();

        Alert::toast('Berhasil Update Data Nilai Perguruan Tinggi', 'success')->position('top');
        return redirect()->route('home.perguruan-tinggi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
