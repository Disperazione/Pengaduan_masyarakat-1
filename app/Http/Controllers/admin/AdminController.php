<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function formlogin(){
        return view('Admin.login');
    }

    public function login(Request $request){
        $username = Petugas::where('username', $request->username)->first();

        if(!$username){
            return redirect()->back()->with(['pesan' => 'username tidak terdaftar']);
        }

        $password = Hash::check($request->password, $username->password);

        if(!$password){
            return redirect()->back()->with(['pesan' => 'Password tidak sesuai']);
        }

        $auth = Auth::guard('admin')->attempt(['username' => $request, 'password' => $request->$password]);

        if(!$auth){
            return redirect()->route('dashboard.index');
        } else {
            return redirect()->back()->with(['pesan' => 'Akun tidak ditemukan']);
        }
    }

    public function logout(){
        Auth::guard('admin')->logout();

        return redirect()->route('admin.formLogin');
    }
}
