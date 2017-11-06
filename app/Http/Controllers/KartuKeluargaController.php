<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DataTables;
use Validator;
use DB;
use Auth;

class KartuKeluargaController extends Controller
{
    protected $user;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::check() && Auth::user()->isAdmin();

            return $next($request);
        });
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pelayanan.kk-crud.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'no_kk' => 'required|numeric',
            'nik' => 'required|numeric',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'rt' => 'required|integer',
            'rw' => 'required|integer',
            'kelurahan' => 'required',
            'jumlah_pengikut' => 'required|integer'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->messages()], 400);
        } else {
            DB::table('kartu_keluarga')->insertGetId([
                'no_kk' => $request->no_kk,
                'nik' => $request->nik,
                'nama' => $request->nama,
                'jenis_kelamin' => $request->jenis_kelamin,
                'alamat' => $request->alamat,
                'rt' => $request->rt,
                'rw' => $request->rw,
                'kelurahan' => $request->kelurahan,
                'jumlah_pengikut' => $request->jumlah_pengikut,
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'user_id' => Auth::id()
            ]);

            DB::table('logs')->insertGetId([
                'user_id' => Auth::id(),
                'user_name' => Auth::user()->name,
                'activity' => Auth::user()->name . ' telah menambahkan data pemohon Kartu Keluarga dengan NIK ' . $request->nik,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);

            return response()->json(['message' => 'stored']);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'no_kk' => 'required|numeric',
            'nik' => 'required|numeric',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'rt' => 'required|integer',
            'rw' => 'required|integer',
            'kelurahan' => 'required',
            'jumlah_pengikut' => 'required|integer'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->messages()], 400);
        } else {
            DB::table('kartu_keluarga')
                ->where('id', '=', $request->id)
                ->update([
                'no_kk' => $request->no_kk,
                'nik' => $request->nik,
                'nama' => $request->nama,
                'jenis_kelamin' => $request->jenis_kelamin,
                'alamat' => $request->alamat,
                'rt' => $request->rt,
                'rw' => $request->rw,
                'kelurahan' => $request->kelurahan,
                'jumlah_pengikut' => $request->jumlah_pengikut,
                'status' => $request->status,
                'updated_at' => Carbon::now(),
                'user_id' => 1
            ]);

            DB::table('logs')->insertGetId([
                'user_id' => Auth::id(),
                'user_name' => Auth::user()->name,
                'activity' => Auth::user()->name . ' telah merubah data pemohon Kartu Keluarga dengan NIK ' . $request->nik,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);

            return response()->json(['message' => 'updated']);
        }   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        DB::table('kartu_keluarga')->where('id', '=', $request->id)->delete();

        DB::table('logs')->insertGetId([
            'user_id' => Auth::id(),
            'user_name' => Auth::user()->name,
            'activity' => Auth::user()->name . ' telah menghapus data pemohon Kartu Keluarga dengan NIK ' . $request->nik,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        return response()->json(['message' => 'deleted']);
    }

    /**
     * Get all data and return to json.
     *
     * @return \Illuminate\Http\Response
     */
    public function getKartuKeluargaData(Request $request)
    {
        $kartu_keluargas = DB::table('kartu_keluarga')->select([
            'id', 'no_kk', 'nik', 'nama', 'jenis_kelamin',
            'alamat', 'rt', 'rw', 'kelurahan', 'jumlah_pengikut',
            'status', 'created_at', 'updated_at', 'user_id'
        ]);

        return DataTables::of($kartu_keluargas)
                            ->filter( function($query) use ($request) {
                                if ($request->input('no_kk')) {
                                    $query->where('no_kk', 'like', "%{$request->no_kk}%");
                                }
                                if ($request->input('nik')) {
                                    $query->where('nik', 'like', "%{$request->nik}%");
                                }
                                if ($request->input('nama')) {
                                    $query->where('nama', 'like', "%{$request->nama}%");
                                }
                                if ($request->input('jenis_kelamin')) {
                                    $query->where('jenis_kelamin', '=', $request->jenis_kelamin);
                                }
                                if ($request->input('rt')) {
                                    $query->where('rt', '=', $request->rt);
                                }
                                if ($request->input('rw')) {
                                    $query->where('rw', '=', $request->rw);
                                }
                                if ($request->input('kelurahan')) {
                                    $query->where('kelurahan', '=', $request->kelurahan);
                                }
                                if ($request->input('jumlah_pengikut')) {
                                    $query->where('jumlah_pengikut', '=', $request->jumlah_pengikut);
                                }
                                if ($request->has('status')) {
                                    $query->where('status', '=', $request->status);
                                }
                                if ($request->input('tanggal_dari') && $request->input('tanggal_sampai')) {
                                    $query->whereBetween('created_at', [$request->tanggal_dari, $request->tanggal_sampai]);
                                }
                            })
                            ->editColumn('created_at', function ($query) {
                                return $query->created_at ? with(new Carbon($query->created_at))->format('Y/m/d') : '';
                            })
                            ->editColumn('status', function ($query) {
                                if ($query->status == 0)
                                    return 'Belum Diproses';
                                else if ($query->status == 1)
                                    return 'On Progress';
                                else
                                    return 'Telah Diproses';
                            })
                            ->addColumn('action', function($kk) {
                                return '
                                        <button 
                                        class="btn btn-warning btn-xs kk-edit"
                                        data-toggle="modal"
                                        data-target="#kk-edit-modal"
                                        data-id="'. $kk->id .'"
                                        data-no_kk="'. $kk->no_kk .'"
                                        data-nik="'. $kk->nik .'"
                                        data-nama="'. $kk->nama .'"
                                        data-jenis_kelamin="'. $kk->jenis_kelamin .'"
                                        data-alamat="'. $kk->alamat .'"
                                        data-rt="'. $kk->rt .'"
                                        data-rw="'. $kk->rw .'"
                                        data-kelurahan="'. $kk->kelurahan .'"
                                        data-jumlah_pengikut="'. $kk->jumlah_pengikut .'"
                                        data-status="'. $kk->status .'"
                                        data-user_id="'. $kk->user_id .'"
                                        ><i class="md-edit"></i></button>
                                        <button
                                        class="btn btn-danger btn-xs kk-delete"
                                        data-id="'. $kk->id .'"
                                        data-nik="'. $kk->nik .'"
                                        ><i class="md-delete"></i></button>';
                            })
                            ->make(true);
    }

    /**
    * Generate Kartu Keluarga invoice.
    *
    * @return \Illuminate\Http\Response
    */
    public function cetakResiKartuKeluarga(Request $request) {
        
        $query = DB::table('kartu_keluarga')->where('nik', '=', $request->nik)->first();

        return view('admin.reports.resi.resikk', [
            'kk' => $query
        ]);
    }

    /**
    * Generate dynamic reports
    *
    * @return \Illuminate\Http\Response
    */
    public function generateKartuKeluargaReports(Request $request) {
        
        $query = DB::table('kartu_keluarga')->select(['no_kk', 'nik', 'nama', 'jenis_kelamin', 'alamat', 'rt', 'rw', 'kelurahan']);

        if ($request->input('no_kk')) {
            $query->where('no_kk', 'like', "%{$request->no_kk}%");
        }
        if ($request->input('nik')) {
            $query->where('nik', 'like', "%{$request->nik}%");
        }
        if ($request->input('nama')) {
            $query->where('nama', 'like', "%{$request->nama}%");
        }
        if ($request->input('jenis_kelamin')) {
            $query->where('jenis_kelamin', '=', $request->jenis_kelamin);
        }
        if ($request->input('rt')) {
            $query->where('rt', '=', $request->rt);
        }
        if ($request->input('rw')) {
            $query->where('rw', '=', $request->rw);
        }
        if ($request->input('kelurahan')) {
            $query->where('kelurahan', '=', $request->kelurahan);
        }
        if ($request->input('jumlah_pengikut')) {
            $query->where('jumlah_pengikut', '=', $request->jumlah_pengikut);
        }
        if ($request->input('status')) {
            $query->where('status', '=', $request->status);
        }
        if ($request->input('tanggal_dari') && $request->input('tanggal_sampai')) {
            $query->whereBetween('created_at', [$request->tanggal_dari, $request->tanggal_sampai]);
        }

        return view('admin.reports.a4.dynamic', [
            'kk' => $query->get(),
            'count' => $query->count()
        ]);
    }

    /**
    * Archive Kartu Keluarga data
    *
    * @return \Illuminate\Http\Response
    */
    public function generateKartuKeluargaArchives(Request $request) {
        $kk = DB::table('kartu_keluarga')->where('created_at', 'like', "%{$request->tanggal}%")->orderBy('created_at', 'ASC')->get();
        $formattedDate = Carbon::parse($request->tanggal)->format('d F Y');

        return view('admin.reports.a4.archive', ['kk' => $kk, 'formattedDate' => $formattedDate]);
    }
}
