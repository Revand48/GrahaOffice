@extends('layouts.admin') {{-- atau layout utama Anda --}}
@section('content')
<!DOCTYPE html>
<html lang="id" x-data="{ sidebarOpen: false }" class="h-full">
<head>
    <meta charset="UTF-8">
    <title>Dashboard | GrahaOffice</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        .h-screen-no-header { height: calc(100vh - 4rem); } /* 4rem = tinggi header */
    </style>
</head>
<body class="h-full bg-white text-gray-800">

<!-- ========== HEADER (TETAP) ========== -->
<header class="fixed top-0 left-0 right-0 z-40 bg-white border-b border-yellow-100 h-16 flex items-center px-4 shadow-sm">
    <button @click="sidebarOpen = !sidebarOpen" class="lg:hidden text-gray-600">
        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
    </button>
    <h1 class="ml-2 lg:ml-0 text-lg font-bold">
        GrahaOffice | <span class="text-yellow-500">Dashboard</span>
    </h1>
    <div class="ml-auto flex items-center justify-center w-10 h-10 bg-yellow-500 rounded-full font-bold text-white">A</div>
</header>

<div class="flex h-screen-no-header pt-16">

    <!-- ========== SIDEBAR (TIDAK DIUBAH) ========== -->
    @include('admin.sidebar') {{-- pastikan file ini ada --}}

    <!-- ========== KONTEN UTAMA ========== -->
    <main class="flex-1 p-4 lg:p-6 grid grid-cols-1 lg:grid-cols-3 gap-4 overflow-hidden">

        <!-- Kolom Kiri -->
        <section class="lg:col-span-2 space-y-4">
            <!-- Sambutan + Tombol CRUD -->
            <div class="bg-white rounded-xl shadow border border-yellow-100 p-4 flex items-center justify-between">
                <div>
                    <h2 class="text-xl font-bold text-gray-800">Selamat datang di Panel 👋</h2>
                    <p class="text-sm text-gray-500">Kelola data dengan cepat</p>
                </div>
                <div class="flex gap-2">
                    <a href="{{ route('crud.berita') }}" class="px-3 py-2 rounded-lg bg-yellow-400 hover:bg-yellow-500 text-white text-sm font-semibold shadow">CRUD Berita</a>
                    <a href="{{ route('crud.job') }}"    class="px-3 py-2 rounded-lg bg-yellow-400 hover:bg-yellow-500 text-white text-sm font-semibold shadow">CRUD Job</a>
                </div>
            </div>

            <!-- Grafik -->
            <div class="bg-white rounded-xl shadow border border-yellow-100 p-4 h-74">
                <h3 class="font-semibold text-gray-700 mb-2">Waktu Akses Admin</h3>
                <canvas id="accessChart" class="w-full h-52"></canvas>
            </div>
        </section>

        <!-- Kolom Kanan -->
        <section class="space-y-4">
            <!-- Card Total -->
            <div class="bg-white rounded-xl shadow border border-yellow-100 p-4 flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500">Total Berita</p>
                    <p class="text-2xl font-extrabold text-yellow-500">{{ $totalBerita ?? 0 }}</p>
                </div>
                <svg class="w-8 h-8 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 12h6m-1-4h.01"/>
                </svg>
            </div>

            <div class="bg-white rounded-xl shadow border border-yellow-100 p-4 flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500">Total Job</p>
                    <p class="text-2xl font-extrabold text-green-500">{{ $totalJob ?? 0 }}</p>
                </div>
                <svg class="w-8 h-8 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
            </div>

            <!-- Stopwatch -->
            <div class="bg-white rounded-xl shadow border border-yellow-100 p-4 text-center">
                <p class="text-sm text-gray-500">Waktu Akses</p>
                <p id="stopwatch" class="text-2xl font-bold text-gray-900 mt-1">00:00:00</p>
            </div>

            <!-- Tanggal -->
            <div class="bg-white rounded-xl shadow border border-yellow-100 p-4 text-center">
                <p class="text-sm text-gray-500">Tanggal</p>
                <p id="tanggal" class="text-lg font-medium text-gray-800 mt-1"></p>
            </div>
        </section>
    </main>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
/* Stopwatch */
let s=0,m=0,h=0;
setInterval(()=>{
    s++; if(s==60){s=0;m++;} if(m==60){m=0;h++;}
    document.getElementById('stopwatch').textContent =
        (h<10?'0':'')+h+':'+(m<10?'0':'')+m+':'+(s<10?'0':'')+s;
},1000);

/* Tanggal */
document.getElementById('tanggal').textContent =
    new Date().toLocaleDateString('id-ID',{weekday:'long', year:'numeric', month:'long', day:'numeric'});

/* Chart dummy */
const ctx=document.getElementById('accessChart').getContext('2d');
new Chart(ctx,{
    type:'line',
    data:{
        labels:['00:00','04:00','08:00','12:00','16:00','20:00','24:00'],
        datasets:[{
            label:'Akses (jam)',
            data:[0,1,3,5,4,6,2],
            borderColor:'#EAB308',
            backgroundColor:'#FEF3C7',
            fill:true,
            tension:0.4
        }]
    },
    options:{responsive:true,maintainAspectRatio:false,scales:{y:{beginAtZero:true}}}
});
</script>
</body>
</html>
@endsection
