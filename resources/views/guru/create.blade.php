@extends('layouts.admin')

@section('content')
<div class="mb-6">
    <h2 class="text-2xl font-bold text-gray-800">Tambah Data Guru</h2>
</div>

<div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 max-w-2xl">
    <form action="{{ route('guru.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="mb-5">
            <label class="block text-gray-700 font-medium mb-2">Nama Lengkap</label>
            <input type="text" name="nama" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>
        
        <div class="mb-5">
            <label class="block text-gray-700 font-medium mb-2">Jabatan</label>
            <input type="text" name="jabatan" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <div class="mb-5">
            <label class="block text-gray-700 font-medium mb-2">Nomor Telepon</label>
            <input type="number" name="telepon" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <div class="mb-8">
            <label class="block text-gray-700 font-medium mb-2">Upload Foto Guru (Opsional)</label>
            <input type="file" name="foto" class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500" accept="image/*">
            <p class="text-xs text-gray-400 mt-1">*Format: jpg, jpeg, png. Maksimal 2MB.</p>
        </div>

        <div class="flex gap-3">
            <button type="submit" class="bg-blue-600 text-white px-6 py-2.5 rounded-xl font-semibold hover:bg-blue-700 transition shadow-sm">Simpan Data</button>
            <a href="{{ route('guru.index') }}" class="bg-gray-100 text-gray-700 px-6 py-2.5 rounded-xl font-semibold hover:bg-gray-200 transition">Batal</a>
        </div>
    </form>
</div>
@endsection