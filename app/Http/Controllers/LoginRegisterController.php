<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Facades\Auth; 
use App\Models\User; 
use App\Models\Penitipan;
use App\Models\Packing;


class LoginRegisterController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function register(){
        return view('auth.register');
    }
    public function adminHome(){
        return view('admin.home');
    }
    public function adminHistory(){
        return view('admin.history');
    }
    public function adminPenitipan(){
        $data = Penitipan::all(); // ambil semua data penitipan
        return view('admin.penitipan', compact('data'));
    }
    public function adminPelanggan(){
        return view('admin.pelanggan');
    }
    public function tambahPenitipan()
    {
        return view('admin.tambah_penitipan'); // Buat file view ini
    }
        public function adminPacking(){
        $data = Packing::all(); // ambil semua data 
        return view('admin.packing', compact('data'));
    }
    public function tambahPacking()
    {
        return view('admin.tambah_packing'); // Buat file view ini
    }
    public function storePacking(Request $request)
{
    $request->validate([
        'nama' => 'required',
        'alamat' => 'required',
        'no_hp' => 'required'
    ]);

    Packing::create([
        'nama' => $request->nama,
        'alamat' => $request->alamat,
        'no_hp' => $request->no_hp
    ]);

    return redirect('/admin/packing')->with('success', 'Data packing berhasil ditambahkan.');
}


    public function postRegister(Request $request) 
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email:dns',
        'jenisKelamin' => 'required', // Perbaikan sintaks koma
        'password' => 'required|min:8|max:20|confirmed'
    ]);

    $user = new User;
    $user->name = $request->name;
    $user->email = $request->email;
    $user->jenis_kelamin = $request->jenisKelamin;
    $user->password = Hash::make($request->password);
    $user->save();

    if ($user) {
        return redirect('/auth/login')->with('success', 'Akun berhasil dibuat, silakan melakukan proses login!');
    } else {
        return back()->with('failed', 'Maaf, terjadi kesalahan, coba kembali beberapa saat!');
    }
}

public function postLogin(Request $request) 
{
    $request->validate([
        'email' => 'required|email:dns',
        'password' => 'required|min:8|max:20'
    ]);

    if (Auth::attempt($request->only('email', 'password'))) {
        $user = Auth::user();
        if ($user->level == 'user') {
            return redirect('/user/home');
        } elseif ($user->level == 'admin') {
            return redirect('/admin/home');
        }
    }

    return back()->with('failed', 'Maaf, terjadi kesalahan, coba kembali beberapa saat!');
}

public function logout() 
{
    Auth::logout();
    return redirect('/');
}

}
