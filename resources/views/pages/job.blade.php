@extends('layouts.app')
@section('content')

<section class="relative py-16 bg-white isolate">
  <div class="absolute inset-0 overflow-hidden dark:bg-slate-800 -z-10">
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
        Jobs
      </span>
    </h1>
  </div>
</section>

<div class="min-h-screen px-4 py-10 mt-1 dark:bg-slate-800 bg-gray-50 md:px-16">

  <div class="relative p-1 mb-10 transition-all duration-300 ease-out bg-white rounded-lg shadow-sm dark:bg-slate-700 dark:text-slate-200 hover:shadow-md focus-within:shadow-lg">
    <div class="flex items-center gap-3 px-4 py-2">
      <svg class="w-5 h-5 text-gray-400 dark:bg-slate-700flex-shrink-0">
        <path d="M10 2a8 8 0 100 16 8 8 0 000-16zm3.293 11.293L14 14l-1.414-1.414a4 4 0 111.707-1.586zM10 12a2 2 0 100-4 2 2 0 000 4z" fill="currentColor"/>
      </svg>
      <input type="text" id="searchProfession" placeholder="Posisi" class="flex-1 min-w-0 text-gray-700 placeholder-gray-400 transition-colors duration-300 bg-transparent border-b-2 border-transparent focus:outline-none focus:ring-0 focus:border-orange-400" />
      <div class="w-px h-6 bg-gray-200"></div>
      <select id="searchType" class="text-gray-700 transition-colors duration-300 bg-transparent border-b-2 border-transparent cursor-pointer dark:text-slate-400 focus:outline-none focus:ring-0 focus:border-orange-400">
        <option value="">Tipe Pekerjaan</option>
        <option value="internship">Internship</option>
        <option value="full time">Full Time</option>
      </select>
      <button onclick="filterJobs()" class="px-4 py-2 text-white bg-orange-400 rounded shadow hover:bg-orange-500">Cari</button>
      <button onclick="resetJobs()" class="px-4 py-2 text-orange-500 border border-orange-400 rounded shadow hover:bg-orange-50">Tampilkan Semua</button>
    </div>
  </div>


  <div id="jobList" class="space-y-8">

    <div class="p-6 bg-white rounded-lg shadow-md dark:bg-slate-400 dark:text-slate-200" data-profession="digital marketing" data-location="surabaya office" data-type="internship">
      <div class="flex items-center gap-4">
        <div class="p-3 bg-blue-100 rounded-full">
          <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M11 17l-5-5m0 0l5-5m-5 5h12" />
          </svg>
        </div>
        <div class="flex-1">
          <h2 class="text-xl font-bold text-gray-800 dark:text-slate-900">Digital Marketing</h2>
          <p class="text-sm text-gray-500">4 Posisi Tersedia</p>
        </div>
      </div>
      <div class="grid grid-cols-1 gap-4 mt-4 text-sm font-medium text-gray-700 md:grid-cols-4">
        <div>
          <p class="text-gray-400 dark:text-slate-500">Posisi</p>
          <p class="dark:text-slate-900">Digital Marketing</p>
        </div>
        <div>
          <p class="text-gray-400 dark:text-slate-500">Tipe</p>
          <p class="dark:text-slate-900">Internship</p>
        </div>
        <div>
          <p class="text-gray-400 dark:text-slate-500">Lokasi</p>
          <p class="dark:text-slate-900">Graha Pena Surabaya</p>
        </div>
        <div class="flex gap-2 mt-4 md:mt-0">

            <a href="{{ route('job.apply') }}?position={{ urlencode('Digital Marketing') }}&type=internship&location={{ urlencode('Graha Pena Surabaya') }}"
            class="px-4 py-2 text-white bg-orange-400 rounded shadow hover:bg-orange-500">
            Daftar
            </a>
          <button onclick="toggleDetails(0)" class="px-4 py-2 text-orange-500 border border-orange-400 rounded shadow hover:bg-orange-50">Lihat Detail</button>
        </div>
      </div>
      <div id="details-0" class="hidden p-4 mt-6 border border-gray-200 rounded dark:bg-slate-300 bg-gray-50">
        <p class="mb-2 font-semibold text-gray-700 dark:text-slate-900">Syarat:</p>
        <ul class="space-y-1 text-sm text-gray-600 list-disc list-inside dark:text-slate-900">
          <li>Mahasiswa atau siswa SMK aktif</li>
          <li>Memahami media sosial (Instagram, TikTok dll)</li>
          <li>Kreatif dan suka membuat konten</li>
          <li>Dapat bekerja tim maupun individu</li>
          <li>Menguasai dasar desain (Canva/Corel/PS)</li>
          <li>Disiplin dan tepat waktu</li>
          <li>Penempatan di Surabaya</li>
        </ul>
      </div>
    </div>

    <div class="p-6 bg-white rounded-lg shadow-md dark:bg-slate-400" data-profession="cleaning service" data-location="yogyakarta office" data-type="full time">
      <div class="flex items-center gap-4">
        <div class="p-3 bg-blue-100 rounded-full">
          <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M11 17l-5-5m0 0l5-5m-5 5h12" />
          </svg>
        </div>
        <div class="flex-1">
          <h2 class="text-xl font-bold text-gray-800 dark:text-slate-900">Cleaning Service</h2>
          <p class="text-sm text-gray-500">1 Posisi Tersedia</p>
        </div>
      </div>
      <div class="grid grid-cols-1 gap-4 mt-4 text-sm font-medium text-gray-700 md:grid-cols-4">
        <div>
          <p class="text-gray-400 dark:text-slate-500">Posisi</p>
          <p class="dark:text-slate-900">Cleaning Service</p>
        </div>
        <div>
          <p class="text-gray-400 dark:text-slate-500">Tipe</p>
          <p class="dark:text-slate-900">Full Time</p>
        </div>
        <div>
          <p class="text-gray-400 dark:text-slate-500">Lokasi</p>
          <p class="dark:text-slate-900">Graha Pena Surabaya</p>
        </div>
        <div class="flex gap-2 mt-4 md:mt-0">
          <a href="{{ route('job.apply') }}?position={{ urlencode('Cleaning Service') }}&type=full%20time&location={{ urlencode('Graha Pena Surabaya') }}"
            class="px-4 py-2 text-white bg-orange-400 rounded shadow hover:bg-orange-500">
            Daftar
            </a>
          <button onclick="toggleDetails(1)" class="px-4 py-2 text-orange-500 border border-orange-400 rounded shadow hover:bg-orange-50">Lihat Detail</button>
        </div>
      </div>
      <div id="details-1" class="hidden p-4 mt-6 border border-gray-200 rounded dark:bg-slate-300 bg-gray-50">
        <p class="mb-2 font-semibold text-gray-700 dark:text-slate-900">Syarat:</p>
        <ul class="space-y-1 text-sm text-gray-600 list-disc list-inside dark:text-slate-900">
          <li>Pria/wanita usia 20–40 tahun</li>
          <li>Pengalaman min. 1 tahun lebih diutamakan</li>
          <li>Rajin, jujur, dan bertanggung jawab</li>
          <li>Mampu bekerja secara mandiri maupun tim</li>
          <li>Sehat jasmani dan rohani</li>
          <li>Menguasai Teknik Pembersihan yang Higienis</li>
          <li>Penempatan di Surabaya</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<script>
  function toggleDetails(index) {
    document.querySelectorAll('[id^="details-"]').forEach((el, i) => {
      if (i === index) {
        el.classList.toggle('hidden');
      } else {
        el.classList.add('hidden');
      }
    });
  }

  function filterJobs() {
    const prof = document.getElementById('searchProfession').value.toLowerCase();
    const type = document.getElementById('searchType').value.toLowerCase();
    document.querySelectorAll('#jobList > div').forEach(job => {
      const p = job.dataset.profession;
      const t = job.dataset.type;
      const show = (!prof || p.includes(prof)) && (!type || t === type);
      job.style.display = show ? 'block' : 'none';
    });
  }

  function resetJobs() {
    document.getElementById('searchProfession').value = '';
    document.getElementById('searchType').value = '';
    filterJobs();
  }
</script>
@endsection
