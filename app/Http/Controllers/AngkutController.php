<?php

namespace App\Http\Controllers;

use App\Models\Angkut;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller; 

class AngkutController extends Controller
{
    public function angkut()
    {
        $data = Angkut::all();
        return view('admin.angkut', compact('data'));
    }

    public function tambahAngkut()
    {
        return view('admin.tambah_angkut');
    }

    public function storeAngkut(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'no_hp' => 'required|numeric|digits_between:10,15',
            'alamat' => 'required|string',
        ]);


        Angkut::create($request->all());
        return redirect()->route('admin.angkut')->with('success', 'Data berhasil ditambahkan.');
    }


    public function edit($id)
    {
        $data = ANgkut::findOrFail($id);
        return view('admin.edit_angkut', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'no_hp' => 'required|numeric|digits_between:10,15',
            'alamat' => 'required'
        ]);

        $angkut = Angkut::findOrFail($id);
        $angkut->update($request->all());

        return redirect()->route('admin.angkut')->with('success', 'Data berhasil diperbarui!');
    }

    public function deletAngkut($id)
    {
        $angkut = Angkut::findOrFail($id);
        $angkut->delete();
        
        return redirect()->route('admin.angkut')->with('success', 'Data berhasil dihapus.');
    }
    
    public function show($id)
    {
        $data = Angkut::findOrFail($id);
        return view('admin.detail_angkut', compact('data'));
    }

}