<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Petugas;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function index(){
        $petugas = Petugas::all();

        return view('Admin.Petugas.index', ['petugas' => $petugas]);
    }

    public function create(){
        return view('Admin.Petugas.create');
    }

    public function store(Request $request){
        $data = $request->all();

        $validate = Validator::make($data, [
        'nama_petugas' => ['required','string','max:255'],
        'username' => ['required','string','unique:petugas'],
        'password' => ['required','string','min:6'],
        'telp' => ['required'],
        'level' => ['required', 'in:admin.petugas'],
        ]);
    }

    public function edit($id_petugas){
        return view('Admin.Petugas.edit');
    }

    public function update(Request $request, $id_petugas){
        
    }

    public function destroy($id_petugas){
        
    }
}
