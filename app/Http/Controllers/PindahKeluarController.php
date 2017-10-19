<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DataTables;
use Validator;
use DB;
use Auth;
use PDF;

class PindahKeluarController extends Controller
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
        return view('pelayanan.pindahkeluar-crud.index');
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
            'nik'    => 'required|numeric',
            'nama'   => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'kewarganegaraan' => 'required',
            'gol_darah' => 'required',
            'agama' => 'required',
            'status_perkawinan' => 'required',
            'shdk' => 'required',
            'pendidikan' => 'required',
            'pekerjaan' => 'required',
            'alamat_sekarang' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'kelurahan' => 'required',
            'alamat_tujuan' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->messages()], 400);
        } else {
            DB::table('pindah_keluar')->insertGetId([
                'no_kk' => $request->no_kk,
                'nik'    => $request->nik,
                'nama'   => $request->nama,
                'jenis_kelamin' => $request->jenis_kelamin,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'kewarganegaraan' => $request->kewarganegaraan,
                'gol_darah' => $request->gol_darah,
                'agama' => $request->agama,
                'status_perkawinan' => $request->status_perkawinan,
                'shdk' => $request->shdk,
                'pendidikan' => $request->pendidikan,
                'pekerjaan' => $request->pekerjaan,
                'alamat_sekarang' => $request->alamat_sekarang,
                'rt' => $request->rt,
                'rw' => $request->rw,
                'kelurahan' => $request->kelurahan,
                'alamat_tujuan' => $request->alamat_tujuan,
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'user_id' => Auth::id()
            ]);

            DB::table('logs')->insertGetId([
                'user_id' => Auth::id(),
                'user_name' => Auth::user()->name,
                'activity' => Auth::user()->name . ' telah menambah data pemohon Pindah Keluar dengan NIK ' . $request->nik,
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
            'nik'    => 'required|numeric',
            'nama'   => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'kewarganegaraan' => 'required',
            'gol_darah' => 'required',
            'agama' => 'required',
            'status_perkawinan' => 'required',
            'shdk' => 'required',
            'pendidikan' => 'required',
            'pekerjaan' => 'required',
            'alamat_sekarang' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'kelurahan' => 'required',
            'alamat_tujuan' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->messages()], 400);
        } else {
            DB::table('pindah_keluar')
                ->where('id', '=', $request->id)
                ->update([
                'no_kk' => $request->no_kk,
                'nik'    => $request->nik,
                'nama'   => $request->nama,
                'jenis_kelamin' => $request->jenis_kelamin,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'kewarganegaraan' => $request->kewarganegaraan,
                'gol_darah' => $request->gol_darah,
                'agama' => $request->agama,
                'status_perkawinan' => $request->status_perkawinan,
                'shdk' => $request->shdk,
                'pendidikan' => $request->pendidikan,
                'pekerjaan' => $request->pekerjaan,
                'alamat_sekarang' => $request->alamat_sekarang,
                'rt' => $request->rt,
                'rw' => $request->rw,
                'kelurahan' => $request->kelurahan,
                'alamat_tujuan' => $request->alamat_tujuan,
                'status' => $request->status,
                'updated_at' => Carbon::now(),
                'user_id' => Auth::id()
            ]);

            DB::table('logs')->insertGetId([
                'user_id' => Auth::id(),
                'user_name' => Auth::user()->name,
                'activity' => Auth::user()->name . ' telah merubah data pemohon Pindah Keluar dengan NIK ' . $request->nik,
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
        DB::table('pindah_keluar')->where('id', '=', $request->id)->delete();

        DB::table('logs')->insertGetId([
            'user_id' => Auth::id(),
            'user_name' => Auth::user()->name,
            'activity' => Auth::user()->name . ' telah menghapus data pemohon Pindah Keluar dengan NIK ' . $request->nik,
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
    public function getPindahKeluarData(Request $request)
    {
        $pindahkeluars = DB::table('pindah_keluar')->select([
        'id', 'no_kk', 'nik', 'nama', 'jenis_kelamin',
        'tempat_lahir', 'tanggal_lahir', 'kewarganegaraan',
        'gol_darah', 'agama', 'status_perkawinan', 'shdk', 
        'pendidikan', 'pekerjaan', 'alamat_sekarang',
        'rt', 'rw', 'kelurahan', 'alamat_tujuan', 'status', 
        'created_at', 'updated_at','user_id']);

        return DataTables::of($pindahkeluars)
                            ->filter( function ($query) use ($request) {
                                if ($request->has('nik')) {
                                    $query->where('nik', 'like', "%{$request->nik}%");
                                }
                                if ($request->has('nama')) {
                                    $query->where('nama', 'like', "%{$request->nama}%");
                                }
                                if ($request->has('jenis_kelamin')) {
                                    $query->where('jenis_kelamin', 'like', "%{$request->jenis_kelamin}%");
                                }
                                if ($request->has('tempat_lahir')) {
                                    $query->where('tempat_lahir', 'like', "%{$request->tempat_lahir}%");
                                }
                                if ($request->input('kewarganegaraan')) {
                                    $query->where('kewarganegaraan', '=', $request->kewarganegaraan);
                                }
                                if ($request->input('gol_darah')) {
                                    $query->where('gol_darah', '=', $request->gol_darah);
                                }
                                if ($request->input('agama')) {
                                    $query->where('agama', '=', $request->agama);
                                }
                                if ($request->input('status_perkawinan')) {
                                    $query->where('status_perkawinan', '=', $request->status_perkawinan);
                                }
                                if ($request->input('shdk')) {
                                    $query->where('shdk', '=', $request->shdk);
                                }
                                if ($request->input('pendidikan')) {
                                    $query->where('pendidikan', '=', $request->pendidikan);
                                }
                                if ($request->input('pekerjaan')) {
                                    $query->where('pekerjaan', '=', $request->pekerjaan);
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
                                if ($request->has('status')) {
                                    $query->where('status', '=', $request->status);
                                }
                                if ($request->input('tanggal_dari') && $request->input('tanggal_sampai')) {
                                    $query->whereBetween('created_at', [$request->tanggal_dari, $request->tanggal_sampai]);
                                }
                                if ($request->input('tanggal_lahir_dari') && $request->input('tanggal_lahir_sampai')) {
                                    $query->whereBetween('tanggal_lahir', [$request->tanggal_lahir_dari, $request->tanggal_lahir_sampai]);
                                }
                            })
                            ->editColumn('created_at', function ($user) {
                                return $user->created_at ? with(new Carbon($user->created_at))->format('Y/m/d') : '';
                            })
                            ->addColumn('action', function($pindahkeluar) {
                                return '<button 
                                        class="btn btn-info btn-xs pindahkeluar-show"
                                        data-toggle="modal"
                                        data-target="#pindahkeluar-show-modal"
                                        data-id="'. $pindahkeluar->id .'"
                                        data-no_kk="'. $pindahkeluar->no_kk .'"
                                        data-nik="'. $pindahkeluar->nik .'"
                                        data-nama="'. $pindahkeluar->nama .'"
                                        data-jenis_kelamin="'. $pindahkeluar->jenis_kelamin .'"
                                        data-tempat_lahir="'. $pindahkeluar->tempat_lahir .'"
                                        data-tanggal_lahir="'. $pindahkeluar->tanggal_lahir .'"
                                        data-kewarganegaraan="'. $pindahkeluar->kewarganegaraan .'"
                                        data-gol_darah="'. $pindahkeluar->gol_darah .'"
                                        data-agama="'. $pindahkeluar->agama .'"
                                        data-status_perkawinan="'. $pindahkeluar->status_perkawinan .'"
                                        data-shdk="'. $pindahkeluar->shdk .'"
                                        data-pendidikan="'. $pindahkeluar->pendidikan .'"
                                        data-pekerjaan="'. $pindahkeluar->pekerjaan .'"
                                        data-alamat_sekarang="'. $pindahkeluar->alamat_sekarang .'"
                                        data-rt="'. $pindahkeluar->rt .'"
                                        data-rw="'. $pindahkeluar->rw .'"
                                        data-kelurahan="'. $pindahkeluar->kelurahan .'"
                                        data-alamat_tujuan="'. $pindahkeluar->alamat_tujuan .'"
                                        data-status="'. $pindahkeluar->status .'"
                                        data-user_id="'. $pindahkeluar->user_id .'"
                                        ><i class="md-eye"></i></button>
                                        <button 
                                        class="btn btn-warning btn-xs pindahkeluar-edit"
                                        data-toggle="modal"
                                        data-target="#pindahkeluar-edit-modal"
                                        data-id="'. $pindahkeluar->id .'"
                                        data-no_kk="'. $pindahkeluar->no_kk .'"
                                        data-nik="'. $pindahkeluar->nik .'"
                                        data-nama="'. $pindahkeluar->nama .'"
                                        data-jenis_kelamin="'. $pindahkeluar->jenis_kelamin .'"
                                        data-tempat_lahir="'. $pindahkeluar->tempat_lahir .'"
                                        data-tanggal_lahir="'. $pindahkeluar->tanggal_lahir .'"
                                        data-kewarganegaraan="'. $pindahkeluar->kewarganegaraan .'"
                                        data-gol_darah="'. $pindahkeluar->gol_darah .'"
                                        data-agama="'. $pindahkeluar->agama .'"
                                        data-status_perkawinan="'. $pindahkeluar->status_perkawinan .'"
                                        data-shdk="'. $pindahkeluar->shdk .'"
                                        data-pendidikan="'. $pindahkeluar->pendidikan .'"
                                        data-pekerjaan="'. $pindahkeluar->pekerjaan .'"
                                        data-alamat_sekarang="'. $pindahkeluar->alamat_sekarang .'"
                                        data-rt="'. $pindahkeluar->rt .'"
                                        data-rw="'. $pindahkeluar->rw .'"
                                        data-kelurahan="'. $pindahkeluar->kelurahan .'"
                                        data-alamat_tujuan="'. $pindahkeluar->alamat_tujuan .'"
                                        data-status="'. $pindahkeluar->status .'"
                                        data-user_id="'. $pindahkeluar->user_id .'"
                                        ><i class="md-edit"></i></button>
                                        <button
                                        class="btn btn-danger btn-xs pindahkeluar-delete"
                                        data-id="'. $pindahkeluar->id .'"
                                        data-nik="'. $pindahkeluar->nik .'"
                                        ><i class="md-delete"></i></button>';
                            })
                            ->make(true);
    }

    /**
    * Generate dynamic reports
    *
    * @return \Illuminate\Http\Response
    */
    public function generatePindahKeluarReports(Request $request) {
        
        $query = DB::table('pindah_keluar')->select(['nik', 'nama', 'alamat_sekarang', 'rt', 'rw', 'kelurahan', 'alamat_tujuan']);

        if ($request->has('nik')) {
            $query->where('nik', 'like', "%{$request->nik}%");
        }
        if ($request->has('nama')) {
            $query->where('nama', 'like', "%{$request->nama}%");
        }
        if ($request->has('jenis_kelamin')) {
            $query->where('jenis_kelamin', 'like', "%{$request->jenis_kelamin}%");
        }
        if ($request->has('tempat_lahir')) {
            $query->where('tempat_lahir', 'like', "%{$request->tempat_lahir}%");
        }
        if ($request->input('kewarganegaraan')) {
            $query->where('kewarganegaraan', '=', $request->kewarganegaraan);
        }
        if ($request->input('gol_darah')) {
            $query->where('gol_darah', '=', $request->gol_darah);
        }
        if ($request->input('agama')) {
            $query->where('agama', '=', $request->agama);
        }
        if ($request->input('status_perkawinan')) {
            $query->where('status_perkawinan', '=', $request->status_perkawinan);
        }
        if ($request->input('shdk')) {
            $query->where('shdk', '=', $request->shdk);
        }
        if ($request->input('pendidikan')) {
            $query->where('pendidikan', '=', $request->pendidikan);
        }
        if ($request->input('pekerjaan')) {
            $query->where('pekerjaan', '=', $request->pekerjaan);
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
        if ($request->input('status')) {
            $query->where('status', '=', $request->status);
        }
        if ($request->input('tanggal_dari') && $request->input('tanggal_sampai')) {
            $query->whereBetween('created_at', [$request->tanggal_dari, $request->tanggal_sampai]);
        }
        if ($request->input('tanggal_lahir_dari') && $request->input('tanggal_lahir_sampai')) {
            $query->whereBetween('tanggal_lahir', [$request->tanggal_lahir_dari, $request->tanggal_lahir_sampai]);
        }

        return view('admin.reports.a4.dynamic', [
            'pindahkeluar' => $query->get(),
            'count' => $query->count()
        ]);
    }

    /**
    * Archive Pindah Keluar data
    *
    * @return \Illuminate\Http\Response
    */
    public function generatePindahKeluarArchives(Request $request) {
        $pindahkeluar = DB::table('pindah_keluar')->where('created_at', 'like', "%{$request->tanggal}%")->orderBy('created_at', 'ASC')->get();
        $formattedDate = Carbon::parse($request->tanggal)->format('d F Y');

        return view('admin.reports.a4.archive', ['pindahkeluar' => $pindahkeluar, 'formattedDate' => $formattedDate]);
    }
}
