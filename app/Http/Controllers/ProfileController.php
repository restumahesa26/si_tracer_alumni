<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit()
    {
        $item = Auth::user();

        return view('pages.admin.profile', [
            'item' => $item
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->validate([
            'nama' => ['required', 'string', 'max:100'],
        ]);

        if ($request->email !== Auth::user()->email) {
            $request->validate([
                'email' => ['required', 'string', 'email', 'max:50', 'unique:users'],
            ]);
        }

        if ($request->username !== Auth::user()->username) {
            $request->validate([
                'username' => ['required', 'string', 'max:50', 'unique:users'],
            ]);
        }

        if ($request->password) {
            $request->validate([
                // 'password' => ['required', 'confirmed', Rules\Password::defaults()],
                'password' => ['required', 'confirmed', 'min:8', 'max:16'],
            ]);
        }

        $item = User::where('id', Auth::user()->id)->first();

        $item->nama = $request->nama;
        $item->username = $request->username;
        $item->email = $request->email;
        if ($request->password) {
            $item->password = Hash::make($request->password);
        }

        $item->save();

        Alert::toast('Berhasil Update Profile', 'success')->position('top');
        return redirect()->route('profile.edit');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
