<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Masyarakat;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    public function index(){
        $masyarakat = Masyarakat::all();

        return view('Admin.Masyarakat.index',['masyarakat' => $masyarakat]);
    }

    public function show($nik){
        $masyarakat = Masyarakat::where('nik', $nik)->first();

        return view('Admin.Masyarakat.show',['masyarakat' => $masyarakat]);
    }
}
