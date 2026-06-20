<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita & Informasi - PAUD AL-BAROKAH</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style> body { font-family: 'Poppins', sans-serif; } </style>
</head>
<body class="bg-slate-50 text-slate-800 overflow-x-hidden">

    <div class="bg-blue-900 text-white text-xs md:text-sm py-2.5 px-6 md:px-16 flex justify-between items-center hidden md:flex">
        <div class="flex gap-6">
            <span class="flex items-center gap-2">📞 (0895) 1501 5175</span>
            <span class="flex items-center gap-2">✉️ info@paudalbarokah.sch.id</span>
            <span class="flex items-center gap-2">📍 Kedung dalem, Kec. Mauk, Kab. Tangerang</span>
        </div>
    </div>

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
                <a href="{{ url('/galeri') }}" class="hover:text-blue-900 transition">Galeri</a>
                <a href="{{ url('/berita') }}" class="text-blue-900 border-b-2 border-blue-900 pb-1">Berita</a>
                <a href="{{ url('/kontak') }}" class="hover:text-blue-900 transition">Kontak</a>
            </div>

            <a href="{{ route('login') }}" title="Login Admin" class="w-11 h-11 flex-shrink-0 flex items-center justify-center rounded-full bg-blue-900 text-white hover:bg-blue-800 hover:scale-105 transition-all duration-300 shadow-md shadow-blue-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    </nav>

    <div class="bg-blue-900 py-20 text-center text-white relative overflow-hidden">
        <div class="absolute top-0 left-0 w-72 h-72 bg-blue-800 rounded-full mix-blend-multiply filter blur-3xl opacity-50 -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-72 h-72 bg-indigo-800 rounded-full mix-blend-multiply filter blur-3xl opacity-50 translate-x-1/2 translate-y-1/2"></div>
        
        <div class="relative z-10 px-6">
            <h2 class="text-4xl md:text-5xl font-black mb-4 tracking-tight">Berita & Pengumuman</h2>
            <p class="text-sm md:text-base font-medium text-blue-200 max-w-xl mx-auto">Ikuti terus informasi terbaru dan keseruan kegiatan anak-anak di sekolah kami.</p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-6 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            
            <div class="bg-white rounded-3xl shadow-lg shadow-slate-200/50 border border-slate-100 overflow-hidden hover:-translate-y-2 hover:shadow-xl transition-all duration-300 group">
                <a href="#" class="block w-full h-52 bg-slate-200 overflow-hidden relative">
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm text-blue-900 text-xs font-bold px-3 py-1.5 rounded-full z-10">Kegiatan</div>
                    <img src="{{ asset('images/marketday.jpg') }}" alt="Thumbnail Berita" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </a>
                
                <div class="p-8">
                    <p class="text-xs text-slate-400 font-medium mb-3 flex items-center gap-2">
                        <span>📅 20 Mei 2026</span>
                        <span>•</span>
                        <span>Admin</span>
                    </p>
                    <a href="#" class="block">
                        <h3 class="text-xl font-bold text-slate-800 mb-3 group-hover:text-blue-900 transition-colors line-clamp-2">Kegiatan Market Day PAUD AL-BAROKAH Berlangsung Meriah</h3>
                    </a>
                    <p class="text-slate-600 text-sm leading-relaxed mb-6 line-clamp-3">
                        Anak-anak belajar berwirausaha sejak dini melalui kegiatan Market Day. Mereka sangat antusias menjajakan makanan ringan dan belajar berhitung dasar dengan teman-temannya.
                    </p>
                    <a href="#" class="inline-flex items-center gap-2 text-blue-700 font-semibold text-sm hover:text-blue-900 transition-colors">
                        Baca selengkapnya <span class="text-lg">→</span>
                    </a>
                </div>
            </div>

            <div class="bg-white rounded-3xl shadow-lg shadow-slate-200/50 border border-slate-100 overflow-hidden hover:-translate-y-2 hover:shadow-xl transition-all duration-300 group">
                <a href="#" class="block w-full h-52 bg-slate-200 overflow-hidden relative">
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm text-blue-900 text-xs font-bold px-3 py-1.5 rounded-full z-10">Pengumuman</div>
                    <img src="{{ asset('images/ppdb.png') }}" alt="Thumbnail Berita" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </a>
                
                <div class="p-8">
                    <p class="text-xs text-slate-400 font-medium mb-3 flex items-center gap-2">
                        <span>📅 15 Mei 2026</span>
                        <span>•</span>
                        <span>Kepala Sekolah</span>
                    </p>
                    <a href="#" class="block">
                        <h3 class="text-xl font-bold text-slate-800 mb-3 group-hover:text-blue-900 transition-colors line-clamp-2">Pendaftaran Peserta Didik Baru Tahun Ajaran 2026/2027 Telah Dibuka</h3>
                    </a>
                    <p class="text-slate-600 text-sm leading-relaxed mb-6 line-clamp-3">
                        Segera daftarkan putra-putri Anda ke PAUD AL-BAROKAH. Kuota sangat terbatas. Tersedia promo potongan biaya formulir pendaftaran untuk 20 pendaftar pertama.
                    </p>
                    <a href="#" class="inline-flex items-center gap-2 text-blue-700 font-semibold text-sm hover:text-blue-900 transition-colors">
                        Baca selengkapnya <span class="text-lg">→</span>
                    </a>
                </div>
            </div>

            <!-- Kartu Berita 3 -->
            <div class="bg-white rounded-3xl shadow-lg shadow-slate-200/50 border border-slate-100 overflow-hidden hover:-translate-y-2 hover:shadow-xl transition-all duration-300 group">
                
                <!-- BAGIAN YANG DIUBAH: Menambahkan Tag img -->
                <a href="#" class="block w-full h-52 bg-slate-200 overflow-hidden relative">
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm text-blue-900 text-xs font-bold px-3 py-1.5 rounded-full z-10">Prestasi</div>
                    
                    <!-- Fotonya dimunculkan di sini. Kamu bisa ganti 'paud.jpg' dengan foto lomba asli kalau ada -->
                    <img src="{{ asset('images/juara.jpg') }}" alt="Foto Prestasi Lomba" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </a>
                
                <!-- Bagian teks di bawahnya biarkan saja (tidak usah diubah) -->
                <div class="p-8">
                    <p class="text-xs text-slate-400 font-medium mb-3 flex items-center gap-2">
                        <span>📅 02 Mei 2026</span>
                        <span>•</span>
                        <span>Admin</span>
                    </p>
                    <a href="#" class="block">
                        <h3 class="text-xl font-bold text-slate-800 mb-3 group-hover:text-blue-900 transition-colors line-clamp-2">Siswa PAUD AL-BAROKAH Juara 1 Lomba Mewarnai Tingkat Kecamatan</h3>
                    </a>
                    <p class="text-slate-600 text-sm leading-relaxed mb-6 line-clamp-3">
                        Selamat kepada ananda Budi yang berhasil meraih Juara 1 pada lomba mewarnai. Prestasi ini sangat membanggakan dan menjadi motivasi bagi siswa lainnya.
                    </p>
                    <a href="#" class="inline-flex items-center gap-2 text-blue-700 font-semibold text-sm hover:text-blue-900 transition-colors">
                        Baca selengkapnya <span class="text-lg">→</span>
                    </a>
                </div>
            </div>

        </div>
        
        <div class="mt-16 text-center">
            <button class="bg-blue-50 text-blue-700 border border-blue-200 px-8 py-3 rounded-full font-bold hover:bg-blue-900 hover:text-white hover:border-blue-900 transition-colors shadow-sm">
                Muat Lebih Banyak
            </button>
        </div>
    </div>

    <footer class="bg-slate-50 py-8 text-center text-sm font-medium text-slate-500 border-t border-slate-200">
        &copy; 2026 PAUD AL-BAROKAH. All rights reserved.
    </footer>

</body>
</html>