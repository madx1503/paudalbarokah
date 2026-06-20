<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Guru - PAUD AL-BAROKAH</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style> body { font-family: 'Poppins', sans-serif; } </style>
</head>
<body class="bg-slate-50 text-slate-800 overflow-x-hidden">

    <!-- Navbar yang sudah seragam dengan Beranda -->
    <nav class="bg-white px-6 md:px-16 py-4 flex justify-between items-center shadow-sm sticky top-0 z-50">
        <!-- Logo -->
        <div class="flex items-center gap-3">
            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center text-2xl">🧸</div> 
            <div>
                <h1 class="text-2xl font-extrabold text-blue-900 leading-none tracking-tight">PAUD AL-BAROKAH</h1>
                <p class="text-[10px] text-slate-500 font-medium mt-1">Cerdas - Ceria - Berakhlak Mulia</p>
            </div>
        </div>

        <!-- Menu & Ikon Profil -->
        <div class="flex items-center gap-8 md:gap-12">
            <!-- Navigasi yang Benar (Ganti bagian menu kamu dengan ini) -->
            <div class="hidden lg:flex items-center gap-8 font-semibold text-slate-600 text-sm">
                <a href="{{ url('/') }}" class="hover:text-blue-900 transition">Beranda</a>
                <a href="{{ url('/profil-sekolah') }}" class="hover:text-blue-900 transition flex items-center gap-1">Profil <span>⌄</span></a>
                <a href="{{ url('/profil-guru') }}" class="text-blue-900 border-b-2 border-blue-900 pb-1">Guru</a>
                <a href="{{ url('/galeri') }}" class="hover:text-blue-900 transition">Galeri</a>
                <a href="{{ url('/berita') }}" class="hover:text-blue-900 transition">Berita</a>
                <a href="{{ url('/kontak') }}" class="hover:text-blue-900 transition">Kontak</a>
            </div>
            <!-- Ikon Profil -->
            <a href="{{ route('login') }}" title="Login Admin" class="w-11 h-11 flex-shrink-0 flex items-center justify-center rounded-full bg-blue-900 text-white hover:bg-blue-800 hover:scale-105 transition-all duration-300 shadow-md shadow-blue-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    </nav>

    <!-- Banner Header Guru (Modern dengan efek Blob Samar) -->
    <div class="bg-blue-900 py-20 text-center text-white relative overflow-hidden">
        <!-- Dekorasi Latar Belakang -->
        <div class="absolute top-0 left-0 w-72 h-72 bg-blue-800 rounded-full mix-blend-multiply filter blur-3xl opacity-50 -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-72 h-72 bg-indigo-800 rounded-full mix-blend-multiply filter blur-3xl opacity-50 translate-x-1/2 translate-y-1/2"></div>
        
        <div class="relative z-10 px-6">
            <h2 class="text-4xl md:text-5xl font-black mb-4 tracking-tight">Guru & Staf Pengajar</h2>
            <p class="text-sm md:text-base font-medium text-blue-200 max-w-xl mx-auto">Orang-orang hebat di balik keceriaan dan perkembangan anak-anak kita.</p>
        </div>
    </div>

    <!-- Grid Data Guru -->
    <div class="max-w-7xl mx-auto px-6 py-20">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
            
            @forelse($gurus as $guru)
            <!-- Kartu Guru dengan Interaksi Hover -->
            <div class="bg-white rounded-3xl shadow-lg shadow-slate-200/50 border border-slate-100 p-8 text-center hover:-translate-y-2 hover:shadow-xl hover:border-blue-100 transition-all duration-300 group">
                
                <!-- Frame Foto -->
                <div class="w-32 h-32 rounded-full mx-auto overflow-hidden mb-6 shadow-md border-4 border-white group-hover:border-blue-100 transition-all duration-300 bg-slate-100 flex items-center justify-center relative">
                    @if($guru->foto)
                        <!-- Foto akan sedikit membesar (zoom) saat dihover -->
                        <img src="{{ asset('images/guru/' . $guru->foto) }}" alt="Foto {{ $guru->nama }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    @else
                        <span class="text-5xl">👨‍🏫</span>
                    @endif
                </div>

                <!-- Info Guru -->
                <h3 class="text-xl font-bold text-slate-800 mb-1 group-hover:text-blue-900 transition-colors">{{ $guru->nama }}</h3>
                <p class="text-blue-600 font-bold mb-6 text-xs uppercase tracking-widest">{{ $guru->jabatan }}</p>
                
                <!-- Tombol/Badge Kontak -->
                <div class="inline-flex items-center gap-2 bg-slate-50 border border-slate-100 text-slate-600 px-5 py-2.5 rounded-full text-xs font-semibold group-hover:bg-blue-50 group-hover:text-blue-700 group-hover:border-blue-200 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                    </svg>
                    {{ $guru->telepon }}
                </div>
            </div>
            @empty
            <!-- Tampilan jika database guru masih kosong -->
            <div class="col-span-full text-center py-20 bg-white rounded-3xl border-2 border-dashed border-slate-200">
                <div class="text-6xl mb-4 opacity-50">📭</div>
                <p class="text-slate-500 text-lg font-medium">Belum ada data guru yang ditambahkan.</p>
            </div>
            @endforelse

        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-slate-50 py-8 text-center text-sm font-medium text-slate-500 border-t border-slate-200">
        &copy; 2026 PAUD AL-BAROKAH. All rights reserved.
    </footer>

</body>
</html>