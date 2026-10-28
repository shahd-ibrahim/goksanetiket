<!DOCTYPE html>
<html lang="tr" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yönetici Girişi | Göksan Etiket</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Space+Grotesk:wght@700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>body { font-family: 'Plus Jakarta Sans', sans-serif; }</style>
</head>
<body class="bg-slate-950 text-slate-100 min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <!-- Logo -->
        <div class="text-center mb-8">
            <span class="inline-block bg-gradient-to-r from-sky-500 to-blue-600 text-white font-extrabold text-xl px-4 py-1.5 rounded-xl font-mono shadow-lg shadow-sky-500/25 mb-3">
                GÖKSAN ETİKET
            </span>
            <h1 class="text-2xl font-bold text-white tracking-tight">Yönetim Paneli Girişi</h1>
            <p class="text-xs text-slate-400 mt-1">SEO ve ürün yönetimi için lütfen oturum açın</p>
        </div>

        <!-- Form Card -->
        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-8 shadow-2xl">
            @if($errors->any())
                <div class="mb-5 p-3.5 rounded-xl bg-rose-500/10 border border-rose-500/30 text-rose-400 text-xs">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('admin.login.submit') }}" method="POST" class="space-y-4">
                @csrf

                <div>
                    <label class="block text-xs font-semibold text-slate-300 mb-1.5">E-Posta Adresi</label>
                    <input type="email" name="email" value="{{ old('email', 'admin@goksanetiket.com') }}" required autofocus
                           class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-700 text-white text-sm focus:outline-none focus:border-sky-500 transition-colors">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-300 mb-1.5">Şifre</label>
                    <input type="password" name="password" required
                           class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-700 text-white text-sm focus:outline-none focus:border-sky-500 transition-colors">
                </div>

                <div class="flex items-center justify-between text-xs pt-1">
                    <label class="flex items-center gap-2 text-slate-400 cursor-pointer">
                        <input type="checkbox" name="remember" class="rounded bg-slate-950 border-slate-700 text-sky-500 focus:ring-0">
                        <span>Beni hatırla</span>
                    </label>
                    <span class="text-slate-500">Demo şifre: password</span>
                </div>

                <div class="pt-2">
                    <button type="submit" 
                            class="w-full py-3 rounded-xl bg-gradient-to-r from-sky-500 to-blue-600 hover:from-sky-400 hover:to-blue-500 text-white font-bold text-sm shadow-lg shadow-sky-500/25 transition-all">
                        Güvenli Giriş Yap &rarr;
                    </button>
                </div>
            </form>
        </div>

        <div class="text-center mt-6">
            <a href="{{ route('regional.index') }}" class="text-xs text-slate-500 hover:text-slate-300 transition-colors">
                &larr; Web Sitesine Geri Dön
            </a>
        </div>
    </div>
</body>
</html>
