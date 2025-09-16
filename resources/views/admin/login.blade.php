<!doctype html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login – Dashboard Admin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Tailwind 4 CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Overlay kuning */
    .bg-overlay {
      background: linear-gradient(135deg, rgba(253, 224, 71, .75), rgba(253, 224, 71, .55));
    }
    /* Animasi smooth */
    @keyframes fadeIn { from { opacity:0; transform:translateY(20px); } to { opacity:1; transform:translateY(0); } }
    .animate-fadeIn { animation:fadeIn .7s ease-out forwards; }
  </style>
</head>

<body class="antialiased text-gray-800">
  <section class="relative h-screen flex items-center justify-center overflow-hidden">
    <!-- Background foto lokal -->
    <img src="{{ asset('images/bgadmin.jpg') }}" alt="Office" class="absolute inset-0 w-full h-full object-cover">
    <!-- Overlay kuning -->
    <div class="absolute inset-0 bg-overlay"></div>

    <!-- Card login -->
    <div class="relative z-10 w-full max-w-sm bg-white/90 backdrop-blur rounded-2xl shadow-xl p-8 animate-fadeIn">
      <!-- Icon SVG Dashboard -->
      <!-- Icon SVG User Admin (kuning) -->
        <div class="flex justify-center mb-6">
        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24" fill="#facc15">
            <path d="M12 14v2a6 6 0 0 0-6 6H4a8 8 0 0 1 8-8Zm0-1c-3.315 0-6-2.685-6-6s2.685-6 6-6s6 2.685 6 6s-2.685 6-6 6Zm0-2c2.21 0 4-1.79 4-4s-1.79-4-4-4s-4 1.79-4 4s1.79 4 4 4Zm9 6h1v5h-8v-5h1v-1a3 3 0 1 1 6 0v1Zm-2 0v-1a1 1 0 1 0-2 0v1h2Z"/>
        </svg>
        </div>

      <h1 class="text-center text-xl font-bold text-gray-700 mb-6">Dashboard Admin</h1>

      <form action="{{ url('/admin/loginDX') }}" method="POST">
        @csrf
        <!-- Username -->
        <div class="mb-5">
          <label for="username" class="block text-sm font-medium text-gray-600 mb-2">Username</label>
          <input id="username" name="username" type="text" required
                 class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-yellow-400 transition">
        </div>

        <!-- Password -->
        <div class="mb-6">
          <label for="password" class="block text-sm font-medium text-gray-600 mb-2">Password</label>
          <input id="password" name="password" type="password" required
                 class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-yellow-400 transition">
        </div>

        <!-- Submit -->
        <button type="submit"
                class="w-full bg-yellow-400 hover:bg-yellow-500 text-white font-semibold py-2.5 rounded-lg shadow hover:shadow-lg transition transform hover:-translate-y-0.5">
          Masuk
        </button>
      </form>
    </div>
  </section>
</body>
</html>
