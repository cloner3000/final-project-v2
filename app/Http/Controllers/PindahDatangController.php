<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DataTables;
use Validator;
use DB;
use Auth;
use PDF;

class PindahDatangController extends Controller
{
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
            return response()->json(['errors' => $validator->messages()]);
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
            return response()->json(['errors' => $validator->messages()]);
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
                                if ($request->has('tanggal_lahir')) {
                                    $query->where('tanggal_lahir', 'like', "%{$request->tanggal_lahir}%");
                                }
                                if ($request->has('agama')) {
                                    $query->where('agama', 'like', "%{$request->agama}%");
                                }
                                if ($request->has('status_perkawinan')) {
                                    $query->where('status_perkawinan', 'like', "%{$request->status_perkawinan}%");
                                }
                                if ($request->has('shdk')) {
                                    $query->where('shdk', 'like', "%{$request->shdk}%");
                                }
                                if ($request->has('pendidikan')) {
                                    $query->where('pendidikan', 'like', "%{$request->pendidikan}%");
                                }
                                if ($request->has('pekerjaan')) {
                                    $query->where('pekerjaan', 'like', "%{$request->pekerjaan}%");
                                }
                                if ($request->has('rt')) {
                                    $query->where('rt', 'like', "%{$request->rt}%");
                                }
                                if ($request->has('rw')) {
                                    $query->where('rw', 'like', "%{$request->rw}%");
                                }
                                if ($request->has('kelurahan')) {
                                    $query->where('kelurahan', 'like', "%{$request->kelurahan}%");
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
                            ->addColumn('action', function($pindahdatang) {
                                return '<button 
                                        class="btn btn-info btn-xs pindahdatang-show"
                                        data-toggle="modal"
                                        data-target="#pindahdatang-show-modal"
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
                                        ><i class="md-eye"></i></button>
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
    * Generate reports filter by date.
    *
    * @return \Illuminate\Http\Response
    */
    public function displayReportsByDate(Request $request) {
        $startsAt = $request->input('tanggal_dari'); 
        $endsAt = $request->input('tanggal_sampai');

        $formattedStarts = Carbon::parse($startsAt)->format('d/m/Y');
        $formattedEnds = Carbon::parse($endsAt)->format('d/m/Y');

        $query = DB::table('pindah_datang')->select(['nik', 'nama', 'alamat_lama', 'alamat_sekarang', 'rt', 'rw', 'kelurahan'])->whereBetween('created_at', [$startsAt, $endsAt])->get();
        $count = DB::table('pindah_datang')->whereBetween('created_at', [$startsAt, $endsAt])->count();

        $pdf = PDF::loadView('admin.reports.a4.reports', [
            'pindahdatang' => $query,
            'count' => $count,
            'formattedStarts' => $formattedStarts,
            'formattedEnds' => $formattedEnds
        ]);

        return $pdf->stream();
    }

    /**
    * Generate reports filter by kelurahan.
    *
    * @return \Illuminate\Http\Response
    */
    public function displayReportsByKelurahan(Request $request) {
        $kelurahan = $request->input('kelurahan'); 

        $query = DB::table('pindah_datang')->select(['nik', 'nama', 'alamat_lama', 'alamat_sekarang', 'rt', 'rw', 'kelurahan'])->where('kelurahan', '=', $kelurahan)->get();
        $count = DB::table('pindah_datang')->where('kelurahan', '=', $kelurahan)->count();

        $pdf = PDF::loadView('admin.reports.a4.reports', [
            'kelurahan' => $kelurahan,
            'pindahdatang' => $query,
            'count' => $count,
        ]);

        return $pdf->stream();
    }
}
