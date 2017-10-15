<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class DashboardController extends Controller
{
    public function index()
    {
    	$count = [
    		'ktp' => DB::table('ktp')->count(),
    		'kk' => DB::table('kartu_keluarga')->count(),
    		'legalisir' => DB::table('legalisir')->count(),
    		'pindahdatang' => DB::table('pindah_datang')->count(),
    		'pindahkeluar' => DB::table('pindah_keluar')->count(),
            'users' => DB::table('users')->count(),
    	];

    	return view('dashboard', compact('count'));
    }

    public function cetakRekap(Request $request) 
    {
        $startsAt = $request->input('tanggal_dari'); 
        $endsAt = $request->input('tanggal_sampai');

        $formattedStarts = Carbon::parse($startsAt)->format('d/m/Y');
        $formattedEnds = Carbon::parse($endsAt)->format('d/m/Y');

        $ktp = DB::table('ktp')->whereBetween('created_at', [$startsAt, $endsAt])->count();
        $kk = DB::table('kartu_keluarga')->whereBetween('created_at', [$startsAt, $endsAt])->count();
        $legalisir = DB::table('legalisir')->whereBetween('created_at', [$startsAt, $endsAt])->count();
        $pindahdatang = DB::table('pindah_datang')->whereBetween('created_at', [$startsAt, $endsAt])->count();
        $pindahkeluar = DB::table('pindah_keluar')->whereBetween('created_at', [$startsAt, $endsAt])->count();

        return view('admin.reports.a4.rekap', [
            'formattedStarts' => $formattedStarts,
            'formattedEnds' => $formattedEnds,
            'ktp' => $ktp,
            'kk' => $kk,
            'legalisir' => $legalisir,
            'pindahdatang' => $pindahdatang,
            'pindahkeluar' => $pindahkeluar
        ]);
    }
}
