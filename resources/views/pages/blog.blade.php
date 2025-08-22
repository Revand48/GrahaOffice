@extends('layouts.app')

@section('content')

<section class="relative py-16 bg-white isolate">
  <div class="absolute inset-0 overflow-hidden -z-10">
    <div class="absolute top-[10%] left-[8%] h-20 w-20 rotate-[-12deg] rounded-md bg-yellow-300/70 shadow-lg"></div>
    <div class="absolute bottom-[15%] right-[12%] h-16 w-16 rotate-[10deg] rounded-md bg-yellow-200/60 shadow-md"></div>
    <div class="absolute top-[40%] right-[20%] h-12 w-12 rotate-[5deg] rounded-md bg-yellow-400/50 shadow-sm"></div>
    <div class="absolute top-[-4rem] left-[-2rem] h-48 w-48 rounded-full bg-yellow-400/20 blur-3xl"></div>
    <div class="absolute bottom-[-2rem] right-[-4rem] h-40 w-40 rounded-full bg-yellow-300/20 blur-3xl"></div>
    <div class="absolute left-0 w-full h-px top-1/2 bg-yellow-200/30"></div>
    <div class="absolute left-0 w-full h-px top-1/3 bg-yellow-100/20"></div>
  </div>

  <div class="relative max-w-4xl px-4 mx-auto text-center">
    <h1 class="text-5xl font-bold tracking-tight sm:text-6xl md:text-7xl">
      <span class="inline-block text-transparent bg-gradient-to-r from-yellow-400 to-yellow-600 bg-clip-text animate-pulse">
        Blog
      </span>
    </h1>
  </div>
</section>

<div class="px-4 py-8 text-black bg-white lg:px-12" x-data="{
    articles: [
        {
            title: 'Strategi Jitu Memulai Usaha Sendiri: 4 Langkah Awal Memulai Bisnis',
            date: '2025-08-12',
            source: 'go-work.com',
            image: 'https://go-work-web.storage.googleapis.com/post/574/thumbnail/high-angle-business-man-holding-tablet_23-2150103591.jpg',
            link: 'https://go-work.com/id/blog/strategi-jitu-memulai-usaha-sendiri-4-langkah-awal-memulai-bisnis',
            description: 'Memulai usaha dari nol adalah impian banyak orang. Namun, seringkali kita bingung harus mulai dari mana. Prosesnya memang terlihat rumit, mulai dari'
        },
        {
            title: 'Kerja Fleksibel, Produktivitas Maksimal: Begini Caranya!',
            date: '2025-08-11',
            source: 'grahaoffice.com',
            image: 'https://grahaoffice.com/wp-content/uploads/2025/08/tempImagewucVQm-980x653.jpeg',
            link: 'https://grahaoffice.com/blog/kerja-fleksibel-produktivitas/',
            description: 'Banyak orang yang menginginkan kerja fleksibel, karena kerja yang fleksibel menawarkan kebebasan untuk bekerja dari mana saja, kapan saja. Namun, di balik'
        },
        {
            title: 'Pilih Serviced Office atau Kantor Konvensional? Ini Panduan untuk Buat Keputusan Tepat',
            date: '2025-08-08',
            source: 'go-work.com',
            image: 'https://go-work-web.storage.googleapis.com/post/570/thumbnail/mcc.webp',
            link: 'https://go-work.com/id/blog/pilih-serviced-office-atau-kantor-konvensional-ini-panduan-untuk-buat-keputusan-tepat',
            description: 'Dalam dunia bisnis modern, memilih tipe ruang kantor yang tepat bisa berdampak besar pada operasional, efisiensi, hingga pengeluaran perusahaan. Dua pilihan yang paling'
        },
        {
            title: 'Kesan Pertama yang Profesional? Mulai dari Virtual Office Graha Office Surabaya',
            date: '2025-08-08',
            source: 'grahaoffice.com',
            image: 'https://grahaoffice.com/wp-content/uploads/2025/08/group-people-working-out-business-plan-office.jpg',
            link: 'https://grahaoffice.com/blog/kesan-profesional-mulai-dari-virtual-office/',
            description: 'Di era digital saat ini, banyak pelaku bisnis terutama startup, UMKM, dan freelancer mencari cara untuk tetap tampil profesional tanpa harus'
        },
        {
            title: 'Strategi Sewa Kantor Surabaya: Merancang Ruang Kerja Custom yang Efektif dan Profesional',
            date: '2025-08-07',
            source: 'go-work.com',
            image: 'https://go-work-web.storage.googleapis.com/post/568/thumbnail/mcc-enterprise-edited-%281%29.webp',
            link: 'https://go-work.com/id/blog/strategi-sewa-kantor-surabaya-merancang-ruang-kerja-custom-yang-efektif-dan-profesional',
            description: 'Setiap perusahaan memiliki karakter dan budaya kerja yang berbeda. Inilah mengapa merancang custom office space atau kebebasan mendesain'
        },
        {
            title: 'Keuntungan Sewa Virtual Office di Graha Office Surabaya untuk Pebisnis Modern',
            date: '2025-08-07',
            source: 'grahaoffice.com',
            image: 'https://grahaoffice.com/wp-content/uploads/2025/08/empty-room-with-chairs-desks-1-980x654.jpg',
            link: 'https://grahaoffice.com/blog/keuntungan-sewa-virtual-office-surabaya/',
            description: 'Di era digital dan perkembangan bisnis yang begitu pesat, pemilihan tempat kantor tidak lagi harus terpaku pada gedung fisik yang mahal dan terbatas ruangannya.'
        },
        {
            title: '5 Panduan Memilih Ruang Kerja yang Ergonomis dan Modern',
            date: '2025-07-31',
            source: 'go-work.com',
            image: 'https://go-work-web.storage.googleapis.com/post/559/thumbnail/sml-surabaya-coworking-2.webp',
            link: 'https://go-work.com/id/blog/5-panduan-memilih-ruang-kerja-yang-ergonomis-dan-modern',
            description: 'Setiap perusahaan memiliki karakter dan budaya kerja yang berbeda. Inilah mengapa merancang custom office space atau kebebasan mendesain'
        },
        {
            title: '5 Tips Meningkatkan Brand Awareness Bisnis',
            date: '2023-12-01',
            source: 'grahaoffice.com',
            image: 'https://grahaoffice.com/wp-content/uploads/2023/12/5-Tips-Meningkatkan-Brand-Awareness-Bisnis--980x551.png',
            link: 'https://grahaoffice.com/blog/5-tips-meningkatkan-brand-awareness-bisnis/',
            description: 'Brand awareness adalah tingkat kesadaran dan pemahaman yang dimiliki oleh target audiens terhadap suatu merek. Brand awareness yang'
        }
    ],
    searchQuery: '',
    filteredArticles() {
        return this.articles.filter(article =>
            this.searchQuery === '' || article.title.toLowerCase().includes(this.searchQuery.toLowerCase())
        );
    }
}">
    <div class="mx-auto max-w-7xl">
        <h1 class="pb-2 mb-6 text-3xl font-bold border-b border-yellow-400">Berita & Artikel</h1>
        <div class="flex flex-col gap-6 lg:flex-row">

            <div class="w-full space-y-6 lg:w-3/4" x-data="{ page: 1, perPage: 5 }">
                <template x-for="(article, index) in filteredArticles().slice((page - 1) * perPage, page * perPage)" :key="index">
                    <div class="overflow-hidden bg-white border border-white rounded-lg shadow-md shadow-yellow-200 animate-fade-in">
                        <img :src="article.image" alt="" class="object-cover w-full aspect-video">
                        <div class="p-4 space-y-2">

                            <p class="flex items-center justify-between text-sm text-gray-500">
                                <span x-text="article.date"></span>
                                <span x-text="article.source"></span>
                            </p>

                            <h2 class="text-xl font-semibold" x-text="article.title"></h2>
                            <p class="text-sm text-gray-600">
                                <span x-text="article.description"></span>
                                <a :href="article.link" target="_blank" class="ml-1 font-medium text-blue-600">Baca Selengkapnya</a>
                            </p>
                            <div class="flex justify-end">
                                <button @click="navigator.clipboard.writeText(article.link)" class="text-sm text-yellow-600 hover:underline">Copy Link</button>
                            </div>
                        </div>
                    </div>
                </template>

                <div class="flex justify-center gap-2 mt-4">
                    <button class="px-3 py-1 border border-white shadow-sm shadow-yellow-100" @click="page = 1" :disabled="page === 1">Awal</button>
                    <button class="px-3 py-1 border border-white shadow-sm shadow-yellow-100" @click="page--" :disabled="page === 1">Sebelumnya</button>
                    <template x-for="i in Math.ceil(filteredArticles().length / perPage)">
                        <button
                            class="px-3 py-1 border border-white shadow-sm shadow-yellow-100"
                            :class="{ 'bg-yellow-300 text-white': i === page }"
                            @click="page = i"
                            x-text="i"
                        ></button>
                    </template>
                    <button
                        class="px-3 py-1 border border-white shadow-sm shadow-yellow-100"
                        @click="page++"
                        :disabled="page === Math.ceil(filteredArticles().length / perPage)"
                    >Berikutnya</button>
                </div>
            </div>

            <div class="w-full space-y-6 lg:w-1/4">

                <div class="p-4 bg-white border border-transparent rounded-lg shadow-md shadow-yellow-100">
                    <h3 class="mb-2 text-lg font-semibold">Pencarian</h3>
                    <input type="text" class="w-full px-3 py-1 text-black border border-gray-300 rounded-full focus:border-gray-300 focus:ring-0" placeholder="Cari..." x-model="searchQuery">
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
