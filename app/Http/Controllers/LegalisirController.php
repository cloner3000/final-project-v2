<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DataTables;
use Validator;
use DB;
use Auth;
use PDF;

class LegalisirController extends Controller
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
        return view('pelayanan.legalisir-crud.index');
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
            'nik' => 'required|numeric',
            'nama' => 'required',
            'alamat' => 'required',
            'rt' => 'required|integer',
            'rw' => 'required|integer',
            'kelurahan' => 'required',
            'jenis_berkas' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->messages()], 400);
        } else {
            DB::table('legalisir')->insertGetId([
                'nik' => $request->nik,
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'rt' => $request->rt,
                'rw' => $request->rw,
                'kelurahan' => $request->kelurahan,
                'jenis_berkas' => $request->jenis_berkas,
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'user_id' => Auth::id()
            ]);

            DB::table('logs')->insertGetId([
                'user_id' => Auth::id(),
                'user_name' => Auth::user()->name,
                'activity' => Auth::user()->name . ' telah menambahkan data pemohon Legalisir dengan NIK ' . $request->nik,
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
            'nik' => 'required|numeric',
            'nama' => 'required',
            'alamat' => 'required',
            'rt' => 'required|integer',
            'rw' => 'required|integer',
            'kelurahan' => 'required',
            'jenis_berkas' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->messages()], 400);
        } else {
            DB::table('legalisir')
                ->where('id', '=', $request->id)
                ->update([
                'nik' => $request->nik,
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'rt' => $request->rt,
                'rw' => $request->rw,
                'kelurahan' => $request->kelurahan,
                'jenis_berkas' => $request->jenis_berkas,
                'status' => $request->status,
                'updated_at' => Carbon::now(),
                'user_id' => Auth::id()
            ]);

            DB::table('logs')->insertGetId([
                'user_id' => Auth::id(),
                'user_name' => Auth::user()->name,
                'activity' => Auth::user()->name . ' telah merubah data pemohon Legalisir dengan NIK ' . $request->nik,
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
        DB::table('legalisir')->where('id', '=', $request->id)->delete();

        DB::table('logs')->insertGetId([
            'user_id' => Auth::id(),
            'user_name' => Auth::user()->name,
            'activity' => Auth::user()->name . ' telah menghapus data pemohon Legalisir dengan NIK ' . $request->nik,
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
    public function getLegalisirData(Request $request)
    {
        $legalisirs = DB::table('legalisir')->select(['id', 'nik', 'nama', 'alamat', 'rt', 'rw', 'kelurahan', 'jenis_berkas', 'status', 'created_at', 'updated_at', 'user_id']);
        
        return DataTables::of($legalisirs)
                            ->filter(function($query) use ($request) {
                                if ($request->input('nik')) {
                                    $query->where('nik', 'like', "%{$request->nik}%");
                                }
                                if ($request->input('nama')) {
                                    $query->where('nama', 'like', "%{$request->nama}%");
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
                                if ($request->input('jenis_berkas')) {
                                    $query->where('jenis_berkas', '=', $request->jenis_berkas);
                                }
                                if ($request->has('status')) {
                                    $query->where('status', '=', $request->status);
                                }
                                if ($request->input('tanggal_dari') && $request->input('tanggal_sampai')) {
                                    $query->whereBetween('created_at', [$request->tanggal_dari, $request->tanggal_sampai]);
                                }
                            })
                            ->editColumn('created_at', function ($user) {
                                return $user->created_at ? with(new Carbon($user->created_at))->format('Y/m/d') : '';
                            })
                            ->addColumn('action', function($legalisir)
                            {
                                return '<button 
                                        class="btn btn-info btn-xs legalisir-show"
                                        data-toggle="modal"
                                        data-target="#legalisir-show-modal"
                                        data-id="'. $legalisir->id .'"
                                        data-nik="'. $legalisir->nik .'"
                                        data-nama="'. $legalisir->nama .'"
                                        data-alamat="'. $legalisir->alamat .'"
                                        data-rt="'. $legalisir->rt .'"
                                        data-rw="'. $legalisir->rw .'"
                                        data-kelurahan="'. $legalisir->kelurahan .'"
                                        data-jenis_berkas="'. $legalisir->jenis_berkas .'"
                                        data-status="'. $legalisir->status .'"
                                        data-user_id="'. $legalisir->user_id .'"
                                        ><i class="md-eye"></i></button>
                                        <button 
                                        class="btn btn-warning btn-xs legalisir-edit"
                                        data-toggle="modal"
                                        data-target="#legalisir-edit-modal"
                                        data-id="'. $legalisir->id .'"
                                        data-nik="'. $legalisir->nik .'"
                                        data-nama="'. $legalisir->nama .'"
                                        data-alamat="'. $legalisir->alamat .'"
                                        data-rt="'. $legalisir->rt .'"
                                        data-rw="'. $legalisir->rw .'"
                                        data-kelurahan="'. $legalisir->kelurahan .'"
                                        data-jenis_berkas="'. $legalisir->jenis_berkas .'"
                                        data-status="'. $legalisir->status .'"
                                        data-user_id="'. $legalisir->user_id .'"
                                        ><i class="md-edit"></i></button>
                                        <button
                                        class="btn btn-danger btn-xs legalisir-delete"
                                        data-id="'. $legalisir->id .'"
                                        data-nik="'. $legalisir->nik .'"
                                        ><i class="md-delete"></i></button>';
                            })
                            ->make(true);    
    }

    /**
    * Generate dynamic reports
    *
    * @return \Illuminate\Http\Response
    */
    public function generateLegalisirReports(Request $request) {
        
        $query = DB::table('legalisir')->select(['nik', 'nama', 'alamat', 'rt', 'rw', 'kelurahan', 'jenis_berkas']);

        if ($request->input('nik')) {
            $query->where('nik', 'like', "%{$request->nik}%");
        }
        if ($request->input('nama')) {
            $query->where('nama', 'like', "%{$request->nama}%");
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
        if ($request->input('jenis_berkas')) {
            $query->where('jenis_berkas', '=', $request->jenis_berkas);
        }
        if ($request->input('status')) {
            $query->where('status', '=', $request->status);
        }
        if ($request->input('tanggal_dari') && $request->input('tanggal_sampai')) {
            $query->whereBetween('created_at', [$request->tanggal_dari, $request->tanggal_sampai]);
        }

        return view('admin.reports.a4.dynamic', [
            'legalisir' => $query->get(),
            'count' => $query->count()
        ]);
    }

    /**
    * Generate reports filter by date.
    *
    * @return \Illuminate\Http\Response
    */
    public function displayReportsByDate(Request $request) {
        $startsAt = $request->input('tanggal_dari'); 
        $endsAt = $request->input('tanggal_sampai');

        $formattedStarts = Carbon::parse($startsAt)->format('d/m/Y');
        $formattedEnds = Carbon::parse($endsAt)->format('d/m/Y');

        $query = DB::table('legalisir')->select(['nik', 'nama', 'alamat', 'rt', 'rw', 'kelurahan', 'jenis_berkas'])->whereBetween('created_at', [$startsAt, $endsAt])->get();
        $count = DB::table('legalisir')->whereBetween('created_at', [$startsAt, $endsAt])->count();

        return view('admin.reports.a4.reports', [
            'legalisir' => $query,
            'count' => $count,
            'formattedStarts' => $formattedStarts,
            'formattedEnds' => $formattedEnds
        ]);
    }

    /**
    * Generate reports filter by kelurahan.
    *
    * @return \Illuminate\Http\Response
    */
    public function displayReportsByKelurahan(Request $request) {
        $kelurahan = $request->input('kelurahan'); 

        $query = DB::table('legalisir')->select(['nik', 'nama', 'alamat', 'rt', 'rw', 'kelurahan', 'jenis_berkas'])->where('kelurahan', '=', $kelurahan)->get();
        $count = DB::table('legalisir')->where('kelurahan', '=', $kelurahan)->count();

        return view('admin.reports.a4.reports', [
            'kelurahan' => $kelurahan,
            'legalisir' => $query,
            'count' => $count,
        ]);
    }
}
