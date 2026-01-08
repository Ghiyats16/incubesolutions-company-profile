<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <title>IncubeSolutions</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-900 text-white">

    {{-- NAVBAR HANYA DI SINI --}}
    @include('layouts.navbar')

    <main class="pt-24">
        @yield('content')
    </main>


</body>

</html>