<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class DashboardController extends Controller
{
    public function index()
    {
        $range = Carbon::now()->subDays(31);

    	$count = [
    		'ktp' => DB::table('ktp')->count(),
    		'kk' => DB::table('kartu_keluarga')->count(),
    		'legalisir' => DB::table('legalisir')->count(),
    		'pindahdatang' => DB::table('pindah_datang')->count(),
    		'pindahkeluar' => DB::table('pindah_keluar')->count(),
            'users' => DB::table('users')->count(),

            'ktp_summary' => DB::table('ktp')->where('created_at', '>=', $range)
                                             ->groupBy('date')
                                             ->orderBy('date', 'ASC')
                                             ->get([
                                                    DB::raw('DATE(created_at) as date'),
                                                    DB::raw('COUNT(*) as value')
                                                ]),
            'kk_summary' => DB::table('kartu_keluarga')->where('created_at', '>=', $range)
                                             ->groupBy('date')
                                             ->orderBy('date', 'ASC')
                                             ->get([
                                                    DB::raw('DATE(created_at) as date'),
                                                    DB::raw('COUNT(*) as value')
                                                ]),
            'legalisir_summary' => DB::table('legalisir')->where('created_at', '>=', $range)
                                             ->groupBy('date')
                                             ->orderBy('date', 'ASC')
                                             ->get([
                                                    DB::raw('DATE(created_at) as date'),
                                                    DB::raw('COUNT(*) as value')
                                                ]),
            'pindahdatang_summary' => DB::table('pindah_datang')->where('created_at', '>=', $range)
                                             ->groupBy('date')
                                             ->orderBy('date', 'ASC')
                                             ->get([
                                                    DB::raw('DATE(created_at) as date'),
                                                    DB::raw('COUNT(*) as value')
                                                ]),
            'pindahkeluar_summary' => DB::table('pindah_keluar')->where('created_at', '>=', $range)
                                             ->groupBy('date')
                                             ->orderBy('date', 'ASC')
                                             ->get([
                                                    DB::raw('DATE(created_at) as date'),
                                                    DB::raw('COUNT(*) as value')
                                                ]),
    	];

    	return view('dashboard', compact('count'));
    }

    public function cetakRekapJenisKelamin(Request $request) 
    {
        $startsAt = $request->input('tanggal_dari'); 
        $endsAt = $request->input('tanggal_sampai');

        $date = [
            'formattedStarts' => Carbon::parse($startsAt)->format('d F Y'),
            'formattedEnds' => Carbon::parse($endsAt)->format('d F Y'),
        ];

        $cipaganti = [
            'ktp' => DB::table('ktp')->select(DB::raw('count(id) as total'), 'jenis_kelamin')->where('kelurahan', '=', 'Cipaganti')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('jenis_kelamin')->get(),
            'kk' => DB::table('kartu_keluarga')->select(DB::raw('count(id) as total'), 'jenis_kelamin')->where('kelurahan', '=', 'Cipaganti')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('jenis_kelamin')->get(),
            'pindahdatang' => DB::table('pindah_datang')->select(DB::raw('count(id) as total'), 'jenis_kelamin')->where('kelurahan', '=', 'Cipaganti')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('jenis_kelamin')->get(),
            'pindahkeluar' => DB::table('pindah_keluar')->select(DB::raw('count(id) as total'), 'jenis_kelamin')->where('kelurahan', '=', 'Cipaganti')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('jenis_kelamin')->get(),
            'legalisir' => DB::table('legalisir')->select(DB::raw('count(id) as total'), 'jenis_kelamin')->where('kelurahan', '=', 'Cipaganti')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('jenis_kelamin')->get(),
        ];

        $dago = [
            'ktp' => DB::table('ktp')->select(DB::raw('count(id) as total'), 'jenis_kelamin')->where('kelurahan', '=', 'Dago')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('jenis_kelamin')->get(),
            'kk' => DB::table('kartu_keluarga')->select(DB::raw('count(id) as total'), 'jenis_kelamin')->where('kelurahan', '=', 'Dago')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('jenis_kelamin')->get(),
            'pindahdatang' => DB::table('pindah_datang')->select(DB::raw('count(id) as total'), 'jenis_kelamin')->where('kelurahan', '=', 'Dago')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('jenis_kelamin')->get(),
            'pindahkeluar' => DB::table('pindah_keluar')->select(DB::raw('count(id) as total'), 'jenis_kelamin')->where('kelurahan', '=', 'Dago')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('jenis_kelamin')->get(),
            'legalisir' => DB::table('legalisir')->select(DB::raw('count(id) as total'), 'jenis_kelamin')->where('kelurahan', '=', 'Dago')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('jenis_kelamin')->get(),
        ];

        $lebakgede = [
            'ktp' => DB::table('ktp')->select(DB::raw('count(id) as total'), 'jenis_kelamin')->where('kelurahan', '=', 'Lebak Gede')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('jenis_kelamin')->get(),
            'kk' => DB::table('kartu_keluarga')->select(DB::raw('count(id) as total'), 'jenis_kelamin')->where('kelurahan', '=', 'Lebak Gede')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('jenis_kelamin')->get(),
            'pindahdatang' => DB::table('pindah_datang')->select(DB::raw('count(id) as total'), 'jenis_kelamin')->where('kelurahan', '=', 'Lebak Gede')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('jenis_kelamin')->get(),
            'pindahkeluar' => DB::table('pindah_keluar')->select(DB::raw('count(id) as total'), 'jenis_kelamin')->where('kelurahan', '=', 'Lebak Gede')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('jenis_kelamin')->get(),
            'legalisir' => DB::table('legalisir')->select(DB::raw('count(id) as total'), 'jenis_kelamin')->where('kelurahan', '=', 'Lebak Gede')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('jenis_kelamin')->get(),
        ];

        $lebaksiliwangi = [
            'ktp' => DB::table('ktp')->select(DB::raw('count(id) as total'), 'jenis_kelamin')->where('kelurahan', '=', 'Lebak Siliwangi')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('jenis_kelamin')->get(),
            'kk' => DB::table('kartu_keluarga')->select(DB::raw('count(id) as total'), 'jenis_kelamin')->where('kelurahan', '=', 'Lebak Siliwangi')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('jenis_kelamin')->get(),
            'pindahdatang' => DB::table('pindah_datang')->select(DB::raw('count(id) as total'), 'jenis_kelamin')->where('kelurahan', '=', 'Lebak Siliwangi')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('jenis_kelamin')->get(),
            'pindahkeluar' => DB::table('pindah_keluar')->select(DB::raw('count(id) as total'), 'jenis_kelamin')->where('kelurahan', '=', 'Lebak Siliwangi')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('jenis_kelamin')->get(),
            'legalisir' => DB::table('legalisir')->select(DB::raw('count(id) as total'), 'jenis_kelamin')->where('kelurahan', '=', 'Lebak Siliwangi')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('jenis_kelamin')->get(),
        ];

        $sadangserang = [
            'ktp' => DB::table('ktp')->select(DB::raw('count(id) as total'), 'jenis_kelamin')->where('kelurahan', '=', 'Sadang Serang')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('jenis_kelamin')->get(),
            'kk' => DB::table('kartu_keluarga')->select(DB::raw('count(id) as total'), 'jenis_kelamin')->where('kelurahan', '=', 'Sadang Serang')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('jenis_kelamin')->get(),
            'pindahdatang' => DB::table('pindah_datang')->select(DB::raw('count(id) as total'), 'jenis_kelamin')->where('kelurahan', '=', 'Sadang Serang')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('jenis_kelamin')->get(),
            'pindahkeluar' => DB::table('pindah_keluar')->select(DB::raw('count(id) as total'), 'jenis_kelamin')->where('kelurahan', '=', 'Sadang Serang')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('jenis_kelamin')->get(),
            'legalisir' => DB::table('legalisir')->select(DB::raw('count(id) as total'), 'jenis_kelamin')->where('kelurahan', '=', 'Sadang Serang')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('jenis_kelamin')->get(),
        ];

        $sekeloa = [
            'ktp' => DB::table('ktp')->select(DB::raw('count(id) as total'), 'jenis_kelamin')->where('kelurahan', '=', 'Sekeloa')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('jenis_kelamin')->get(),
            'kk' => DB::table('kartu_keluarga')->select(DB::raw('count(id) as total'), 'jenis_kelamin')->where('kelurahan', '=', 'Sekeloa')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('jenis_kelamin')->get(),
            'pindahdatang' => DB::table('pindah_datang')->select(DB::raw('count(id) as total'), 'jenis_kelamin')->where('kelurahan', '=', 'Sekeloa')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('jenis_kelamin')->get(),
            'pindahkeluar' => DB::table('pindah_keluar')->select(DB::raw('count(id) as total'), 'jenis_kelamin')->where('kelurahan', '=', 'Sekeloa')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('jenis_kelamin')->get(),
            'legalisir' => DB::table('legalisir')->select(DB::raw('count(id) as total'), 'jenis_kelamin')->where('kelurahan', '=', 'Sekeloa')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('jenis_kelamin')->get(),
        ];

        return view('admin.reports.a4.rekapgender', compact('date', 'cipaganti', 'dago', 'lebakgede', 'lebaksiliwangi', 'sadangserang', 'sekeloa'));
    }

    public function cetakRekapStatus(Request $request) 
    {
        $startsAt = $request->input('tanggal_dari'); 
        $endsAt = $request->input('tanggal_sampai');

        $date = [
            'formattedStarts' => Carbon::parse($startsAt)->format('d F Y'),
            'formattedEnds' => Carbon::parse($endsAt)->format('d F Y'),
        ];

        $cipaganti = [
            'ktp' => DB::table('ktp')->select(DB::raw('count(id) as total'), 'status')->where('kelurahan', '=', 'Cipaganti')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('status')->get(),
            'kk' => DB::table('kartu_keluarga')->select(DB::raw('count(id) as total'), 'status')->where('kelurahan', '=', 'Cipaganti')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('status')->get(),
            'pindahdatang' => DB::table('pindah_datang')->select(DB::raw('count(id) as total'), 'status')->where('kelurahan', '=', 'Cipaganti')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('status')->get(),
            'pindahkeluar' => DB::table('pindah_keluar')->select(DB::raw('count(id) as total'), 'status')->where('kelurahan', '=', 'Cipaganti')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('status')->get(),
            'legalisir' => DB::table('legalisir')->select(DB::raw('count(id) as total'), 'status')->where('kelurahan', '=', 'Cipaganti')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('status')->get(),
        ];

        $dago = [
            'ktp' => DB::table('ktp')->select(DB::raw('count(id) as total'), 'status')->where('kelurahan', '=', 'Dago')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('status')->get(),
            'kk' => DB::table('kartu_keluarga')->select(DB::raw('count(id) as total'), 'status')->where('kelurahan', '=', 'Dago')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('status')->get(),
            'pindahdatang' => DB::table('pindah_datang')->select(DB::raw('count(id) as total'), 'status')->where('kelurahan', '=', 'Dago')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('status')->get(),
            'pindahkeluar' => DB::table('pindah_keluar')->select(DB::raw('count(id) as total'), 'status')->where('kelurahan', '=', 'Dago')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('status')->get(),
            'legalisir' => DB::table('legalisir')->select(DB::raw('count(id) as total'), 'status')->where('kelurahan', '=', 'Dago')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('status')->get(),
        ];

        $lebakgede = [
            'ktp' => DB::table('ktp')->select(DB::raw('count(id) as total'), 'status')->where('kelurahan', '=', 'Lebak Gede')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('status')->get(),
            'kk' => DB::table('kartu_keluarga')->select(DB::raw('count(id) as total'), 'status')->where('kelurahan', '=', 'Lebak Gede')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('status')->get(),
            'pindahdatang' => DB::table('pindah_datang')->select(DB::raw('count(id) as total'), 'status')->where('kelurahan', '=', 'Lebak Gede')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('status')->get(),
            'pindahkeluar' => DB::table('pindah_keluar')->select(DB::raw('count(id) as total'), 'status')->where('kelurahan', '=', 'Lebak Gede')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('status')->get(),
            'legalisir' => DB::table('legalisir')->select(DB::raw('count(id) as total'), 'status')->where('kelurahan', '=', 'Lebak Gede')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('status')->get(),
        ];

        $lebaksiliwangi = [
            'ktp' => DB::table('ktp')->select(DB::raw('count(id) as total'), 'status')->where('kelurahan', '=', 'Lebak Siliwangi')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('status')->get(),
            'kk' => DB::table('kartu_keluarga')->select(DB::raw('count(id) as total'), 'status')->where('kelurahan', '=', 'Lebak Siliwangi')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('status')->get(),
            'pindahdatang' => DB::table('pindah_datang')->select(DB::raw('count(id) as total'), 'status')->where('kelurahan', '=', 'Lebak Siliwangi')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('status')->get(),
            'pindahkeluar' => DB::table('pindah_keluar')->select(DB::raw('count(id) as total'), 'status')->where('kelurahan', '=', 'Lebak Siliwangi')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('status')->get(),
            'legalisir' => DB::table('legalisir')->select(DB::raw('count(id) as total'), 'status')->where('kelurahan', '=', 'Lebak Siliwangi')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('status')->get(),
        ];

        $sadangserang = [
            'ktp' => DB::table('ktp')->select(DB::raw('count(id) as total'), 'status')->where('kelurahan', '=', 'Sadang Serang')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('status')->get(),
            'kk' => DB::table('kartu_keluarga')->select(DB::raw('count(id) as total'), 'status')->where('kelurahan', '=', 'Sadang Serang')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('status')->get(),
            'pindahdatang' => DB::table('pindah_datang')->select(DB::raw('count(id) as total'), 'status')->where('kelurahan', '=', 'Sadang Serang')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('status')->get(),
            'pindahkeluar' => DB::table('pindah_keluar')->select(DB::raw('count(id) as total'), 'status')->where('kelurahan', '=', 'Sadang Serang')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('status')->get(),
            'legalisir' => DB::table('legalisir')->select(DB::raw('count(id) as total'), 'status')->where('kelurahan', '=', 'Sadang Serang')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('status')->get(),
        ];

        $sekeloa = [
            'ktp' => DB::table('ktp')->select(DB::raw('count(id) as total'), 'status')->where('kelurahan', '=', 'Sekeloa')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('status')->get(),
            'kk' => DB::table('kartu_keluarga')->select(DB::raw('count(id) as total'), 'status')->where('kelurahan', '=', 'Sekeloa')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('status')->get(),
            'pindahdatang' => DB::table('pindah_datang')->select(DB::raw('count(id) as total'), 'status')->where('kelurahan', '=', 'Sekeloa')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('status')->get(),
            'pindahkeluar' => DB::table('pindah_keluar')->select(DB::raw('count(id) as total'), 'status')->where('kelurahan', '=', 'Sekeloa')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('status')->get(),
            'legalisir' => DB::table('legalisir')->select(DB::raw('count(id) as total'), 'status')->where('kelurahan', '=', 'Sekeloa')->whereBetween('created_at', [$startsAt, $endsAt])->groupBy('status')->get(),
        ];

        return view('admin.reports.a4.rekapstatus', compact('date', 'cipaganti', 'dago', 'lebakgede', 'lebaksiliwangi', 'sadangserang', 'sekeloa'));
    }
}
