<?php

namespace App\Http\Controllers;
;
use App\Pegawai;
use Illuminate\Http\Controllers;
use App\Http\Requests\CreatePegawaiRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::latest('created_at')->get();
        return view('pegawai.index', compact('pegawai'));
    }

    public function create()
    {
        return view('pegawai.create');
    }

    public function store(CreatePegawaiRequest $request)
    {
        Pegawai::create($request->all());
        return redirect('pegawai')->with('message', 'Data berhasil ditambahkan!');
    }

    public function show($id)
    {
        $pegawai = Pegawai::find($id);
        return view('pegawai.show', compact('pegawai'));
    }

    public function edit($id)
    {
        $pegawai = Pegawai::find($id);

        return view('pegawai.edit', compact('pegawai'));
    }

    public function update($id)
    {
        $pegawaiUpdate = Request::all();
        $pegawai = Pegawai::find($id);
        $pegawai->update($pegawaiUpdate);
        return redirect('pegawai')->with('message', 'Data berhasil dirubah!');
    }

    public function destroy($id)
    {
        Pegawai::find($id)->delete();
        return redirect('pegawai')->with('message', 'Data berhasil dihapus!');
    }
}
