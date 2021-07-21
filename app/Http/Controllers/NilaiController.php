<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use App\Nilai;
use App\Makul;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        $nilai = Nilai::with(['mahasiswa'])->get(); // select * from Nilai
        return view('nilai.index', compact('nilai'));
    }


    public function create()
    {
        $mahasiswa  = Mahasiswa::all();
        $makul = Makul::all();
        return view('nilai.create', compact('mahasiswa','makul'));
    }

    public function store(Request $request)
    {
        Nilai::create($request->all());
        alert('Sukses','Data berhasil disimpan', 'success');
        return redirect()->route('nilai');
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::all();
        $makul = Makul::all();
        $nilai = Nilai::find($id); //select * from nam_table where id = $id;
        return view('nilai.edit', compact('nilai', 'mahasiswa' , 'makul'));
    }
    public function update(Request $request, $id)
    {
        $nilai = Nilai::find($id);
        $nilai->update($request->all());
        toast('Berhasil Mengedit Data','success');
        return redirect()->route('nilai');
    }

    public function destroy($id)
    {
        $nilai = Nilai::find($id);
        $nilai->delete();
        toast('Yey, berhasil menghapus data','success');
        return redirect()->route('nilai');
    }
}
