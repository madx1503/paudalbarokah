<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Kegiatan - PAUD AL-BAROKAH</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style> body { font-family: 'Poppins', sans-serif; } </style>
</head>
<body class="bg-slate-50 text-slate-800 overflow-x-hidden">

    <!-- Topbar -->
    <div class="bg-blue-900 text-white text-xs md:text-sm py-2.5 px-6 md:px-16 flex justify-between items-center hidden md:flex">
        <div class="flex gap-6">
            <span class="flex items-center gap-2">📞 (0895) 1501 5175</span>
            <span class="flex items-center gap-2">✉️ info@paudalbarokah.sch.id</span>
            <span class="flex items-center gap-2">📍 Kedung dalem, Kec. Mauk, Kab. Tangerang</span>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="bg-white px-6 md:px-16 py-4 flex justify-between items-center shadow-sm sticky top-0 z-50">
        <div class="flex items-center gap-3">
            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center text-2xl">🧸</div> 
            <div>
                <h1 class="text-2xl font-extrabold text-blue-900 leading-none tracking-tight">PAUD AL-BAROKAH</h1>
                <p class="text-[10px] text-slate-500 font-medium mt-1">Cerdas - Ceria - Berakhlak Mulia</p>
            </div>
        </div>

        <div class="flex items-center gap-8 md:gap-12">
            <div class="hidden lg:flex items-center gap-8 font-semibold text-slate-600 text-sm">
                <a href="{{ url('/') }}" class="hover:text-blue-900 transition">Beranda</a>
                <a href="{{ url('/profil-sekolah') }}" class="hover:text-blue-900 transition flex items-center gap-1">Profil <span>⌄</span></a>
                <a href="{{ url('/profil-guru') }}" class="hover:text-blue-900 transition">Guru</a>
                <a href="{{ url('/galeri') }}" class="text-blue-900 border-b-2 border-blue-900 pb-1">Galeri</a>
                <a href="{{ url('/berita') }}" class="hover:text-blue-900 transition">Berita</a>
                <a href="{{ url('/kontak') }}" class="hover:text-blue-900 transition">Kontak</a>
            </div>

            <!-- Ikon Profil Bulat -->
            <a href="{{ route('login') }}" title="Login Admin" class="w-11 h-11 flex-shrink-0 flex items-center justify-center rounded-full bg-blue-900 text-white hover:bg-blue-800 hover:scale-105 transition-all duration-300 shadow-md shadow-blue-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    </nav>

    <!-- Banner Header -->
    <div class="bg-blue-900 py-20 text-center text-white relative overflow-hidden">
        <div class="absolute top-0 left-0 w-72 h-72 bg-blue-800 rounded-full mix-blend-multiply filter blur-3xl opacity-50 -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-72 h-72 bg-indigo-800 rounded-full mix-blend-multiply filter blur-3xl opacity-50 translate-x-1/2 translate-y-1/2"></div>
        
        <div class="relative z-10 px-6">
            <h2 class="text-4xl md:text-5xl font-black mb-4 tracking-tight">Galeri Kegiatan</h2>
            <p class="text-sm md:text-base font-medium text-blue-200 max-w-xl mx-auto">Momen-momen keceriaan dan proses belajar anak-anak di PAUD AL-BAROKAH.</p>
        </div>
    </div>

    <!-- Konten Galeri -->
    <div class="max-w-7xl mx-auto px-6 py-16">
        
        <!-- Filter Kategori (Opsional, biar kelihatan keren) -->
        <div class="flex flex-wrap justify-center gap-3 mb-12">
            <button class="bg-blue-900 text-white px-6 py-2 rounded-full text-sm font-semibold shadow-md">Semua</button>
            <button class="bg-white text-slate-600 border border-slate-200 px-6 py-2 rounded-full text-sm font-semibold hover:bg-blue-50 hover:text-blue-900 transition-colors">Belajar</button>
            <button class="bg-white text-slate-600 border border-slate-200 px-6 py-2 rounded-full text-sm font-semibold hover:bg-blue-50 hover:text-blue-900 transition-colors">Bermain</button>
            <button class="bg-white text-slate-600 border border-slate-200 px-6 py-2 rounded-full text-sm font-semibold hover:bg-blue-50 hover:text-blue-900 transition-colors">Prestasi</button>
        </div>

        <!-- Grid Foto -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            
            <!-- Foto 1 -->
            <div class="bg-white rounded-2xl p-2 shadow-sm border border-slate-100 group">
                <div class="w-full aspect-[4/3] rounded-xl overflow-hidden relative">
                    <img src="{{ asset('images/olahraga.jpg') }}" alt="Kegiatan PAUD" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-blue-900/0 group-hover:bg-blue-900/20 transition-colors duration-300"></div>
                </div>
            </div>

            <!-- Foto 2 -->
            <div class="bg-white rounded-2xl p-2 shadow-sm border border-slate-100 group">
                <div class="w-full aspect-[4/3] rounded-xl overflow-hidden relative">
                    <img src="{{ asset('images/duduk.jpg') }}" alt="Kegiatan PAUD" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-blue-900/0 group-hover:bg-blue-900/20 transition-colors duration-300"></div>
                </div>
            </div>

            <!-- Foto 3 -->
            <div class="bg-white rounded-2xl p-2 shadow-sm border border-slate-100 group">
                <div class="w-full aspect-[4/3] rounded-xl overflow-hidden relative">
                    <img src="{{ asset('images/jalan.jpg') }}" alt="Kegiatan PAUD" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-blue-900/0 group-hover:bg-blue-900/20 transition-colors duration-300"></div>
                </div>
            </div>

            <!-- Foto 4 -->
            <div class="bg-white rounded-2xl p-2 shadow-sm border border-slate-100 group">
                <div class="w-full aspect-[4/3] rounded-xl overflow-hidden relative">
                    <img src="{{ asset('images/ad.jpg') }}" alt="Kegiatan PAUD" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-blue-900/0 group-hover:bg-blue-900/20 transition-colors duration-300"></div>
                </div>
            </div>

            <!-- Foto 5 -->
            <div class="bg-white rounded-2xl p-2 shadow-sm border border-slate-100 group">
                <div class="w-full aspect-[4/3] rounded-xl overflow-hidden relative">
                    <img src="{{ asset('images/ac.jpg') }}" alt="Kegiatan PAUD" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-blue-900/0 group-hover:bg-blue-900/20 transition-colors duration-300"></div>
                </div>
            </div>

            <!-- Foto 6 -->
            <div class="bg-white rounded-2xl p-2 shadow-sm border border-slate-100 group">
                <div class="w-full aspect-[4/3] rounded-xl overflow-hidden relative">
                    <img src="{{ asset('images/ab.jpg') }}" alt="Kegiatan PAUD" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-blue-900/0 group-hover:bg-blue-900/20 transition-colors duration-300"></div>
                </div>
            </div>

        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-slate-50 py-8 text-center text-sm font-medium text-slate-500 border-t border-slate-200">
        &copy; 2026 PAUD AL-BAROKAH. All rights reserved.
    </footer>

</body>
</html>