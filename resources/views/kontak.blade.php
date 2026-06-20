<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - PAUD AL-BAROKAH</title>
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
                <a href="{{ url('/galeri') }}" class="hover:text-blue-900 transition">Galeri</a>
                <a href="{{ url('/berita') }}" class="hover:text-blue-900 transition">Berita</a>
                <a href="{{ url('/kontak') }}" class="text-blue-900 border-b-2 border-blue-900 pb-1">Kontak</a>
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
            <h2 class="text-4xl md:text-5xl font-black mb-4 tracking-tight">Hubungi Kami</h2>
            <p class="text-sm md:text-base font-medium text-blue-200 max-w-xl mx-auto">Punya pertanyaan seputar pendaftaran atau program sekolah? Jangan ragu untuk menghubungi kami.</p>
        </div>
    </div>

    <!-- Konten Kontak -->
    <div class="max-w-7xl mx-auto px-6 py-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            
            <!-- Bagian Kiri: Info & Peta -->
            <div>
                <h3 class="text-3xl font-extrabold text-slate-800 mb-6">Mari Terhubung dengan Kami</h3>
                <p class="text-slate-600 mb-8 leading-relaxed">
                    Kami selalu terbuka untuk berdiskusi mengenai pendidikan anak Anda. Silakan kunjungi sekolah kami pada jam kerja atau hubungi melalui kontak yang tersedia.
                </p>

                <!-- List Info -->
                <div class="space-y-6 mb-10">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-blue-100 text-blue-900 rounded-full flex items-center justify-center text-xl flex-shrink-0 shadow-sm">📍</div>
                        <div>
                            <h4 class="font-bold text-slate-800">Alamat Sekolah</h4>
                            <p class="text-sm text-slate-600 mt-1">Jl. Kedung Dalem, Kec. Mauk,<br>Kabupaten Tangerang, Banten</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-blue-100 text-blue-900 rounded-full flex items-center justify-center text-xl flex-shrink-0 shadow-sm">📞</div>
                        <div>
                            <h4 class="font-bold text-slate-800">Telepon / WhatsApp</h4>
                            <p class="text-sm text-slate-600 mt-1">(0895) 1501 5175</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-blue-100 text-blue-900 rounded-full flex items-center justify-center text-xl flex-shrink-0 shadow-sm">⏰</div>
                        <div>
                            <h4 class="font-bold text-slate-800">Jam Operasional</h4>
                            <p class="text-sm text-slate-600 mt-1">Senin - Jumat: 07.30 - 14.00 WIB<br>Sabtu & Minggu: Libur</p>
                        </div>
                    </div>
                </div>

                <!-- Peta Google Maps -->
            <div class="w-full h-64 bg-slate-200 rounded-3xl overflow-hidden border border-slate-100 shadow-inner">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.394533238495!2d106.52101577355849!3d-6.0774187939086834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e41fe1a76b679fb%3A0x341110ba64933af5!2sPAUD%20AL-BAROKAH!5e0!3m2!1sid!2sid!4v1780221544879!5m2!1sid!2sid" 
                    width="100%" 
                    height="100%" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            </div>

            <!-- Bagian Kanan: Form Kontak -->
            <div class="bg-white p-8 md:p-10 rounded-3xl shadow-lg shadow-slate-200/50 border border-slate-100">
                <h3 class="text-2xl font-bold text-blue-900 mb-6">Kirim Pesan</h3>
                
                <form action="#" method="POST" class="space-y-5">
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Nama Lengkap</label>
                        <input type="text" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-shadow" placeholder="Masukkan nama Anda">
                    </div>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Nomor Telepon/WA</label>
                            <input type="text" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-shadow" placeholder="Contoh: 0812...">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Email (Opsional)</label>
                            <input type="email" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-shadow" placeholder="alamat@email.com">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Pesan / Pertanyaan</label>
                        <textarea rows="4" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-shadow" placeholder="Tuliskan pertanyaan atau pesan Anda di sini..."></textarea>
                    </div>

                    <button type="button" class="w-full bg-blue-900 text-white font-bold py-3.5 rounded-xl hover:bg-blue-800 transition-colors shadow-md mt-4">
                        Kirim Pesan Sekarang
                    </button>
                </form>
            </div>

        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-slate-50 py-8 text-center text-sm font-medium text-slate-500 border-t border-slate-200">
        &copy; 2026 PAUD AL-BAROKAH. All rights reserved.
    </footer>

</body>
</html>