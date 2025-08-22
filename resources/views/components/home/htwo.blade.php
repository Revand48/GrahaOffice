<section
    class="py-12 overflow-hidden bg-yellow-400 sm:py-16 lg:py-20"
    x-data="{ show: false }"
    x-init="
        const observer = new IntersectionObserver(
            ([entry]) => {
                if (entry.isIntersecting) {
                    show = true;
                    observer.disconnect();
                }
            },
            { threshold: 0.2 }
        );
        observer.observe($el);
    "
>
  <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">

    <div class="text-center transition-all duration-[1500ms] ease-out transform"
         :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 -translate-y-10'">
      <h2 class="text-3xl font-bold leading-tight font-pj sm:text-4xl xl:text-5xl">
        <span class="inline-block text-transparent bg-gradient-to-r from-white to-gray-200 bg-clip-text">Mengapa</span>
        <span class="inline-block text-transparent bg-gradient-to-r from-white to-gray-200 bg-clip-text"> Sewa Kantor Di </span>
        <span class="inline-block text-transparent bg-gradient-to-r from-white to-gray-200 bg-clip-text">GrahaOffice?</span>
      </h2>
      <p class="mt-4 text-base leading-7 text-white sm:mt-6 font-pj">
        Semua kebutuhan bisnis Anda dalam tempat ini
      </p>
    </div>

    <div class="grid grid-cols-1 gap-6 mt-10 sm:mt-14 sm:grid-cols-2 lg:grid-cols-3">
      <template x-for="(card, index) in [
        { icon: `<path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M20 8l-8 5-8-5v10h16V8z'/><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M12 22V12'/>`, title: 'Penanganan Surat Menyurat', desc: 'Kolega Bisnis atau Klien Anda bebas kirim Surat/Paket ke alamat perusahaan. Notifikasi diinfokan by email/sms/wa dan Anda bebas ambil kapan saja.' },
        { icon: `<path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z'/><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M15 11a3 3 0 11-6 0 3 3 0 016 0z'/>`, title: 'Lokasi Bisnis Prestisius', desc: 'Alamat bisnis prestisius, bergengsi dan sangat strategis di tengah kota Surabaya. Dapat digunakan untuk domisili resmi perusahaan sehingga lebih Profesional.' },
        { icon: `<path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z'/>`, title: 'Ruang Kerja Nyaman', desc: 'View pegunungan selatan Surabaya ditambah fasilitas pendukung lainnya membuat Graha Office sangat ideal untuk Produktivitas Bisnis Anda.' },
        { icon: `<path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z'/>`, title: 'Resepsionis Profesional', desc: 'Resepsionis Profesional siap membantu Anda mulai dari menyapa klien, menerima dokumen masuk, dan memberikan notifikasi kepada Anda.' },
        { icon: `<path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z'/>`, title: 'Paket Lengkap VO + Legalitas', desc: 'Tersedia Paket Lengkap. Anda tinggal terima beres untuk sewa virtual office sekaligus pembuatan legalitas PT atau CV dengan alamat bisnis pristerius.' },
        { icon: `<path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z'/>`, title: 'Pembayaran Fleksibel', desc: 'Membayar hanya yang Anda gunakan. Tanpa Deposit, Tanpa Setup Fee, Tanpa Minimum Kontrak. Anda bisa lebih fokus tingkatkan omset bisnis.' }
      ]" :key="index">
        <div class="flex flex-col items-center p-5 transition-all duration-[2000ms] ease-out bg-white rounded-lg shadow-md hover:scale-105 hover:shadow-white/30 hover:shadow-lg hover:-translate-y-1"
             :class="show
               ? 'opacity-100 translate-x-0'
               : (index % 2 === 0 ? 'opacity-0 -translate-x-20' : 'opacity-0 translate-x-20')"
             :style="`transition-delay: ${500 + index * 300}ms;`"
        >
          <svg class="w-10 h-10 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
               x-html="card.icon">
          </svg>
          <h3 class="mt-4 text-base font-bold text-black font-pj" x-text="card.title"></h3>
          <p class="mt-2 text-sm text-center text-gray-600 font-pj" x-text="card.desc"></p>
        </div>
      </template>
    </div>
  </div>
</section>
