<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin | PAUD AL-BAROKAH</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Animasi Muncul Kartu */
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-up { animation: fadeUp 0.6s ease-out forwards; }

        /* Animasi Bola Melayang (Blobs) */
        @keyframes blob {
            0% { transform: translate(0px, 0px) scale(1); }
            33% { transform: translate(30px, -50px) scale(1.1); }
            66% { transform: translate(-20px, 20px) scale(0.9); }
            100% { transform: translate(0px, 0px) scale(1); }
        }
        .animate-blob { animation: blob 7s infinite; }
        .animation-delay-2000 { animation-delay: 2s; }
        .animation-delay-4000 { animation-delay: 4s; }
    </style>
</head>
<body class="bg-slate-50 min-h-screen flex items-center justify-center p-6 relative overflow-hidden">

    <div class="absolute w-full h-full overflow-hidden z-0">
        <div class="absolute top-10 left-10 w-72 h-72 bg-rose-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob"></div>
        <div class="absolute top-0 right-10 w-72 h-72 bg-indigo-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000"></div>
        <div class="absolute -bottom-8 left-20 w-72 h-72 bg-teal-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-4000"></div>
    </div>

    <div class="animate-fade-up relative z-10 bg-white/80 backdrop-blur-lg border border-white/50 rounded-3xl shadow-2xl overflow-hidden w-full max-w-4xl flex flex-col md:flex-row">
        
        <div class="bg-indigo-50/50 p-10 hidden md:flex items-center justify-center w-1/2">
            <h1 class="text-4xl font-black text-indigo-900 leading-tight">Selamat Datang <br> Kembali!</h1>
        </div>

        <div class="p-10 w-full md:w-1/2">
            <h2 class="text-3xl font-bold text-indigo-900 mb-2">Login Admin</h2>
            <p class="text-slate-500 mb-8">Masuk untuk mengakses dashboard admin</p>

            <form action="{{ route('login') }}" method="POST" class="space-y-5">
                @csrf
                <div>
                    <input type="email" name="email" required placeholder="admin@gmail.com" 
                        class="w-full px-4 py-3 rounded-xl bg-white border border-indigo-100 focus:ring-2 focus:ring-indigo-400 outline-none transition-all duration-300">
                </div>
                
                <div>
                    <input type="password" name="password" required placeholder="••••••••••••" 
                        class="w-full px-4 py-3 rounded-xl bg-white border border-indigo-100 focus:ring-2 focus:ring-indigo-400 outline-none transition-all duration-300">
                </div>

                <div class="flex items-center justify-between text-sm">
                    <label class="flex items-center gap-2 text-slate-600">
                        <input type="checkbox" name="remember" class="rounded text-indigo-500"> Ingat saya
                    </label>
                    <a href="#" class="text-indigo-600 hover:underline">Lupa Password?</a>
                </div>

                <button type="submit" 
                    class="w-full bg-indigo-600 text-white py-3 rounded-xl font-semibold hover:bg-indigo-700 hover:scale-[1.02] active:scale-[0.98] transition-all duration-300 shadow-lg shadow-indigo-200">
                    Masuk
                </button>
            </form>
        </div>
    </div>

</body>
</html>