<!DOCTYPE html>
<html lang="id" class="scroll-smooth" x-data="{ darkMode: localStorage.getItem('theme') === 'dark' }"
      x-init="$watch('darkMode', val => {
          document.documentElement.classList.toggle('dark', val);
          localStorage.setItem('theme', val ? 'dark' : 'light');
      });"
      x-bind:class="darkMode ? 'dark' : ''">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'RentSpace')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>[x-cloak] { display: none !important; }</style>
</head>
<body class="font-sans antialiased bg-white dark:bg-slate-900 dark:text-slate-100">

    <!-- NAVBAR -->
    @include('components.navbar')

    <main>
        @yield('content')
    </main>

    <!-- FOOTER -->
    @include('components.footer')

    <!-- Alpine -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>
