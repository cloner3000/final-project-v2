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

        $ktp_cipaganti = DB::table('ktp')->where('kelurahan', '=', 'Cipaganti')->whereBetween('created_at', [$startsAt, $endsAt])->count();
        $kk_cipaganti = DB::table('kartu_keluarga')->where('kelurahan', '=', 'Cipaganti')->whereBetween('created_at', [$startsAt, $endsAt])->count();
        $legalisir_cipaganti = DB::table('legalisir')->where('kelurahan', '=', 'Cipaganti')->whereBetween('created_at', [$startsAt, $endsAt])->count();
        $pindahdatang_cipaganti = DB::table('pindah_datang')->where('kelurahan', '=', 'Cipaganti')->whereBetween('created_at', [$startsAt, $endsAt])->count();
        $pindahkeluar_cipaganti = DB::table('pindah_keluar')->where('kelurahan', '=', 'Cipaganti')->whereBetween('created_at', [$startsAt, $endsAt])->count();

        $ktp_dago = DB::table('ktp')->where('kelurahan', '=', 'Dago')->whereBetween('created_at', [$startsAt, $endsAt])->count();
        $kk_dago = DB::table('kartu_keluarga')->where('kelurahan', '=', 'Dago')->whereBetween('created_at', [$startsAt, $endsAt])->count();
        $legalisir_dago = DB::table('legalisir')->where('kelurahan', '=', 'Dago')->whereBetween('created_at', [$startsAt, $endsAt])->count();
        $pindahdatang_dago = DB::table('pindah_datang')->where('kelurahan', '=', 'Dago')->whereBetween('created_at', [$startsAt, $endsAt])->count();
        $pindahkeluar_dago = DB::table('pindah_keluar')->where('kelurahan', '=', 'Dago')->whereBetween('created_at', [$startsAt, $endsAt])->count();

        $ktp_lebakgede = DB::table('ktp')->where('kelurahan', '=', 'Lebak Gede')->whereBetween('created_at', [$startsAt, $endsAt])->count();
        $kk_lebakgede = DB::table('kartu_keluarga')->where('kelurahan', '=', 'Lebak Gede')->whereBetween('created_at', [$startsAt, $endsAt])->count();
        $legalisir_lebakgede = DB::table('legalisir')->where('kelurahan', '=', 'Lebak Gede')->whereBetween('created_at', [$startsAt, $endsAt])->count();
        $pindahdatang_lebakgede = DB::table('pindah_datang')->where('kelurahan', '=', 'Lebak Gede')->whereBetween('created_at', [$startsAt, $endsAt])->count();
        $pindahkeluar_lebakgede = DB::table('pindah_keluar')->where('kelurahan', '=', 'Lebak Gede')->whereBetween('created_at', [$startsAt, $endsAt])->count();

        $ktp_lebaksiliwangi = DB::table('ktp')->where('kelurahan', '=', 'Lebak Siliwangi')->whereBetween('created_at', [$startsAt, $endsAt])->count();
        $kk_lebaksiliwangi = DB::table('kartu_keluarga')->where('kelurahan', '=', 'Lebak Siliwangi')->whereBetween('created_at', [$startsAt, $endsAt])->count();
        $legalisir_lebaksiliwangi = DB::table('legalisir')->where('kelurahan', '=', 'Lebak Siliwangi')->whereBetween('created_at', [$startsAt, $endsAt])->count();
        $pindahdatang_lebaksiliwangi = DB::table('pindah_datang')->where('kelurahan', '=', 'Lebak Siliwangi')->whereBetween('created_at', [$startsAt, $endsAt])->count();
        $pindahkeluar_lebaksiliwangi = DB::table('pindah_keluar')->where('kelurahan', '=', 'Lebak Siliwangi')->whereBetween('created_at', [$startsAt, $endsAt])->count();

        $ktp_sadangserang = DB::table('ktp')->where('kelurahan', '=', 'Sadang Serang')->whereBetween('created_at', [$startsAt, $endsAt])->count();
        $kk_sadangserang = DB::table('kartu_keluarga')->where('kelurahan', '=', 'Sadang Serang')->whereBetween('created_at', [$startsAt, $endsAt])->count();
        $legalisir_sadangserang = DB::table('legalisir')->where('kelurahan', '=', 'Sadang Serang')->whereBetween('created_at', [$startsAt, $endsAt])->count();
        $pindahdatang_sadangserang = DB::table('pindah_datang')->where('kelurahan', '=', 'Sadang Serang')->whereBetween('created_at', [$startsAt, $endsAt])->count();
        $pindahkeluar_sadangserang = DB::table('pindah_keluar')->where('kelurahan', '=', 'Sadang Serang')->whereBetween('created_at', [$startsAt, $endsAt])->count();

        $ktp_sekeloa = DB::table('ktp')->where('kelurahan', '=', 'Sekeloa')->whereBetween('created_at', [$startsAt, $endsAt])->count();
        $kk_sekeloa = DB::table('kartu_keluarga')->where('kelurahan', '=', 'Sekeloa')->whereBetween('created_at', [$startsAt, $endsAt])->count();
        $legalisir_sekeloa = DB::table('legalisir')->where('kelurahan', '=', 'Sekeloa')->whereBetween('created_at', [$startsAt, $endsAt])->count();
        $pindahdatang_sekeloa = DB::table('pindah_datang')->where('kelurahan', '=', 'Sekeloa')->whereBetween('created_at', [$startsAt, $endsAt])->count();
        $pindahkeluar_sekeloa = DB::table('pindah_keluar')->where('kelurahan', '=', 'Sekeloa')->whereBetween('created_at', [$startsAt, $endsAt])->count();

        return view('admin.reports.a4.rekap', [
            'formattedStarts' => $formattedStarts,
            'formattedEnds' => $formattedEnds,

            'ktp_cipaganti' => $ktp_cipaganti,
            'kk_cipaganti' => $kk_cipaganti,
            'legalisir_cipaganti' => $legalisir_cipaganti,
            'pindahdatang_cipaganti' => $pindahdatang_cipaganti,
            'pindahkeluar_cipaganti' => $pindahkeluar_cipaganti,

            'ktp_dago' => $ktp_dago,
            'kk_dago' => $kk_dago,
            'legalisir_dago' => $legalisir_dago,
            'pindahdatang_dago' => $pindahdatang_dago,
            'pindahkeluar_dago' => $pindahkeluar_dago,

            'ktp_lebakgede' => $ktp_lebakgede,
            'kk_lebakgede' => $kk_lebakgede,
            'legalisir_lebakgede' => $legalisir_lebakgede,
            'pindahdatang_lebakgede' => $pindahdatang_lebakgede,
            'pindahkeluar_lebakgede' => $pindahkeluar_lebakgede,

            'ktp_lebaksiliwangi' => $ktp_lebaksiliwangi,
            'kk_lebaksiliwangi' => $kk_lebaksiliwangi,
            'legalisir_lebaksiliwangi' => $legalisir_lebaksiliwangi,
            'pindahdatang_lebaksiliwangi' => $pindahdatang_lebaksiliwangi,
            'pindahkeluar_lebaksiliwangi' => $pindahkeluar_lebaksiliwangi,

            'ktp_sadangserang' => $ktp_sadangserang,
            'kk_sadangserang' => $kk_sadangserang,
            'legalisir_sadangserang' => $legalisir_sadangserang,
            'pindahdatang_sadangserang' => $pindahdatang_sadangserang,
            'pindahkeluar_sadangserang' => $pindahkeluar_sadangserang,

            'ktp_sekeloa' => $ktp_sekeloa,
            'kk_sekeloa' => $kk_sekeloa,
            'legalisir_sekeloa' => $legalisir_sekeloa,
            'pindahdatang_sekeloa' => $pindahdatang_sekeloa,
            'pindahkeluar_sekeloa' => $pindahkeluar_sekeloa,
        ]);
    }
}
