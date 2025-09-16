<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-50">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'News Management')</title>
    @vite(['resources/css/app.css'])
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.13.3/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @stack('styles')
    <style>
        [x-cloak] { display: none !important; }

        .fade-in {
            animation: fadeIn 0.3s ease-in-out;
        }

        .slide-up {
            animation: slideUp 0.2s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideUp {
            from { transform: translateY(10px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
    </style>
</head>
<body class="h-full">
    <header
    class="fixed top-0 left-0 right-0 z-40 bg-white border-b border-yellow-100 h-16 flex items-center px-4 shadow-sm cursor-pointer"
    onclick="window.location='{{ route('admin.dashboard') }}'"
>
    <button @click.stop="sidebarOpen = !sidebarOpen" class="lg:hidden text-gray-600 mr-2">
        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
    </button>
    <h1 class="text-lg font-bold">
        GrahaOffice | <span class="text-yellow-500">Dashboard</span>
    </h1>
    <div class="ml-auto flex items-center justify-center w-10 h-10 bg-yellow-500 rounded-full font-bold text-white">
        A
    </div>
</header>

    <main>
        @if(session('success'))
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4">
                <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg fade-in">
                    <i class="fas fa-check-circle mr-2"></i>
                    {{ session('success') }}
                </div>
            </div>
        @endif

        @yield('content')
    </main>

    <footer class="bg-white border-t border-gray-200 mt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <p class="text-center text-gray-600">
                &copy; 2025 Dashboard | Graha Office. All rights reserved.
            </p>
        </div>
    </footer>
</body>
</html>
