<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login - IMA Arosbaya</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="min-h-screen bg-slate-50 flex items-center justify-center p-4">
        <div class="w-full max-w-md bg-white rounded-xl shadow-lg outline outline-1 outline-zinc-200 overflow-hidden">
            <!-- Header -->
            <div class="px-6 pt-10 pb-3 flex flex-col items-center gap-1">
                <div class="w-16 py-4 bg-gray-100 rounded-full flex items-center justify-center">
                    <svg class="w-7 h-6 text-green-950" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" />
                    </svg>
                </div>
                <h1 class="text-3xl font-bold font-['Manrope'] text-zinc-900 leading-10">Login Admin</h1>
                <p class="text-neutral-700 text-base font-normal font-['Inter'] leading-6 text-center">
                    Masuk ke sistem manajemen administrasi IMA<br />Arosbaya.
                </p>
            </div>

            <!-- Form -->
            <form method="POST" action="{{ route('login') }}" class="px-6 pb-10 flex flex-col gap-3">
                @csrf

                @if (session('error'))
                    <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg text-sm">
                        {{ session('error') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg text-sm">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif

                <!-- Email/Username -->
                <div class="flex flex-col gap-2">
                    <label
                        class="text-zinc-900 text-xs font-medium font-['JetBrains_Mono'] uppercase leading-3 tracking-wide">
                        Username / Email
                    </label>
                    <div class="relative">
                        <input type="text" name="username" value="{{ old('username') }}"
                            class="w-full pl-10 pr-3 py-3.5 bg-white rounded-lg shadow-sm outline outline-1 outline-zinc-200 focus:outline-green-800 focus:ring-2 focus:ring-green-800/20 transition-all text-neutral-500 text-base font-normal font-['Inter'] placeholder:text-neutral-400"
                            placeholder="admin@ima-arosbaya.org" required autofocus />
                        <div class="absolute left-3 top-1/2 -translate-y-1/2">
                            <svg class="w-5 h-4 text-neutral-500" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M4 4h16a2 2 0 012 2v12a2 2 0 01-2 2H4a2 2 0 01-2-2V6a2 2 0 012-2zm0 2v12h16V6H4zm8 5l8-5H4l8 5z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Password -->
                <div class="flex flex-col gap-2">
                    <label
                        class="text-zinc-900 text-xs font-medium font-['JetBrains_Mono'] uppercase leading-3 tracking-wide">
                        Kata Sandi
                    </label>
                    <div class="relative">
                        <input type="password" name="password"
                            class="w-full pl-10 pr-12 py-3.5 bg-white rounded-lg shadow-sm outline outline-1 outline-zinc-200 focus:outline-green-800 focus:ring-2 focus:ring-green-800/20 transition-all text-neutral-500 text-base font-normal font-['Inter'] placeholder:text-neutral-400"
                            placeholder="Masukkan kata sandi" required />
                        <div class="absolute left-3 top-1/2 -translate-y-1/2">
                            <svg class="w-4 h-5 text-neutral-500" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2C8.13 2 5 5.13 5 9v2c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2V9c0-3.87-3.13-7-7-7zm-2 12v2h4v-2h-4zm-2 4h8v2H8v-2z" />
                            </svg>
                        </div>
                        <button type="button"
                            onclick="document.querySelector('input[name=password]').type = document.querySelector('input[name=password]').type === 'password' ? 'text' : 'password'"
                            class="absolute right-3 top-1/2 -translate-y-1/2 text-neutral-500 hover:text-neutral-700 transition-colors">
                            <svg class="w-5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Remember & Forgot -->
                <div class="py-3 flex justify-between items-center">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="remember"
                            class="w-4 h-4 text-green-800 border-zinc-200 rounded focus:ring-green-800">
                        <span class="text-zinc-900 text-sm font-normal font-['Inter'] leading-5">Ingat saya</span>
                    </label>
                    <a href="#"
                        class="text-green-950 text-sm font-medium font-['Inter'] leading-5 hover:underline">
                        Lupa Kata Sandi?
                    </a>
                </div>

                <!-- Submit -->
                <button type="submit"
                    class="w-full px-4 py-3 bg-green-900 hover:bg-green-800 active:bg-green-950 rounded-lg shadow-sm transition-colors flex items-center justify-center gap-2">
                    <span class="text-white text-xl font-semibold font-['Manrope'] leading-7">Masuk ke Dashboard</span>
                    <svg class="w-3.5 h-3.5 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M5 3l14 9-14 9V3z" />
                    </svg>
                </button>
            </form>

            <!-- Footer -->
            <div class="px-6 py-4 bg-gray-100 border-t border-zinc-200">
                <p class="text-neutral-700 text-sm font-normal font-['Inter'] leading-5 text-center">
                    © 2024 Ikatan Mahasiswa Arosbaya.<br />Academic Stewardship.
                </p>
            </div>
        </div>
    </div>
</body>

</html>
