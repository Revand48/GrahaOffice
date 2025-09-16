
<section class="dark:bg-slate-800 dark:text-slate-200py-14 bg-gradient-section">
  <div class="px-6 mx-auto max-w-7xl">

    <div
      data-animate="judul"
      class="text-center mb-13 transition-all duration-[2000ms] ease-out opacity-0 -translate-y-10"
    >
      <h2 class="text-3xl font-bold leading-tight font-pj sm:text-4xl xl:text-5xl">
        <span class="inline-block text-transparent bg-gradient-to-r from-yellow-400 to-yellow-600 bg-clip-text animate-pulse">Artikel</span>
        <span class="text-gray-900 dark:text-slate-200"> & </span>
        <span class="inline-block text-transparent bg-gradient-to-r from-yellow-400 to-yellow-600 bg-clip-text animate-pulse">Berita</span>
      </h2>
      <p class="mt-4 text-base leading-7 text-gray-600 dark:text-slate-200 sm:mt-6">
        Dapatkan informasi terbaru dan artikel menarik dari berbagai sumber terpercaya
      </p>
    </div>

    <div class="grid gap-10 md:grid-cols-3">

      <div
        data-animate="card1"
        class="relative flex flex-col overflow-hidden transition-all duration-[2000ms] ease-out bg-white border border-transparent rounded-lg opacity-0 -translate-x-full"
      >
        <img src="https://grahaoffice.com/wp-content/uploads/2025/08/tempImagewucVQm-980x653.jpeg " alt="Berita 1" class="object-cover w-full h-56 rounded-t-lg">
        <div class="flex flex-col flex-grow p-6">
          <h3 class="dark:text-slate-800 text-lg font-semibold mb-1 h-[56px] overflow-hidden">Kerja Fleksibel, Produktivitas Maksimal: Begini Caranya!</h3>
          <p class="mb-3 text-sm text-gray-500">Sumber: grahaoffice.com</p>
          <p class="flex-grow mb-6 text-gray-600 line-clamp-5">
            Banyak orang yang menginginkan kerja fleksibel, karena kerja yang fleksibel menawarkan kebebasan untuk bekerja dari mana saja, kapan saja...
          </p>
          <a href="https://grahaoffice.com/blog/kerja-fleksibel-produktivitas/ " target="_blank" class="inline-block font-semibold text-yellow-600 hover:underline">
            Baca Selengkapnya →
          </a>
        </div>
      </div>

      <div
        data-animate="card2"
        class="relative flex flex-col overflow-hidden transition-all duration-[2000ms] ease-out bg-white border border-transparent rounded-lg opacity-0 translate-y-full"
      >
        <img src="https://grahaoffice.com/wp-content/uploads/2025/08/group-people-working-out-business-plan-office.jpg " alt="Berita 2" class="object-cover w-full h-56 rounded-t-lg">
        <div class="flex flex-col flex-grow p-6">
          <h3 class="dark:text-slate-800 text-lg font-semibold mb-1 h-[56px] overflow-hidden">Kesan Pertama yang Profesional? Mulai dari Virtual Office Graha Office Surabaya</h3>
          <p class="mb-3 text-sm text-gray-500">Sumber: grahaoffice.com</p>
          <p class="flex-grow mb-6 text-gray-600 line-clamp-5">
            Di era digital saat ini, banyak pelaku bisnis terutama startup, UMKM, dan freelancer mencari cara untuk tetap tampil profesional...
          </p>
          <a href="https://grahaoffice.com/blog/kesan-profesional-mulai-dari-virtual-office/ " target="_blank" class="inline-block font-semibold text-yellow-600 hover:underline">
            Baca Selengkapnya →
          </a>
        </div>
      </div>

      <div
        data-animate="card3"
        class="relative flex flex-col overflow-hidden transition-all duration-[2000ms] ease-out bg-white border border-transparent rounded-lg opacity-0 translate-x-full"
      >
        <img src="https://grahaoffice.com/wp-content/uploads/2025/08/empty-room-with-chairs-desks-1-980x654.jpg " alt="Berita 3" class="object-cover w-full h-56 rounded-t-lg">
        <div class="flex flex-col flex-grow p-6">
          <h3 class="dark:text-slate-800 text-lg font-semibold mb-1 h-[56px] overflow-hidden">Keuntungan Sewa Virtual Office di Graha Office Surabaya untuk Pebisnis Modern</h3>
          <p class="mb-3 text-sm text-gray-500">Sumber: grahaoffice.com</p>
          <p class="flex-grow mb-6 text-gray-600 line-clamp-5">
            Di era digital dan perkembangan bisnis yang begitu pesat, pemilihan tempat kantor tidak lagi harus terpaku pada gedung fisik yang mahal...
          </p>
          <a href="https://grahaoffice.com/blog/keuntungan-sewa-virtual-office-surabaya " target="_blank" class="inline-block font-semibold text-yellow-600 hover:underline">
            Baca Selengkapnya →
          </a>
        </div>
      </div>

    </div>

    <div class="mt-10 text-right">
      <a href="/blog" class="relative inline-block text-lg font-bold tracking-wide text-yellow-500 group">
        Lihat Semua Artikel →
        <span class="absolute left-0 bottom-0 w-full h-[2px] bg-yellow-500 scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-300"></span>
      </a>
    </div>
  </div>
</section>

<style>
  .bg-gradient-section {
    background: radial-gradient(
      circle,
      rgba(250, 204, 21, 0.4) 0%,
      rgba(255, 255, 255, 0) 70%
    );
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            // Semua elemen langsung dijalankan bersamaan
            document.querySelectorAll('[data-animate]').forEach(el => {
              el.classList.remove('opacity-0', '-translate-y-10', '-translate-x-full', 'translate-y-full', 'translate-x-full');
              el.classList.add('opacity-100', 'translate-y-0', 'translate-x-0');
            });
            observer.disconnect(); // Hentikan setelah sekali trigger
          }
        });
      },
      { threshold: 0.65 }
    );

    observer.observe(document.querySelector('[data-animate="judul"]'));
  });
</script>
