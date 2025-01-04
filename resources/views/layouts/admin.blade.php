<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ikatan Mahasiswa Arosbaya</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex">

    @include('components.sidebar')

    <div class="flex-grow min-h-screen ml-64 p-4">
        <main class="p-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
