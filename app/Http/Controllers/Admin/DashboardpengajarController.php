<?php

namespace App\Http\Controllers\Admin;

use stdClass;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pendaftaran;
use Carbon\Carbon;

class DashboardpengajarController extends Controller
{
    public function index(Request $request)
    {
        $currentYear = Carbon::now()->year;
        $currentMonth = Carbon::now()->month;

        $janlaki = Pendaftaran::where('jenis_kelamin', 'Laki-Laki')
            ->whereMonth('created_at', '=', '1')
            ->whereYear('created_at', '=', $currentYear)
            ->count();

        $feblaki = Pendaftaran::where('jenis_kelamin', 'Laki-Laki')
            ->whereMonth('created_at', '=', '2')
            ->whereYear('created_at', '=', $currentYear)
            ->count();

        $maretlaki = Pendaftaran::where('jenis_kelamin', 'Laki-Laki')
            ->whereMonth('created_at', '=', '3')
            ->whereYear('created_at', '=', $currentYear)
            ->count();

        $aprlaki = Pendaftaran::where('jenis_kelamin', 'Laki-Laki')
            ->whereMonth('created_at', '=', '4')
            ->whereYear('created_at', '=', $currentYear)
            ->count();

        $meilaki = Pendaftaran::where('jenis_kelamin', 'Laki-Laki')
            ->whereMonth('created_at', '=', '5')
            ->whereYear('created_at', '=', $currentYear)
            ->count();

        $junilaki = Pendaftaran::where('jenis_kelamin', 'Laki-Laki')
            ->whereMonth('created_at', '=', '6')
            ->whereYear('created_at', '=', $currentYear)
            ->count();

        $julilaki = Pendaftaran::where('jenis_kelamin', 'Laki-Laki')
            ->whereMonth('created_at', '=', '7')
            ->whereYear('created_at', '=', $currentYear)
            ->count();

        $auglaki = Pendaftaran::where('jenis_kelamin', 'Laki-Laki')
            ->whereMonth('created_at', '=', '8')
            ->whereYear('created_at', '=', $currentYear)
            ->count();

        $seplaki = Pendaftaran::where('jenis_kelamin', 'Laki-Laki')
            ->whereMonth('created_at', '=', '9')
            ->whereYear('created_at', '=', $currentYear)
            ->count();

        $oktlaki = Pendaftaran::where('jenis_kelamin', 'Laki-Laki')
            ->whereMonth('created_at', '=', '10')
            ->whereYear('created_at', '=', $currentYear)
            ->count();

        $novlaki = Pendaftaran::where('jenis_kelamin', 'Laki-Laki')
            ->whereMonth('created_at', '=', '11')
            ->whereYear('created_at', '=', $currentYear)
            ->count();

        $deslaki = Pendaftaran::where('jenis_kelamin', 'Laki-Laki')
            ->whereMonth('created_at', '=', '12')
            ->whereYear('created_at', '=', $currentYear)
            ->count();

        $janperem = Pendaftaran::where('jenis_kelamin', 'Perempuan')
            ->whereMonth('created_at', '=', '1')
            ->whereYear('created_at', '=', $currentYear)
            ->count();

        $febperem = Pendaftaran::where('jenis_kelamin', 'Perempuan')
            ->whereMonth('created_at', '=', '2')
            ->whereYear('created_at', '=', $currentYear)
            ->count();

        $maretperem = Pendaftaran::where('jenis_kelamin', 'Perempuan')
            ->whereMonth('created_at', '=', '3')
            ->whereYear('created_at', '=', $currentYear)
            ->count();

        $aprperem = Pendaftaran::where('jenis_kelamin', 'Perempuan')
            ->whereMonth('created_at', '=', '4')
            ->whereYear('created_at', '=', $currentYear)
            ->count();

        $meiperem = Pendaftaran::where('jenis_kelamin', 'Perempuan')
            ->whereMonth('created_at', '=', '5')
            ->whereYear('created_at', '=', $currentYear)
            ->count();

        $juniperem = Pendaftaran::where('jenis_kelamin', 'Perempuan')
            ->whereMonth('created_at', '=', '6')
            ->whereYear('created_at', '=', $currentYear)
            ->count();

        $juliperem = Pendaftaran::where('jenis_kelamin', 'Perempuan')
            ->whereMonth('created_at', '=', '7')
            ->whereYear('created_at', '=', $currentYear)
            ->count();

        $augperem = Pendaftaran::where('jenis_kelamin', 'Perempuan')
            ->whereMonth('created_at', '=', '8')
            ->whereYear('created_at', '=', $currentYear)
            ->count();

        $sepperem = Pendaftaran::where('jenis_kelamin', 'Perempuan')
            ->whereMonth('created_at', '=', '9')
            ->whereYear('created_at', '=', $currentYear)
            ->count();

        $oktperem = Pendaftaran::where('jenis_kelamin', 'Perempuan')
            ->whereMonth('created_at', '=', '10')
            ->whereYear('created_at', '=', $currentYear)
            ->count();

        $novperem = Pendaftaran::where('jenis_kelamin', 'Perempuan')
            ->whereMonth('created_at', '=', '11')
            ->whereYear('created_at', '=', $currentYear)
            ->count();

        $desperem = Pendaftaran::where('jenis_kelamin', 'Perempuan')
            ->whereMonth('created_at', '=', '12')
            ->whereYear('created_at', '=', $currentYear)
            ->count();



        return view('pages.pengajar.dashboard.main', compact('currentYear', 'janlaki', 'feblaki', 'maretlaki', 'aprlaki', 'meilaki', 'junilaki', 'julilaki', 'auglaki', 'seplaki', 'oktlaki', 'novlaki', 'deslaki', 'janperem', 'febperem', 'maretperem', 'aprperem', 'meiperem', 'juniperem', 'juliperem', 'augperem', 'sepperem', 'oktperem', 'novperem', 'desperem'));
    }
}
