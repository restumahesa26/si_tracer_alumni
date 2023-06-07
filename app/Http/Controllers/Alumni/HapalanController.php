<?php

namespace App\Http\Controllers\Alumni;

use App\Http\Controllers\Controller;
use App\Models\Hapalan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HapalanController extends Controller
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
        $item = Hapalan::where('nisn', $id)->first();

        $item->update([
            'juz_1' => $request->juz_1,
            'juz_2' => $request->juz_2,
            'juz_3' => $request->juz_3,
            'juz_4' => $request->juz_4,
            'juz_5' => $request->juz_5,
            'juz_6' => $request->juz_6,
            'juz_7' => $request->juz_7,
            'juz_8' => $request->juz_8,
            'juz_9' => $request->juz_9,
            'juz_10' => $request->juz_10,
            'juz_11' => $request->juz_11,
            'juz_12' => $request->juz_12,
            'juz_13' => $request->juz_13,
            'juz_14' => $request->juz_14,
            'juz_15' => $request->juz_15,
            'juz_16' => $request->juz_16,
            'juz_17' => $request->juz_17,
            'juz_18' => $request->juz_18,
            'juz_19' => $request->juz_19,
            'juz_20' => $request->juz_20,
            'juz_21' => $request->juz_21,
            'juz_22' => $request->juz_22,
            'juz_23' => $request->juz_23,
            'juz_24' => $request->juz_24,
            'juz_25' => $request->juz_25,
            'juz_26' => $request->juz_26,
            'juz_27' => $request->juz_27,
            'juz_28' => $request->juz_28,
            'juz_29' => $request->juz_29,
            'juz_30' => $request->juz_30,
        ]);

        Alert::toast('Berhasil Update Data Hapalan', 'success')->position('top');
        return redirect()->route('home.hapalan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
