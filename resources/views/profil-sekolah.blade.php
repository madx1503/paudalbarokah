<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Sekolah - PAUD AL-BAROKAH</title>
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
            <h2 class="text-4xl md:text-5xl font-black mb-4 tracking-tight">Profil Sekolah</h2>
            <p class="text-sm md:text-base font-medium text-blue-200 max-w-xl mx-auto">Mengenal lebih dekat sejarah, visi, misi, dan identitas PAUD AL-BAROKAH.</p>
        </div>
    </div>

    <!-- Konten Utama -->
    <div class="max-w-7xl mx-auto px-6 py-16">
        
        <!-- Section 1: Sejarah & Identitas (Split Kiri-Kanan) -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start mb-20">
            
            <!-- Kiri: Sejarah -->
            <div>
                <div class="inline-block bg-blue-100 text-blue-800 font-bold px-4 py-1.5 rounded-full text-xs mb-4 uppercase tracking-wider">Sejarah Kami</div>
                <h3 class="text-3xl font-extrabold text-slate-800 mb-6">Membangun Fondasi Masa Depan Sejak 2008</h3>
                <p class="text-slate-600 leading-relaxed mb-4">
                    PAUD AL-BAROKAH resmi didirikan pada tahun 2008 atas dasar kepedulian terhadap pendidikan anak usia dini di wilayah Kedung Dalem, Mauk. Kami percaya bahwa masa kanak-kanak adalah masa emas (golden age) yang membutuhkan bimbingan tepat agar mereka tumbuh menjadi generasi yang cerdas dan berakhlak mulia.
                </p>
                <p class="text-slate-600 leading-relaxed">
                    Berawal dari sebuah bangunan sederhana, kini PAUD AL-BAROKAH terus berkembang dan telah meluluskan ratusan peserta didik yang siap melanjutkan pendidikan ke jenjang Sekolah Dasar (SD) dengan bekal karakter yang kuat.
                </p>
                
                <!-- Foto Gedung Sekolah -->
        <div class="mt-8 w-full h-64 rounded-3xl overflow-hidden shadow-lg border border-slate-100 group">
                <img src="{{ asset('images/mdx.jpg') }}" alt="Gedung PAUD AL-BAROKAH" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            </div>

            <!-- Kanan: Identitas (Biodata Sekolah) -->
            <div class="bg-white p-8 rounded-3xl shadow-lg shadow-slate-200/50 border border-slate-100">
                <h3 class="text-2xl font-bold text-blue-900 mb-6 flex items-center gap-3">
                    <span class="p-2 bg-blue-100 rounded-xl text-xl">🏫</span> Biodata Sekolah
                </h3>
                
                <ul class="space-y-4">
                    <li class="flex flex-col sm:flex-row sm:items-center py-3 border-b border-slate-100">
                        <span class="w-1/3 font-semibold text-slate-500 text-sm">Nama Sekolah</span>
                        <span class="w-2/3 font-bold text-slate-800">PAUD AL-BAROKAH</span>
                    </li>
                    <li class="flex flex-col sm:flex-row sm:items-center py-3 border-b border-slate-100">
                        <span class="w-1/3 font-semibold text-slate-500 text-sm">Tahun Berdiri</span>
                        <span class="w-2/3 font-bold text-slate-800">2008</span>
                    </li>
                    <li class="flex flex-col sm:flex-row sm:items-center py-3 border-b border-slate-100">
                        <span class="w-1/3 font-semibold text-slate-500 text-sm">Status</span>
                        <span class="w-2/3 font-bold text-slate-800">Swasta</span>
                    </li>
                    <li class="flex flex-col sm:flex-row sm:items-center py-3 border-b border-slate-100">
                        <span class="w-1/3 font-semibold text-slate-500 text-sm">Kurikulum</span>
                        <span class="w-2/3 font-bold text-slate-800">Kurikulum Merdeka Mandiri Belajar</span>
                    </li>
                    <li class="flex flex-col sm:flex-row sm:items-center py-3 border-b border-slate-100">
                        <span class="w-1/3 font-semibold text-slate-500 text-sm">Kepala Sekolah</span>
                        <span class="w-2/3 font-bold text-slate-800">Manto S.Kom M,Ti S.T</span>
                    </li>
                    <li class="flex flex-col sm:flex-row sm:items-center py-3">
                        <span class="w-1/3 font-semibold text-slate-500 text-sm">Alamat Lengkap</span>
                        <span class="w-2/3 font-bold text-slate-800 leading-snug">Jl. Kedung Dalem, Kec. Mauk, Kabupaten Tangerang, Banten</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Section 2: Visi & Misi -->
        <div class="mt-20">
            <div class="text-center mb-12">
                <h3 class="text-3xl font-extrabold text-blue-900">Visi & Misi</h3>
                <p class="text-slate-500 mt-3">Komitmen kami dalam mendidik generasi penerus bangsa.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Card Visi -->
                <div class="bg-blue-900 p-10 rounded-3xl text-white shadow-xl hover:-translate-y-2 transition-transform duration-300">
                    <div class="w-16 h-16 bg-blue-800 rounded-2xl flex items-center justify-center text-3xl mb-6 shadow-inner">👁️</div>
                    <h4 class="text-2xl font-bold mb-4">Visi Kami</h4>
                    <p class="text-blue-100 leading-relaxed text-lg font-medium italic">
                        "Terwujudnya anak usia dini yang cerdas, ceria, mandiri, dan memiliki akhlak mulia sebagai fondasi generasi yang unggul."
                    </p>
                </div>

                <!-- Card Misi -->
                <div class="bg-white p-10 rounded-3xl border border-slate-100 shadow-lg shadow-slate-200/50 hover:-translate-y-2 transition-transform duration-300">
                    <div class="w-16 h-16 bg-sky-100 text-sky-600 rounded-2xl flex items-center justify-center text-3xl mb-6">🎯</div>
                    <h4 class="text-2xl font-bold text-slate-800 mb-4">Misi Kami</h4>
                    <ul class="space-y-4 text-slate-600 font-medium">
                        <li class="flex gap-3 items-start">
                            <span class="text-blue-600 font-bold mt-0.5">1.</span>
                            Menyelenggarakan pendidikan yang menyenangkan dan berpusat pada anak.
                        </li>
                        <li class="flex gap-3 items-start">
                            <span class="text-blue-600 font-bold mt-0.5">2.</span>
                            Membiasakan perilaku sopan santun dan nilai-nilai agama sejak dini.
                        </li>
                        <li class="flex gap-3 items-start">
                            <span class="text-blue-600 font-bold mt-0.5">3.</span>
                            Mengembangkan minat, bakat, dan kreativitas anak melalui bermain sambil belajar.
                        </li>
                        <li class="flex gap-3 items-start">
                            <span class="text-blue-600 font-bold mt-0.5">4.</span>
                            Menciptakan lingkungan sekolah yang aman, bersih, dan ramah anak.
                        </li>
                    </ul>
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