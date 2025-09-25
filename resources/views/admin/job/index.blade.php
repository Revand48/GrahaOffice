@extends('layouts.admin')

@section('title', 'Daftar Lowongan')

@section('content')
<div class="flex min-h-screen bg-gray-50">
    <div class="flex w-full px-0 pt-16 mt-5 h-screen-no-header">

    {{-- Sidebar --}}
    @include('admin.sidebar')

    {{-- Konten utama --}}
    <main class="flex-1 p-6">
        <div x-data="{ openDelete:false, deleteId:null, deleteTitle:'' }">
            <div class="flex items-center justify-between mb-6">
                <h1 class="text-2xl font-bold">Kelola Lowongan Kerja</h1>
                <a href="{{ route('job.create') }}" class="px-4 py-2 text-white bg-green-600 rounded shadow">+ Tambah Lowongan</a>
            </div>

            <!-- Alerts -->
            @if(session('success'))
                <div class="p-3 mb-4 text-green-800 bg-green-100 rounded">{{ session('success') }}</div>
            @endif
            @if(session('error'))
                <div class="p-3 mb-4 text-red-800 bg-red-100 rounded">{{ session('error') }}</div>
            @endif

            <!-- Filter -->
            <form method="GET" action="{{ route('job.index') }}" class="flex gap-2 mb-4">
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari posisi..." class="w-1/3 p-2 border rounded">
                <select name="tipe" class="p-2 border rounded w-33 px-7">
                    <option value="">Semua Tipe</option>
                    <option value="Fulltime" {{ request('tipe') == 'Fulltime' ? 'selected' : '' }}>Fulltime</option>
                    <option value="Internship" {{ request('tipe') == 'Internship' ? 'selected' : '' }}>Internship</option>
                </select>
                <button type="submit" class="px-3 py-2 bg-yellow-400 rounded">Filter</button>
                <a href="{{ route('job.index') }}" class="px-3 py-2 bg-gray-200 rounded">Reset</a>
            </form>

            <div class="overflow-hidden bg-white rounded shadow">
                <table class="min-w-full table-auto">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-3 text-left">#</th>
                            <th class="px-4 py-3 text-left">Posisi</th>
                            <th class="px-4 py-3 text-left">Jumlah</th>
                            <th class="px-4 py-3 text-left">Tipe</th>
                            <th class="px-4 py-3 text-left">Lokasi</th>
                            <th class="px-4 py-3 text-left">Detail</th>
                            <th class="px-4 py-3 text-left">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($jobs as $item)
                            <tr class="border-t">
                                <td class="px-4 py-3">{{ $loop->iteration + ($jobs->currentPage()-1) * $jobs->perPage() }}</td>
                                <td class="px-4 py-3">{{ \Illuminate\Support\Str::limit($item->posisi, 60) }}</td>
                                <td class="px-4 py-3">{{ $item->jumlah }} posisi</td>
                                <td class="px-4 py-3">{{ $item->tipe }}</td>
                                <td class="px-4 py-2">{{ $item->lokasi }}</td>
                                <td class="px-4 py-3">{{ \Illuminate\Support\Str::limit($item->detail, 80) }}</td>
                                <td class="px-4 py-3">
                                    <div class="flex gap-2">
                                        <a href="{{ route('job.edit', $item->id) }}" class="px-3 py-1 text-sm bg-yellow-400 rounded">Edit</a>

                                        <!-- Hidden form delete -->
                                        <form id="delete-form-{{ $item->id }}" action="{{ route('job.destroy', $item->id) }}" method="POST" class="hidden">
                                            @csrf
                                            @method('DELETE')
                                        </form>

                                        <button
                                            @click='openDelete = true; deleteId = {{ $item->id }}; deleteTitle = @json($item->title)'
                                            class="px-3 py-1 text-sm text-white bg-red-500 rounded">
                                            Hapus
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="px-4 py-12 text-center text-gray-500">Belum ada lowongan</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                <div class="p-4">
                    {{ $jobs->links() }}
                </div>
            </div>

            <!-- Delete Modal -->
            <div x-show="openDelete" x-cloak class="fixed inset-0 z-50 flex items-center justify-center bg-black/40">
                <div @click.away="openDelete = false" class="w-full max-w-md p-6 bg-white rounded-lg shadow-lg">
                    <h3 class="mb-2 text-lg font-semibold">Konfirmasi Hapus</h3>
                    <p class="mb-4 text-gray-600">Yakin ingin menghapus lowongan: <strong x-text="deleteTitle"></strong> ?</p>

                    <div class="flex justify-end gap-2">
                        <button @click="openDelete = false" class="px-4 py-2 bg-gray-200 rounded">Batal</button>

                        <button
                            @click.prevent="document.getElementById('delete-form-' + deleteId).submit()"
                            class="px-4 py-2 text-white bg-red-500 rounded">
                            Ya, Hapus
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
</div>
@endsection
