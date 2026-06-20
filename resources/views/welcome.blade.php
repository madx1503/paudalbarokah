<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAUD AL-BAROKAH - Beranda</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }
    </style>
</head>
<body class="bg-white text-slate-800 overflow-x-hidden">

    <!-- Topbar (Biru Navy Gelap) -->
    <div class="bg-blue-900 text-white text-xs md:text-sm py-2.5 px-6 md:px-16 flex justify-between items-center hidden md:flex">
        <div class="flex gap-6">
            <span class="flex items-center gap-2">📞 (0895) 1501 5175</span>
            <span class="flex items-center gap-2">✉️ info@paudalbarokah.sch.id</span>
            <span class="flex items-center gap-2">📍 Kedung dalem, Kec. Mauk, Kab. Tangerang</span>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="bg-white px-6 md:px-16 py-4 flex justify-between items-center shadow-sm sticky top-0 z-50">
        
        <!-- BAGIAN KIRI: Logo -->
        <div class="flex items-center gap-3">
            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center text-2xl">🧸</div> 
            <div>
                <h1 class="text-2xl font-extrabold text-blue-900 leading-none tracking-tight">PAUD AL-BAROKAH</h1>
                <p class="text-[10px] text-slate-500 font-medium mt-1">Cerdas - Ceria - Berakhlak Mulia</p>
            </div>
        </div>

        <!-- BAGIAN KANAN: Menu Teks & Ikon Profil -->
        <div class="flex items-center gap-8 md:gap-12">
            
            <!-- Menu Teks -->
            <div class="hidden lg:flex items-center gap-8 font-semibold text-slate-600 text-sm">
                <a href="{{ url('/') }}" class="text-blue-900">Beranda</a>
                <a href="{{ url('/profil-sekolah') }}" class="hover:text-blue-900 transition flex items-center gap-1">Profil <span>⌄</span></a>
                <a href="{{ url('/profil-guru') }}" class="hover:text-blue-900 transition">Guru</a>
                <a href="{{ url('/galeri') }}" class="hover:text-blue-900 transition">Galeri</a>
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

    <!-- Hero Section -->
    <div class="relative bg-slate-50 pt-16 pb-32 px-6 md:px-16 overflow-hidden flex items-center">
        <div class="max-w-7xl mx-auto w-full grid grid-cols-1 lg:grid-cols-12 gap-8 items-center relative z-10">
            
            <div class="lg:col-span-5 pr-0 lg:pr-5 relative z-20">
                <p class="text-blue-800 font-bold mb-2 text-lg">Selamat Datang di</p>
                <h2 class="text-5xl lg:text-7xl font-black text-blue-900 mb-4 tracking-tight leading-none">PAUD AL-BAROKAH</h2>
                <h3 class="text-2xl lg:text-3xl font-bold text-slate-800 mb-6 leading-snug">Membentuk Generasi Cerdas, Ceria, dan Berakhlak Mulia</h3>
                <p class="text-slate-600 mb-10 text-base leading-relaxed max-w-lg">
                    Kami menyediakan lingkungan belajar yang aman, nyaman, dan menyenangkan untuk mendukung tumbuh kembang anak secara optimal.
                </p>
                
                <!-- Tombol Utama -->
<div class="flex flex-col sm:flex-row gap-4 mt-8">
                    <!-- Tombol Tentang Kami (Nyambung ke Profil Sekolah) -->
                    <a href="{{ url('/profil-sekolah') }}" class="flex items-center justify-center gap-2 bg-blue-900 text-white px-8 py-3.5 rounded-full font-semibold hover:bg-blue-800 transition-all shadow-lg hover:shadow-blue-200">
                        <span>🔍</span> Tentang Kami
                    </a>

                    <!-- Tombol Hubungi Kami (Nyambung ke Kontak) -->
                    <a href="{{ url('/kontak') }}" class="flex items-center justify-center gap-2 border-2 border-blue-900 text-blue-900 px-8 py-3.5 rounded-full font-semibold hover:bg-blue-50 transition-all">
                        <span>💬</span> Hubungi Kami
                    </a>
                </div>
            </div>

            <!-- Kolom Gambar Bersih Tanpa Mobil -->
            <div class="lg:col-span-7 relative w-full flex items-center justify-center">
                <div class="relative w-full overflow-hidden">
                    <img src="{{ asset('images/tk-nembus.png') }}" alt="Anak TK" class="w-full h-auto object-contain drop-shadow-2xl z-10">
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="max-w-7xl mx-auto px-6 md:px-16 relative z-30 -mt-20 mb-20">
        <div class="bg-white rounded-2xl shadow-xl shadow-slate-200/50 flex flex-col md:flex-row divide-y md:divide-y-0 md:divide-x divide-gray-100 border border-gray-50 p-2">
            
            <div class="flex-1 p-6 flex items-center gap-4 hover:bg-slate-50 rounded-xl transition">
                <div class="w-14 h-14 bg-blue-100 text-blue-900 rounded-full flex items-center justify-center text-2xl flex-shrink-0">👥</div>
                <div>
                    <h4 class="font-bold text-slate-800 text-sm mb-1">Guru Profesional</h4>
                    <p class="text-xs text-slate-500 leading-relaxed">Tenaga pendidik berpengalaman dan penuh kasih sayang</p>
                </div>
            </div>

            <div class="flex-1 p-6 flex items-center gap-4 hover:bg-slate-50 rounded-xl transition">
                <div class="w-14 h-14 bg-sky-100 text-sky-600 rounded-full flex items-center justify-center text-2xl flex-shrink-0">📖</div>
                <div>
                    <h4 class="font-bold text-slate-800 text-sm mb-1">Kurikulum Terbaik</h4>
                    <p class="text-xs text-slate-500 leading-relaxed">Kurikulum yang menyenangkan dan sesuai tahap perkembangan</p>
                </div>
            </div>

            <div class="flex-1 p-6 flex items-center gap-4 hover:bg-slate-50 rounded-xl transition">
                <div class="w-14 h-14 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center text-2xl flex-shrink-0">🛡️</div>
                <div>
                    <h4 class="font-bold text-slate-800 text-sm mb-1">Lingkungan Aman</h4>
                    <p class="text-xs text-slate-500 leading-relaxed">Fasilitas lengkap dan lingkungan belajar yang aman</p>
                </div>
            </div>

            <div class="flex-1 p-6 flex items-center gap-4 hover:bg-slate-50 rounded-xl transition">
                <div class="w-14 h-14 bg-amber-100 text-amber-600 rounded-full flex items-center justify-center text-2xl flex-shrink-0">⭐</div>
                <div>
                    <h4 class="font-bold text-slate-800 text-sm mb-1">Ekstrakurikuler</h4>
                    <p class="text-xs text-slate-500 leading-relaxed">Berbagai kegiatan menarik untuk mengembangkan potensi anak</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Grid -->
    <div class="max-w-7xl mx-auto px-6 md:px-16 pb-24">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            
           <!-- Profil Sekolah -->
            <div>
                <h3 class="text-lg font-bold text-slate-800 mb-6 border-b-2 border-slate-100 pb-2 inline-block">Profil Sekolah</h3>
                <div class="flex flex-col md:flex-row lg:flex-col gap-6">
                    
                    <!-- Foto Gedung (Sekarang bisa diklik) -->
                    <a href="{{ url('/profil-sekolah') }}" class="w-full h-48 rounded-xl overflow-hidden flex-shrink-0 block group shadow-md border border-slate-100">
                        <img src="{{ asset('images/mdx.jpg') }}" alt="Gedung PAUD AL-BAROKAH" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </a>
                    
                    <div>
                        <p class="text-sm text-slate-600 leading-relaxed mb-4">
                            PAUD AL-BAROKAH berdiri sejak tahun 2008 dengan komitmen memberikan pendidikan berkualitas bagi anak usia dini. Kami percaya bahwa setiap anak memiliki potensi luar biasa yang perlu dikembangkan.
                        </p>
                        
                        <!-- Tombol Selengkapnya (Sekarang nyambung ke halaman profil) -->
                        <a href="{{ url('/profil-sekolah') }}" class="inline-block border border-blue-900 text-blue-900 px-6 py-2 rounded-full text-sm font-semibold hover:bg-blue-50 transition">
                            Selengkapnya
                        </a>
                    </div>
                </div>
            </div>

            <!-- Berita Terbaru -->
            <div>
                <h3 class="text-lg font-bold text-slate-800 mb-6 border-b-2 border-slate-100 pb-2 inline-block">Berita Terbaru</h3>
                <div class="flex flex-col gap-6">
                    
                    <!-- Berita 1 (Bisa Diklik) -->
                    <a href="{{ url('/berita') }}" class="flex gap-4 group hover:bg-blue-50/50 p-2 -m-2 rounded-xl transition-colors">
                        <!-- Thumbnail -->
                        <div class="w-24 h-20 bg-slate-200 rounded-lg flex-shrink-0 overflow-hidden border border-slate-100 shadow-sm">
                             <img src="{{ asset('images/marketday.jpg') }}" alt="Market Day" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <!-- Teks -->
                        <div>
                            <h4 class="font-bold text-slate-800 text-sm leading-tight mb-1 group-hover:text-blue-900 transition-colors">Kegiatan Market Day PAUD AL-BAROKAH</h4>
                            <p class="text-[10px] text-slate-400 mb-1">20 Mei 2026</p>
                            <p class="text-xs text-slate-600 line-clamp-2">Anak-anak belajar berwirausaha sejak dini melalui kegiatan Market Day...</p>
                        </div>
                    </a>

                    <!-- Berita 2 (Bisa Diklik) -->
                    <a href="{{ url('/berita') }}" class="flex gap-4 group hover:bg-blue-50/50 p-2 -m-2 rounded-xl transition-colors">
                        <!-- Thumbnail -->
                        <div class="w-24 h-20 bg-slate-200 rounded-lg flex-shrink-0 overflow-hidden border border-slate-100 shadow-sm">
                             <img src="{{ asset('images/outing.jpg') }}" alt="Outing Class" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <!-- Teks -->
                        <div>
                            <h4 class="font-bold text-slate-800 text-sm leading-tight mb-1 group-hover:text-blue-900 transition-colors">Outing Class ke Kebun Binatang</h4>
                            <p class="text-[10px] text-slate-400 mb-1">15 Mei 2026</p>
                            <p class="text-xs text-slate-600 line-clamp-2">Kegiatan outing class ke Kebun Binatang untuk mengenal berbagai satwa...</p>
                        </div>
                    </a>

                    <!-- Tombol Lihat Semua -->
                    <a href="{{ url('/berita') }}" class="text-blue-900 text-sm font-semibold hover:underline mt-2 inline-flex items-center gap-1 group">
                        Lihat Semua Berita <span class="group-hover:translate-x-1 transition-transform">&rarr;</span>
                    </a>
                </div>
            </div>

            <!-- Galeri -->
            <div>
                <h3 class="text-lg font-bold text-slate-800 mb-6 border-b-2 border-slate-100 pb-2 inline-block">Galeri Kegiatan</h3>
                <div class="grid grid-cols-3 gap-2 mb-4">
                     <!-- Foto 1 -->
                     <a href="{{ url('/galeri') }}" class="aspect-[4/3] rounded-lg overflow-hidden group shadow-sm block">
                        <img src="{{ asset('images/jalan.jpg') }}" alt="Galeri 1" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                      </a>
                      <!-- Foto 2 -->
                     <a href="{{ url('/galeri') }}" class="aspect-[4/3] rounded-lg overflow-hidden group shadow-sm block">
                         <img src="{{ asset('images/duduk.jpg') }}" alt="Galeri 2" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                     </a>
                      <!-- Foto 3 -->
                    <a href="{{ url('/galeri') }}" class="aspect-[4/3] rounded-lg overflow-hidden group shadow-sm block">
                        <img src="{{ asset('images/olahraga.jpg') }}" alt="Galeri 3" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                     </a>
                      <!-- Foto 4 -->
                     <a href="{{ url('/galeri') }}" class="aspect-[4/3] rounded-lg overflow-hidden group shadow-sm block">
                         <img src="{{ asset('images/ab.jpg') }}" alt="Galeri 4" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                     </a>
                     <!-- Foto 5 -->
                   <a href="{{ url('/galeri') }}" class="aspect-[4/3] rounded-lg overflow-hidden group shadow-sm block">
                         <img src="{{ asset('images/ad.jpg') }}" alt="Galeri 5" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                     </a>
                     <!-- Foto 6 -->
                    <a href="{{ url('/galeri') }}" class="aspect-[4/3] rounded-lg overflow-hidden group shadow-sm block">
                      <img src="{{ asset('images/ac.jpg') }}" alt="Galeri 6" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                      </a>
                    </div>

                <a href="{{ url('/galeri') }}" class="text-blue-900 text-sm font-semibold hover:underline mt-4 inline-flex items-center gap-1 group">
                    Lihat Semua Galeri <span class="group-hover:translate-x-1 transition-transform">&rarr;</span>
                </a>
        </div>
    </div>

    <footer class="bg-slate-50 py-6 text-center text-sm text-slate-500 border-t border-slate-200">
        &copy; 2026 PAUD AL-BAROKAH. All rights reserved.
    </footer>

</body>
</html>