<?php

namespace App\Http\Controllers\Admin;

use App\Models\Datapenduduk;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {

        $datapenduduk = Datapenduduk::all();
        $categories = $datapenduduk->pluck('umur')->toArray();

        $data = [];
        foreach ($datapenduduk as $row) {
            $data[] = (int) $row->Jumlah_penduduk;
        }

        return view('pages.admin.dashboard.main', compact('categories', 'data'));
    }

    
}
