<?php

namespace App\Http\Controllers;

use App\Models\psikolog;
use App\Models\transaksi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function read_all()
    {   $transaksi = transaksi::all();
        $psikologs = User::where('role','psikolog')->get();
        return view('db', 
        ['transaksi' => $transaksi], 
        ['psikologs' => $psikologs], 
    );
    }
    public function read_konsulKonselor()
    {  $a = auth()->user()->name;
        $table_konsulKonselor = transaksi::where('name_psikolog', $a)->get();
        return view('riwayatkonselingKonselor', ['table_konsulKonselor' => $table_konsulKonselor]);
    }
    public function read_konsul()
    {  $a = auth()->user()->name;
        $table_konsul = transaksi::where('name', $a)->get();
        return view('riwayatkonseling', ['table_konsul' => $table_konsul]);
    }
    public function read_konsulAdmin()
    {  
        $table_konsul = transaksi::all();
        return view('dataOrder', ['table_konsul' => $table_konsul]);
    }
    public function read_userbyAdmin()
    {  
        $user = User::where('role','user')->get();;
        return view('dataUser', ['user' => $user]);
    }
    public function read_psikologbyAdmin()
    {  
        $user = User::where('role','psikolog')->get();;
        return view('dataPsikolog', ['user' => $user]);
    }
    public function read_psikolog()
    {
        $psikologs = User::where('role','psikolog')->get();
        return view('ruangkonseling', ['psikologs' => $psikologs]);
    }
    
    
    public function update(Request $request)
    {
        $transaksi = transaksi::all();
        $update = transaksi::find($request->id);
        $update->status = $request->status;
        $update->save();
        return view('homepagekonselor');     
    
    }
    public function update2(Request $request)
    {
        $transaksi = transaksi::all();
        $update = transaksi::find($request->id);
        $update->status = $request->status;
        $update->save();
        return view('db');     
    
    }

    public function destroy(Request $request)
    {
        $delete = transaksi::where ('id',$request->id)->delete();
        $transaksi = transaksi::all();
        return view('homepagekonselor');
    }
    public function destroy2(Request $request)
    {
        $delete = transaksi::where ('id',$request->id)->delete();
        return redirect()->intended('/db');
    }
    public function destroyuser(Request $request)
    {
        $delete = User::where ('id',$request->id)->delete();
        return redirect()->intended('/db');
    }
    public function destroypsikolog(Request $request)
    {
        $delete = User::where ('id',$request->id)->delete();
        return redirect()->intended('/db');
    }


    public function store(Request $request)
    {
        $store = new transaksi;
        $store->email = $request->email;
        $store->name = $request->name;
        $store->name_psikolog = $request->name_psikolog;
        $store->nomor_hp = $request->nomor_hp;
        $store->tanggal_lahir = $request->tanggal;
        $store->keluhan = $request->keluhan;
        $store->biaya += 40000;
        $store->status = 'menunggu';
        $store->save();
        return view('payment',['store' => $store]);     

    }

    public function register()
    {
        $data['title'] = 'Register';
        return view('/', $data);
    }

    public function register_action(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'name' => 'required|unique:users',
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
            'role' => 'user',
            'password' => Hash::make($request->sandi),
        ]);
        $user->save();

        return redirect()->route('login')->with('success', 'Registration success. Please login!');
    }


    public function login()
    {
        $data['title'] = 'Login';
        return view('/login', $data);
    }

    public function login_action(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            $findrole = Auth::getUser();
            if ($findrole -> role == 'user'){
            return redirect()->intended('/homepage');
        }
            if ($findrole -> role == 'psikolog'){
            return redirect()->intended('/homepagekonselor');
        }
            if ($findrole -> role == 'admin'){
            return redirect()->intended('/db');
        }
        }

        return back()->withErrors([
            'password' => 'Wrong email or password',
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
        return redirect('/login');
    }
}