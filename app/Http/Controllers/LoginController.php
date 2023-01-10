<?php

namespace App\Http\Controllers;

use App\Models\Psikolog;
use App\Models\transaksi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    

    public function register()
    {
        $data['title'] = 'Register';
        return view('/', $data);
    }

    public function register_action(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'name' => 'required',
            'nohp' => 'required',
            'lahir' => 'required',
            'sandi' => 'required',
            'sandikonfirm' => 'required|same:sandi',
        ]);

        $user = new User([
            'email' => $request->email,
            'name' => $request->name,
            'nomor_hp' => $request->nohp,
            'tanggal_lahir' => $request->lahir,
            'password' => Hash::make($request->sandi),
        ]);
        $user->save();

        return redirect()->route('login')->with('success', 'Registration success. Please login!');
    }


    public function LoginPsikolog()
    {
        $data['title'] = 'LoginPsikolog';
        return view('/LoginPsikolog', $data);
    }

    public function LoginPsikolog_action(Request $request)
    {
        $request->validate([
            'emailpsikolog' => 'required',
            'passwordpsikolog' => 'required',
        ]);
        if (Auth::attempt(['email' => $request->emailpsikolog, 'password' => $request->passwordpsikolog])) {
            dd ($request);
            $request->session()->regenerate();
            return redirect()->intended('/homepage');
        }

        return back()->withErrors([
            'password' => 'Wrong username or password',
        ]);
    }

    public function password()
    {
        $data['title'] = 'Change Password';
        return view('user/password', $data);
    }

    public function password_action(Request $request)
    {
        $request->validate([
            'old_password' => 'required|current_password',
            'new_password' => 'required|confirmed',
        ]);
        $user = User::find(Auth::id());
        $user->password = Hash::make($request->new_password);
        $user->save();
        $request->session()->regenerate();
        return back()->with('success', 'Password changed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/LoginPsikolog');
    }
}