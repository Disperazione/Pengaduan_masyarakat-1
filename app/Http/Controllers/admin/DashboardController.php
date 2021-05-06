<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Masyarakat;
use App\Models\Pengaduan;
use App\Models\Petugas;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $petugas = Petugas::all()->count();

        $masyarakat = Masyarakat::all()->count();

        $pengaduan1 = Pengaduan::all()->count();

        $pending = Pengaduan::where('status', '0')->get()->count();

        $proses = Pengaduan::where('status', 'proses')->get()->count();

        $selesai = Pengaduan::where('status', 'selesai')->get()->count();

        $pengaduan = Pengaduan::orderBy('tgl_pengaduan','desc')->limit(4)->get();

        $gambar = Pengaduan::orderBy('tgl_pengaduan','desc')->limit(3)->get();

        return view('Admin.Dashboard.index', ['petugas' => $petugas, 'masyarakat' => $masyarakat, 'pengaduan' => $pengaduan, 
        'pengaduan1' => $pengaduan1, 'pending' => $pending, 'proses' => $proses,  'selesai' => $selesai, 'gambar' => $gambar]);
    }

    public function ajax(Request $request)
    {
        if ($request->ajax()) {
            $data = [];
            $data[] = Pengaduan::where('status', '0')->count();
            $data[] = Pengaduan::where('status', 'proses')->count();
            $data[] = Pengaduan::where('status', 'selesai')->count();
            return response()->json(compact('data'));
        }
    }
}
