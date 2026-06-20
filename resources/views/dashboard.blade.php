@extends('layouts.admin')

@section('content')
<div class="mb-6">
    <h2 class="text-2xl font-bold text-gray-800 mb-2">Dashboard</h2>
    <p class="text-gray-600">Selamat Datang Admin PAUD AL-BAROKAH. Kelola data sekolah melalui menu di samping.</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center justify-between">
        <div>
            <p class="text-gray-500 text-sm font-medium mb-1">Total Guru</p>
            <h3 class="text-3xl font-bold text-gray-800">{{ $totalGuru }}</h3>
        </div>
        <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center text-xl">👥</div>
    </div>
    
    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center justify-between">
        <div>
            <p class="text-gray-500 text-sm font-medium mb-1">Total Galeri</p>
            <h3 class="text-3xl font-bold text-gray-800">0</h3>
        </div>
        <div class="w-12 h-12 bg-green-100 text-green-600 rounded-full flex items-center justify-center text-xl">🖼️</div>
    </div>

    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center justify-between">
        <div>
            <p class="text-gray-500 text-sm font-medium mb-1">Pendaftar PPDB</p>
            <h3 class="text-3xl font-bold text-gray-800">0</h3>
        </div>
        <div class="w-12 h-12 bg-yellow-100 text-yellow-600 rounded-full flex items-center justify-center text-xl">📝</div>
    </div>
</div>
@endsection