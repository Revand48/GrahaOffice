<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BeritaController extends Controller
{
    // List + filter + pagination (7 per halaman)
    public function index(Request $request)
    {
        $query = DB::table('berita')->orderBy('tanggal', 'desc');

        if ($search = $request->query('search')) {
            $query->where('title', 'like', "%{$search}%");
        }

        if ($tanggal = $request->query('tanggal')) {
            $query->whereDate('tanggal', $tanggal);
        }

        $berita = $query->paginate(7)->withQueryString();

        // Pastikan kita mengirim $berita ke view
        return view('admin.berita.index', compact('berita'));
    }

    // Form tambah
    public function create()
    {
        return view('admin.berita.create'); // create tidak butuh $berita
    }

    // Simpan baru
    public function store(Request $request)
    {
        $request->validate([
            'title'     => 'required|string|max:255',
            'tanggal'   => 'required|date',
            'sumber'    => 'required|string|max:255',
            'gambar'    => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:4096',
            'deskripsi' => 'required|string',
        ]);

        $gambarPath = null;
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '_' . preg_replace('/\s+/', '_', $file->getClientOriginalName());
            $dest = public_path('uploads/berita');
            if (!file_exists($dest)) {
                mkdir($dest, 0755, true);
            }
            $file->move($dest, $filename);
            $gambarPath = '/uploads/berita/' . $filename;
        }

        DB::table('berita')->insert([
            'title'      => $request->title,
            'tanggal'    => $request->tanggal,
            'sumber'     => $request->sumber,
            'gambar'     => $gambarPath,
            'deskripsi'  => $request->deskripsi,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan.');
    }

    // Form edit
    public function edit($id)
    {
        $berita = DB::table('berita')->where('id', $id)->first();
        if (!$berita) abort(404);

        // Pastikan mengirimkan variabel $berita ke view edit
        return view('admin.berita.edit', compact('berita'));
    }

    // Update
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'     => 'required|string|max:255',
            'tanggal'   => 'required|date',
            'sumber'    => 'required|string|max:255',
            'gambar'    => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:4096',
            'deskripsi' => 'required|string',
        ]);

        $berita = DB::table('berita')->where('id', $id)->first();
        if (!$berita) abort(404);

        $gambarPath = $berita->gambar; // pakai yang lama kalau tidak upload baru

        if ($request->hasFile('gambar')) {
            // hapus file lama jika ada
            if ($berita->gambar) {
                $oldPath = public_path(ltrim($berita->gambar, '/'));
                if (file_exists($oldPath)) {
                    @unlink($oldPath);
                }
            }

            $file = $request->file('gambar');
            $filename = time() . '_' . preg_replace('/\s+/', '_', $file->getClientOriginalName());
            $dest = public_path('uploads/berita');
            if (!file_exists($dest)) {
                mkdir($dest, 0755, true);
            }
            $file->move($dest, $filename);
            $gambarPath = '/uploads/berita/' . $filename;
        }

        DB::table('berita')->where('id', $id)->update([
            'title'      => $request->title,
            'tanggal'    => $request->tanggal,
            'sumber'     => $request->sumber,
            'gambar'     => $gambarPath,
            'deskripsi'  => $request->deskripsi,
            'updated_at' => now(),
        ]);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil diperbarui.');
    }

    // Hapus
    public function destroy($id)
    {
        $berita = DB::table('berita')->where('id', $id)->first();
        if (!$berita) {
            return redirect()->route('berita.index')->with('error', 'Berita tidak ditemukan.');
        }

        // hapus file gambar jika ada
        if ($berita->gambar) {
            $oldPath = public_path(ltrim($berita->gambar, '/'));
            if (file_exists($oldPath)) {
                @unlink($oldPath);
            }
        }

        DB::table('berita')->where('id', $id)->delete();

        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus.');
    }
}
