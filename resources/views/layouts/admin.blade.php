<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - PAUD AL-BAROKAH</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 flex h-screen overflow-hidden font-sans">

    <aside class="w-64 bg-slate-900 text-slate-300 flex flex-col h-full rounded-r-2xl shadow-xl flex-shrink-0">
        <div class="p-6 flex items-center gap-3">
            <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-slate-900 font-bold">TK</div>
            <div>
                <h2 class="text-white font-bold text-lg leading-none">PAUD AL-BAROKAH</h2>
                <span class="text-xs text-slate-400">Admin</span>
            </div>
        </div>
        
        <nav class="flex-1 px-4 mt-6 space-y-2">
            <a href="{{ url('/dashboard') }}" class="flex items-center gap-3 px-4 py-3 {{ request()->is('dashboard') ? 'bg-blue-600 text-white' : 'hover:bg-slate-800 hover:text-white' }} rounded-xl transition">
                <span>🏠</span> Dashboard
            </a>
            <a href="{{ url('/guru') }}" class="flex items-center gap-3 px-4 py-3 {{ request()->is('guru*') ? 'bg-blue-600 text-white' : 'hover:bg-slate-800 hover:text-white' }} rounded-xl transition">
                <span>👥</span> Data Guru
            </a>
            <a href="#" class="flex items-center gap-3 px-4 py-3 hover:bg-slate-800 hover:text-white rounded-xl transition">
                <span>🎓</span> Data Siswa
            </a>
        </nav>

        <div class="p-4">
            <a href="#" class="flex items-center gap-3 px-4 py-3 text-red-400 hover:bg-slate-800 hover:text-red-300 rounded-xl transition">
                <span>🚪</span> Logout
            </a>
        </div>
    </aside>

    <main class="flex-1 flex flex-col h-full overflow-y-auto">
        <header class="bg-white shadow-sm px-8 py-4 flex justify-between items-center z-10 sticky top-0">
            <h1 class="text-xl font-bold text-gray-800">Sistem Informasi Akademik</h1>
            <div class="flex items-center gap-3">
                <span class="font-medium text-gray-600 text-sm">Admin</span>
                <div class="w-9 h-9 bg-gray-200 rounded-full border-2 border-blue-500"></div>
            </div>
        </header>
        
        <div class="p-8">
            @yield('content')
        </div>
    </main>

</body>
</html>