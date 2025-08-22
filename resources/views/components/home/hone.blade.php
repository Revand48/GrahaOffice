<section class="relative overflow-hidden text-gray-800 bg-white"
         x-data="{ show: false }"
         x-init="setTimeout(() => show = true, 200)">

  <div class="container relative z-20 px-6 py-24 mx-auto lg:px-12 md:py-32">
    <div class="flex flex-col items-center justify-between gap-10 md:flex-row">

      <div class="w-full mb-10 md:w-1/2 md:mb-0
                  transition-all duration-[1500ms] ease-out"
           :class="show ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-24'">
        <h2 class="mb-6 text-3xl font-bold leading-tight md:text-5xl"><strong>
          <span class="block">Virtual Office</span>
          <span class="inline-block text-transparent bg-gradient-to-r from-yellow-400 to-yellow-600 bg-clip-text">
            Rahasia Tingkatkan Branding
          </span>
          <span class="block">dan Citra Perusahaan Anda</span>
        </strong></h2>

        <p class="max-w-lg mb-8 text-lg text-black/80">
          Solusi profesional untuk bisnis modern. Dapatkan alamat prestisius, ruang meeting lengkap,
          dan kesan korporat yang kuat tanpa perlu sewa kantor fisik penuh.
        </p>

        <div class="flex flex-col gap-4 sm:flex-row">
          <a
            href="#layanan"
            class="relative w-full px-8 py-4 overflow-hidden font-semibold text-center text-white transition-all duration-300 transform rounded-full shadow-lg sm:w-auto bg-gradient-to-r from-yellow-400 to-yellow-500 hover:from-yellow-500 hover:to-yellow-600 hover:shadow-xl hover:scale-105 group"
          >
            <span class="relative z-10">Lihat Layanan</span>
            <svg
              class="inline-block w-5 h-5 ml-2 transition-transform group-hover:translate-x-1"
              fill="none" stroke="currentColor" viewBox="0 0 24 24"
            >
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13 7l5 5m0 0l-5 5m5-5H6" />
            </svg>
            <div class="absolute inset-0 transition-opacity rounded-full opacity-50 bg-gradient-to-r from-yellow-400 to-yellow-600 blur-md group-hover:opacity-75"></div>
          </a>
        </div>
      </div>

      <div class="relative flex items-center justify-center w-full md:w-2/5
                  transition-opacity duration-[7000ms] ease-out delay-500"
           :class="show ? 'opacity-100' : 'opacity-0'">

        <div class="relative z-20 group">
          <img
            src="{{ asset('icvektor/pekerja.png') }}"
            alt="Pekerja Kantoran"
            class="h-auto transition-transform duration-500 w-96 drop-shadow-2xl group-hover:scale-110"
          />
        </div>

        <div class="absolute inset-0 z-10 pointer-events-none">
          @foreach(['meeting.png', 'building.png', 'wifi.png', 'desk.png', 'view.png'] as $index => $icon)
            <img
              src="{{ asset('icvektor/' . $icon) }}"
              alt=""
              class="absolute w-14 h-14 opacity-70 animate-float transition-opacity duration-[1500ms] delay-700"
              :class="show ? 'opacity-70' : 'opacity-0'"
              style="
                {{ [
                  'top: -20px; left: 20%;',
                  'top: -20px; right: 20%;',
                  'bottom: -20px; left: 15%;',
                  'bottom: -20px; right: 15%;',
                  'top: 40%; right: -25px;'
                ][$index] }}
                animation-delay: {{ $index * 0.5 }}s;
                animation-duration: {{ 6 + $index }}s;
              "
            >
          @endforeach
        </div>

      </div>

    </div>
  </div>
</section>

<!-- Floating Icons Animation -->
<style>
  @keyframes float {
    0%   { transform: translateY(0) rotate(0deg); }
    50%  { transform: translateY(-15px) rotate(5deg); }
    100% { transform: translateY(0) rotate(0deg); }
  }
  .animate-float { animation: float infinite ease-in-out; }
</style>
