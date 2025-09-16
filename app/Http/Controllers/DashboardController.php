<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function index()
    {
       

        // Hitung data
        $totalBerita = DB::table('berita')->count();
        $totalJob    = DB::table('jobs')->count();

        return view('admin.dashboard', compact('totalBerita', 'totalJob'));
    }
}
