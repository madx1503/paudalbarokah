<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GuruController extends Controller
{
    public function index()
    {
        $gurus = Guru::latest()->get();
        return view('guru.index', compact('gurus'));
    }

    public function create()
    {
        return view('guru.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'telepon' => 'required|numeric',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $input = $request->all();

        if ($image = $request->file('foto')) {
            $destinationPath = 'images/guru/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move(public_path($destinationPath), $profileImage);
            $input['foto'] = "$profileImage";
        }

        Guru::create($input);
        return redirect()->route('guru.index')->with('success', 'Data Guru berhasil ditambahkan!');
    }

    public function edit(Guru $guru)
    {
        return view('guru.edit', compact('guru'));
    }

    public function update(Request $request, Guru $guru)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'telepon' => 'required|numeric',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $input = $request->all();

        if ($image = $request->file('foto')) {
            $destinationPath = 'images/guru/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move(public_path($destinationPath), $profileImage);
            $input['foto'] = "$profileImage";

            if($guru->foto && File::exists(public_path('images/guru/'.$guru->foto))) {
                File::delete(public_path('images/guru/'.$guru->foto));
            }
        } else {
            unset($input['foto']); 
        }

        $guru->update($input);
        return redirect()->route('guru.index')->with('success', 'Data Guru berhasil diperbarui!');
    }

    public function destroy(Guru $guru)
    {
        if($guru->foto && File::exists(public_path('images/guru/'.$guru->foto))) {
            File::delete(public_path('images/guru/'.$guru->foto));
        }

        $guru->delete();
        return redirect()->route('guru.index')->with('success', 'Data Guru berhasil dihapus!');
    }
}