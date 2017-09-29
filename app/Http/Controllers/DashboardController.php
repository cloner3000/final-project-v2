<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
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
}
