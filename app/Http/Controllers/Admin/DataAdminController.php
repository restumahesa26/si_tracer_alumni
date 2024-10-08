<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules;
use RealRashid\SweetAlert\Facades\Alert;

class DataAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = User::where('role', 'Admin')->get();

        return view('pages.admin.data-admin.index', [
            'items' => $items
        ]);
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
            'username' => ['required', 'string', 'max:255', 'unique:'.User::class],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            // 'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'password' => ['required', 'confirmed', 'min:8', 'max:16'],
        ]);

        if ($validator->fails()) {
            Alert::toast('Perhatikan data yang diisi', 'error')->position('top');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        User::create([
            'nama' => $request->nama,
            'status' => '1',
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Alert::toast('Berhasil Menambah Data Admin', 'success')->position('top');
        return redirect()->route('data-admin.index');
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
        $item = User::findOrFail($id);

        return view('pages.admin.data-admin.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:50',
        ]);

        if ($validator->fails()) {
            Alert::toast('Perhatikan data yang diisi', 'error');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $item = User::findOrFail($id);

        if ($item->username != $request->username) {
            $validator4 = Validator::make($request->all(), [
                'username' => 'required|string|max:20|unique:users',
            ]);

            if ($validator4->fails()) {
                Alert::toast('Perhatikan data yang diisi', 'error');
                return redirect()->back()->withErrors($validator4)->withInput();
            }
        }

        if ($item->email != $request->email) {
            $validator2 = Validator::make($request->all(), [
                'email' => 'required|string|max:50|email|unique:users',
            ]);

            if ($validator2->fails()) {
                Alert::toast('Perhatikan data yang diisi', 'error');
                return redirect()->back()->withErrors($validator2)->withInput();
            }
        }

        if ($request->password) {
            $validator3 = Validator::make($request->all(), [
                // 'password' => ['required', 'string', 'confirmed', Rules\Password::defaults() ]
                'password' => ['required', 'confirmed', 'min:8', 'max:16'],
            ]);

            if ($validator3->fails()) {
                Alert::toast('Perhatikan data yang diisi', 'error');
                return redirect()->back()->withErrors($validator3)->withInput();
            }
        }

        $item->nama = $request->nama;
        $item->username = $request->username;
        $item->email = $request->email;
        if ($request->password) {
            $item->password = Hash::make($request->password);
        }
        $item->save();

        Alert::toast('Berhasil Mengubah Data Admin', 'success')->position('top');
        return redirect()->route('data-admin.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = User::findOrFail($id);

        $item->delete();

        Alert::toast('Berhasil Menghapus Data Admin', 'success')->position('top');
        return redirect()->route('data-admin.index');
    }
}
