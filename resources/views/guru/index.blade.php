@extends('layouts.admin')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-bold text-gray-800">Data Guru</h2>
    <a href="{{ route('guru.create') }}" class="bg-blue-600 text-white px-5 py-2.5 rounded-xl font-semibold hover:bg-blue-700 transition shadow-sm flex items-center gap-2">
        <span>+</span> Tambah Guru
    </a>
</div>

@if(session('success'))
<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-xl relative mb-6" role="alert">
    <span class="block sm:inline">{{ session('success') }}</span>
</div>
@endif

<div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
    <table class="w-full text-left border-collapse">
        <thead>
            <tr class="bg-slate-50 border-b border-gray-100">
                <th class="py-4 px-6 font-semibold text-slate-600">No</th>
                <th class="py-4 px-6 font-semibold text-slate-600">Foto</th>
                <th class="py-4 px-6 font-semibold text-slate-600">Nama Lengkap</th>
                <th class="py-4 px-6 font-semibold text-slate-600">Jabatan</th>
                <th class="py-4 px-6 font-semibold text-slate-600">No. Telepon</th>
                <th class="py-4 px-6 font-semibold text-slate-600 text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($gurus as $item)
            <tr class="border-b border-gray-50 hover:bg-slate-50 transition">
                <td class="py-4 px-6 text-slate-700">{{ $loop->iteration }}</td>
                <td class="py-4 px-6">
                    @if($item->foto)
                        <img src="{{ asset('images/guru/' . $item->foto) }}" alt="Foto" class="h-10 w-10 object-cover rounded-full border border-gray-200">
                    @else
                        <div class="h-10 w-10 bg-slate-200 rounded-full flex items-center justify-center text-xs text-slate-500">N/A</div>
                    @endif
                </td>
                <td class="py-4 px-6 font-medium text-slate-800">{{ $item->nama }}</td>
                <td class="py-4 px-6 text-slate-700">{{ $item->jabatan }}</td>
                <td class="py-4 px-6 text-slate-700">{{ $item->telepon }}</td>
                <td class="py-4 px-6 flex justify-center gap-2">
                    <a href="{{ route('guru.edit', $item->id) }}" class="bg-amber-100 text-amber-700 px-4 py-2 rounded-lg text-sm font-medium hover:bg-amber-200 transition">Edit</a>
                    <form action="{{ route('guru.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-100 text-red-700 px-4 py-2 rounded-lg text-sm font-medium hover:bg-red-200 transition">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="py-8 text-center text-slate-500">Belum ada data guru.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection