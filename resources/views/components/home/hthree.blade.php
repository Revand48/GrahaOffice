<section
  id="layanan"
  class="py-16 bg-gray-50"
  x-data="serviceAnimation()"
  x-init="init()"
>
  <div class="px-6 mx-auto max-w-7xl lg:px-8">
    <div class="text-center mb-13 transition-all duration-[1500ms] ease-out transform"
         :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 -translate-y-10'">
      <h2 class="text-3xl font-bold leading-tight font-pj sm:text-4xl xl:text-5xl">
        <span class="inline-block text-transparent bg-gradient-to-r from-yellow-400 to-yellow-600 bg-clip-text animate-pulse">Pilih</span>
        <span class="text-gray-900"> Layanan </span>
        <span class="inline-block text-transparent bg-gradient-to-r from-yellow-400 to-yellow-600 bg-clip-text animate-pulse">Kami</span>
      </h2>
      <p class="mt-4 text-base leading-7 text-gray-600 sm:mt-6">
            Temukan solusi kantor dan pendirian usaha yang fleksibel, profesional, dan terjangkau
        untuk mendukung pertumbuhan bisnis Anda.
        </p>
    </div>

    <div class="grid grid-cols-1 gap-10 md:grid-cols-2 lg:grid-cols-3">
      @foreach([
        [
          'title' => 'Virtual Office',
          'description' => 'Layanan alamat kantor profesional tanpa harus menyewa ruang fisik.',
          'features' => [
            'Alamat bisnis di lokasi strategis',
            'Penerimaan surat & paket',
            'Nomor telepon khusus perusahaan',
            'Layanan resepsionis profesional',
            'Akses meeting room dengan diskon'
          ],
          'route' => route('layanan.virtualo'),
        ],
        [
          'title' => 'Private Office',
          'description' => 'Ruang kantor pribadi yang aman, eksklusif, dan siap pakai.',
          'features' => [
            'Ruang pribadi ber-AC dan terkunci',
            'Furnitur lengkap (meja, kursi, lemari)',
            'Listrik & internet fiber optic',
            'Keamanan 24 jam & CCTV',
            'Akses 24/7'
          ],
          'route' => route('layanan.privateo'),
        ],
        [
          'title' => 'Shared Office',
          'description' => 'Kolaborasi produktif di ruang kerja bersama yang nyaman.',
          'features' => [
            'Meja kerja di ruang komunal',
            'Internet cepat & listrik inklusif',
            'Kopi & air mineral gratis',
            'Area lounge & pantry',
            'Komunitas profesional'
          ],
          'route' => route('layanan.sharedo'),
        ],
        [
          'title' => 'Ruang Meeting & Training',
          'description' => 'Fasilitas ruang pertemuan modern untuk rapat atau pelatihan.',
          'features' => [
            'Ruang dengan kapasitas 5–30 orang',
            'Proyektor & whiteboard',
            'Audio & video conference',
            'AC & pencahayaan profesional',
            'Layanan catering (opsional)'
          ],
          'route' => route('layanan.virtualo'),
        ],
        [
          'title' => 'Pembuatan PT & CV',
          'description' => 'Pendirian badan usaha secara legal dengan proses cepat dan mudah.',
          'features' => [
            'Dokumen lengkap (AO, ART, SK Kemenkumham)',
            'Legalitas resmi Kemenkumham',
            'NPWP & SKT perusahaan',
            'Pendampingan notaris',
            'Proses 3–7 hari kerja'
          ],
          'route' => route('layanan.jasapt'),
        ],
        [
          'title' => 'Paket Lengkap: Virtual Office + PT/CV',
          'description' => 'Solusi lengkap untuk startup: alamat kantor & pendirian badan usaha.',
          'features' => [
            'Pendirian PT/CV lengkap',
            'Alamat kantor profesional',
            'Nomor telepon & layanan resepsionis',
            'Email bisnis @namaperusahaan.com',
            'Diskon akses fasilitas lainnya'
          ],
          'route' => route('layanan.pakethemat'),
        ]
      ] as $index => $service)
        <div
          class="relative overflow-hidden transition-all duration-[1500ms] border border-yellow-100 shadow-md group rounded-2xl bg-gradient-to-br from-yellow-25 via-yellow-50 to-white shadow-yellow-200/60 hover:shadow-lg hover:shadow-yellow-200/80"
          :class="show
            ? 'opacity-100 translate-x-0'
            : indexIsOdd({{ $index }})
            ? 'opacity-0 translate-x-16'
            : 'opacity-0 -translate-x-16'"
          style="transition-delay: {{ 200 * $index }}ms"
          x-bind:data-index="{{ $index }}"
        >
          <div class="flex flex-col h-full p-8">

            <h3 class="mb-4 text-2xl font-bold text-center text-gray-800">{{ $service['title'] }}</h3>

            <p class="mb-6 text-sm leading-relaxed text-center text-gray-600">{{ $service['description'] }}</p>

            <ul class="flex-1 mb-8 space-y-2">
              @foreach($service['features'] as $feature)
                <li class="flex items-center text-sm text-gray-700">
                  <svg class="flex-shrink-0 w-4 h-4 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                  </svg>
                  <span>{{ $feature }}</span>
                </li>
              @endforeach
            </ul>

            <div class="text-center">
              <a href="{{ $service['route'] }}"
                class="inline-block px-6 py-3 font-semibold text-gray-800 transition-all duration-300 border border-yellow-200 rounded-lg shadow-sm opacity-0 bg-white/80 backdrop-blur-sm hover:bg-white hover:shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-300 group-hover:opacity-100"
                x-bind:class="show ? 'opacity-100' : 'opacity-0'">
                Lihat Detail
              </a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>

  <script>
    function serviceAnimation() {
      return {
        show: false,
        init() {
          // Cek apakah sudah terlihat di viewport pakai IntersectionObserver
          const observer = new IntersectionObserver(
            ([entry]) => {
              if (entry.isIntersecting) {
                this.show = true;
                observer.disconnect(); // hanya sekali saja
              }
            },
            {
              root: null,
              threshold: 0.3, // 30% section terlihat
            }
          );
          observer.observe(document.getElementById('layanan'));
        },
        indexIsOdd(index) {
          // untuk ngasih animasi masuk kanan/ kiri selang-seling
          return index % 2 === 1;
        }
      };
    }
  </script>
</section>
