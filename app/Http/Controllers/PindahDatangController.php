<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DataTables;
use Validator;
use DB;
use Auth;

class PindahDatangController extends Controller
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
        return view('pelayanan.pindahdatang-crud.index');
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
            'alamat_lama' => 'required',
            'alamat_sekarang' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'kelurahan' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->messages()], 400);
        } else {
            DB::table('pindah_datang')->insertGetId([
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
                'alamat_lama' => $request->alamat_lama,
                'alamat_sekarang' => $request->alamat_sekarang,
                'rt' => $request->rt,
                'rw' => $request->rw,
                'kelurahan' => $request->kelurahan,
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'user_id' => Auth::id()
            ]);

            DB::table('logs')->insertGetId([
                'user_id' => Auth::id(),
                'user_name' => Auth::user()->name,
                'activity' => Auth::user()->name . ' telah menambahkan data pemohon Pindah Datang dengan NIK ' . $request->nik,
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
            'alamat_lama' => 'required',
            'alamat_sekarang' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'kelurahan' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->messages()], 400);
        } else {
            DB::table('pindah_datang')
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
                    'alamat_lama' => $request->alamat_lama,
                    'alamat_sekarang' => $request->alamat_sekarang,
                    'rt' => $request->rt,
                    'rw' => $request->rw,
                    'kelurahan' => $request->kelurahan,
                    'status' => $request->status,
                    'updated_at' => Carbon::now(),
                    'user_id' => Auth::id()
                ]);

                DB::table('logs')->insertGetId([
                    'user_id' => Auth::id(),
                    'user_name' => Auth::user()->name,
                    'activity' => Auth::user()->name . ' telah merubah data pemohon Pindah Datang dengan NIK ' . $request->nik,
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
        DB::table('pindah_datang')->where('id', '=', $request->id)->delete();

        DB::table('logs')->insertGetId([
            'user_id' => Auth::id(),
            'user_name' => Auth::user()->name,
            'activity' => Auth::user()->name . ' telah menghapus data pemohon Pindah Datang dengan NIK ' . $request->nik,
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
    public function getPindahDatangData(Request $request)
    {
        $pindahdatangs = DB::table('pindah_datang')->select([
        'id', 'no_kk', 'nik', 'nama', 'jenis_kelamin',
        'tempat_lahir', 'tanggal_lahir', 'kewarganegaraan',
        'gol_darah', 'agama', 'status_perkawinan', 'shdk', 
        'pendidikan', 'pekerjaan', 'alamat_lama', 'alamat_sekarang',
        'rt', 'rw', 'kelurahan', 'status', 'created_at', 'updated_at', 'user_id']);

        return DataTables::of($pindahdatangs)
                            ->filter( function ($query) use ($request) {
                                if ($request->input('nik')) {
                                    $query->where('nik', 'like', "%{$request->nik}%");
                                }
                                if ($request->input('nama')) {
                                    $query->where('nama', 'like', "%{$request->nama}%");
                                }
                                if ($request->input('jenis_kelamin')) {
                                    $query->where('jenis_kelamin', '=', $request->jenis_kelamin);
                                }
                                if ($request->input('tempat_lahir')) {
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
                            ->addColumn('action', function($pindahdatang) {
                                return '
                                        <button 
                                        class="btn btn-warning btn-xs pindahdatang-edit"
                                        data-toggle="modal"
                                        data-target="#pindahdatang-edit-modal"
                                        data-id="'. $pindahdatang->id .'"
                                        data-no_kk="'. $pindahdatang->no_kk .'"
                                        data-nik="'. $pindahdatang->nik .'"
                                        data-nama="'. $pindahdatang->nama .'"
                                        data-jenis_kelamin="'. $pindahdatang->jenis_kelamin .'"
                                        data-tempat_lahir="'. $pindahdatang->tempat_lahir .'"
                                        data-tanggal_lahir="'. $pindahdatang->tanggal_lahir .'"
                                        data-kewarganegaraan="'. $pindahdatang->kewarganegaraan .'"
                                        data-gol_darah="'. $pindahdatang->gol_darah .'"
                                        data-agama="'. $pindahdatang->agama .'"
                                        data-status_perkawinan="'. $pindahdatang->status_perkawinan .'"
                                        data-shdk="'. $pindahdatang->shdk .'"
                                        data-pendidikan="'. $pindahdatang->pendidikan .'"
                                        data-pekerjaan="'. $pindahdatang->pekerjaan .'"
                                        data-alamat_lama="'. $pindahdatang->alamat_lama .'"
                                        data-alamat_sekarang="'. $pindahdatang->alamat_sekarang .'"
                                        data-rt="'. $pindahdatang->rt .'"
                                        data-rw="'. $pindahdatang->rw .'"
                                        data-kelurahan="'. $pindahdatang->kelurahan .'"
                                        data-status="'. $pindahdatang->status .'"
                                        data-user_id="'. $pindahdatang->user_id .'"
                                        ><i class="md-edit"></i></button>
                                        <button
                                        class="btn btn-danger btn-xs pindahdatang-delete"
                                        data-id="'. $pindahdatang->id .'"
                                        data-nik="'. $pindahdatang->nik .'"
                                        ><i class="md-delete"></i></button>';
                            })
                            ->make(true);
    }

    /**
    * Generate dynamic reports
    *
    * @return \Illuminate\Http\Response
    */
    public function generatePindahDatangReports(Request $request) {
        
        $query = DB::table('pindah_datang')->select(['nik', 'nama', 'alamat_lama', 'alamat_sekarang', 'rt', 'rw', 'kelurahan']);

        if ($request->input('nik')) {
            $query->where('nik', 'like', "%{$request->nik}%");
        }
        if ($request->input('nama')) {
            $query->where('nama', 'like', "%{$request->nama}%");
        }
        if ($request->input('jenis_kelamin')) {
            $query->where('jenis_kelamin', '=', $request->jenis_kelamin);
        }
        if ($request->input('tempat_lahir')) {
            $query->where('tempat_lahir', 'like', $request->tempat_lahir);
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
            'pindahdatang' => $query->get(),
            'count' => $query->count()
        ]);
    }

    /**
    * Archive Pindah Datang data
    *
    * @return \Illuminate\Http\Response
    */
    public function generatePindahDatangArchives(Request $request) {
        $pindahdatang = DB::table('pindah_datang')->where('created_at', 'like', "%{$request->tanggal}%")->orderBy('created_at', 'ASC')->get();
        $formattedDate = Carbon::parse($request->tanggal)->format('d F Y');

        return view('admin.reports.a4.archive', ['pindahdatang' => $pindahdatang, 'formattedDate' => $formattedDate]);
    }
}
