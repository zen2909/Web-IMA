<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ikatan Mahasiswa Arosbaya</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('components.navbar')

    <div class="min-h-screen flex flex-col">
        <main class="flex-grow">
            @yield('content')
        </main>

        @include('components.footer-sejarah')
    </div>
</body>
</html>
