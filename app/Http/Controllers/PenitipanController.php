<?php

namespace App\Http\Controllers;

use App\Models\Penitipan;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller; // <-- Baris ini WAJIB ada!

class PenitipanController extends Controller
{
    public function penitipan()
    {
        $data = Penitipan::all();
        return view('admin.penitipan', compact('data'));
    }

    public function tambahPenitipan()
    {
        return view('admin.tambah_penitipan');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'jumlah_barang' => 'required|integer',
            'tanggal_awal' => 'required|date',
            'tanggal_akhir' => 'required|date',
            'alamat' => 'required|string',
        ]);


        Penitipan::create($request->all());
        return redirect()->route('admin.penitipan')->with('success', 'Data berhasil ditambahkan.');
    }


    public function edit($id)
    {
        $data = Penitipan::findOrFail($id);
        return view('admin.edit_penitipan', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'jumlah_barang' => 'required|numeric',
            'tanggal_awal' => 'required|date',
            'tanggal_akhir' => 'required|date|after_or_equal:tanggal_awal',
            'alamat' => 'required'
        ]);

        $penitipan = Penitipan::findOrFail($id);
        $penitipan->update($request->all());

        return redirect()->route('admin.penitipan')->with('success', 'Data berhasil diperbarui!');
    }

    public function deletPenitipan($id)
    {
        $penitipan = Penitipan::findOrFail($id);
        $penitipan->delete();
        
        return redirect()->route('admin.penitipan')->with('success', 'Data berhasil dihapus.');
    }
    
    public function show($id)
    {
        $data = Penitipan::findOrFail($id);
        return view('admin.detail_penitipan', compact('data'));
    }

}