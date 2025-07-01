<?php

namespace App\Http\Controllers;

use App\Models\Packing;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller; 

class PackingController extends Controller
{
    public function packing()
    {
        $data = Penitipan::all();
        return view('admin.packing', compact('data'));
    }

    public function tambahPacking()
    {
        return view('admin.tambah_packing');
    }

    public function storePacking(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'no_hp' => 'required|numeric|digits_between:10,15',
            'alamat' => 'required|string',
        ]);


        Packing::create($request->all());
        return redirect()->route('admin.packing')->with('success', 'Data berhasil ditambahkan.');
    }


    public function edit($id)
    {
        $data = Packing::findOrFail($id);
        return view('admin.edit_packing', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'no_hp' => 'required|numeric|digits_between:10,15',
            'alamat' => 'required'
        ]);

        $packing = Packing::findOrFail($id);
        $packing->update($request->all());

        return redirect()->route('admin.packing')->with('success', 'Data berhasil diperbarui!');
    }

    public function deletPacking($id)
    {
        $packing = Packing::findOrFail($id);
        $packing->delete();
        
        return redirect()->route('admin.packing')->with('success', 'Data berhasil dihapus.');
    }
    
    public function show($id)
    {
        $data = Packing::findOrFail($id);
        return view('admin.detail_packing', compact('data'));
    }

}