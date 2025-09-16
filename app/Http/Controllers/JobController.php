<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JobController extends Controller
{
    // Index: list + filter (search posisi, tipe) + pagination (7 per halaman)
    public function index(Request $request)
    {
        $query = DB::table('job')->orderBy('created_at', 'desc');

        if ($search = $request->query('search')) {
            $query->where('posisi', 'like', "%{$search}%");
        }

        if ($tipe = $request->query('tipe')) {
            $query->where('tipe', $tipe);
        }

        $jobs = $query->paginate(7)->withQueryString();

        return view('admin.job.index', compact('jobs'));
    }

    // Form tambah
    public function create()
    {
        return view('admin.job.create');
    }

    // Simpan baru
    public function store(Request $request)
    {
        $request->validate([
            'posisi' => 'required|string|max:255',
            'jumlah' => 'required|integer|min:1',
            'tipe'   => 'required|in:Fulltime,Internship',
            'lokasi' => 'required|string|max:255',
            'detail' => 'nullable|string',
        ]);

        DB::table('job')->insert([
            'posisi'     => $request->posisi,
            'jumlah'     => $request->jumlah,
            'tipe'       => $request->tipe,
            'lokasi'     => $request->lokasi,
            'detail'     => $request->detail,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('job.index')->with('success', 'Lowongan berhasil ditambahkan.');
    }

    // Form edit
    public function edit($id)
    {
        $job = DB::table('job')->where('id', $id)->first();
        if (!$job) abort(404);

        return view('admin.job.edit', compact('job'));
    }

    // Update
    public function update(Request $request, $id)
    {
        $request->validate([
            'posisi' => 'required|string|max:255',
            'jumlah' => 'required|integer|min:1',
            'tipe'   => 'required|in:Fulltime,Internship',
            'lokasi' => 'required|string|max:255',
            'detail' => 'nullable|string',
        ]);

        $job = DB::table('job')->where('id', $id)->first();
        if (!$job) abort(404);

        DB::table('job')->where('id', $id)->update([
            'posisi'     => $request->posisi,
            'jumlah'     => $request->jumlah,
            'tipe'       => $request->tipe,
            'lokasi'     => $request->lokasi,
            'detail'     => $request->detail,
            'updated_at' => now(),
        ]);

        return redirect()->route('job.index')->with('success', 'Lowongan berhasil diperbarui.');
    }

    // Hapus
    public function destroy($id)
    {
        $job = DB::table('job')->where('id', $id)->first();
        if (!$job) {
            return redirect()->route('job.index')->with('error', 'Lowongan tidak ditemukan.');
        }

        DB::table('job')->where('id', $id)->delete();

        return redirect()->route('job.index')->with('success', 'Lowongan berhasil dihapus.');
    }
}
