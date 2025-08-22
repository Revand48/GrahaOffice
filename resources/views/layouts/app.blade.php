<!DOCTYPE html>
<html lang="id" class="scroll-smooth" >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'RentSpace')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="dark font-sans antialiased bg-gray-50" >

    <!-- NAVBAR -->
    @include('components.navbar')

    <main>
        @yield('content')
    </main>

    <!-- Alpine CDN (bisa diganti build jika sudah di-bundle) -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>

    <!-- FOOTER -->
    @include('components.footer')

</body>
</html>
