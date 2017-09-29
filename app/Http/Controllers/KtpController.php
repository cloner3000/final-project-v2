<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DataTables;
use Validator;
use DB;
use Auth;
use PDF;

class KtpController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pelayanan.ktp-crud.index');
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
            'nik'    => 'required|numeric',
            'nama'   => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'kewarganegaraan' => 'required',
            'gol_darah' => 'required',
            'agama' => 'required',
            'status_perkawinan' => 'required',
            'pendidikan' => 'required',
            'pekerjaan' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'alamat' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'kelurahan' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->messages()]);
        } else {
            DB::table('ktp')->insertGetId([
                'nik' => $request->nik,
                'nama' => $request->nama,
                'jenis_kelamin' => $request->jenis_kelamin,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'kewarganegaraan' => $request->kewarganegaraan,
                'gol_darah' => $request->gol_darah,
                'agama' => $request->agama,
                'status_perkawinan' => $request->status_perkawinan,
                'pendidikan' => $request->pendidikan,
                'pekerjaan' => $request->pekerjaan,
                'nama_ayah' => $request->nama_ayah,
                'nama_ibu' => $request->nama_ibu,
                'alamat' => $request->alamat,
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
                'activity' => Auth::user()->name . ' telah menambahkan data pemohon E-KTP dengan NIK ' . $request->nik,
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
            'nik'    => 'required|numeric',
            'nama'   => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'kewarganegaraan' => 'required',
            'gol_darah' => 'required',
            'agama' => 'required',
            'status_perkawinan' => 'required',
            'pendidikan' => 'required',
            'pekerjaan' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'alamat' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'kelurahan' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->messages()]);
        } else {
            DB::table('ktp')
                ->where('id', '=', $request->id)
                ->update([
                    'nik' => $request->nik,
                    'nama' => $request->nama,
                    'jenis_kelamin' => $request->jenis_kelamin,
                    'tempat_lahir' => $request->tempat_lahir,
                    'tanggal_lahir' => $request->tanggal_lahir,
                    'kewarganegaraan' => $request->kewarganegaraan,
                    'gol_darah' => $request->gol_darah,
                    'agama' => $request->agama,
                    'status_perkawinan' => $request->status_perkawinan,
                    'pendidikan' => $request->pendidikan,
                    'pekerjaan' => $request->pekerjaan,
                    'nama_ayah' => $request->nama_ayah,
                    'nama_ibu' => $request->nama_ibu,
                    'alamat' => $request->alamat,
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
                    'activity' => Auth::user()->name . ' telah merubah data pemohon E-KTP dengan NIK ' . $request->nik,
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
        DB::table('ktp')->where('id', '=', $request->id)->delete();

        DB::table('logs')->insertGetId([
            'user_id' => Auth::id(),
            'user_name' => Auth::user()->name,
            'activity' => Auth::user()->name . ' telah menghapus data pemohon E-KTP dengan NIK ' . $request->nik,
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
    public function getKtpData(Request $request)
    {
        $ktps = DB::table('ktp')->select([
            'id', 'nik', 'nama', 'jenis_kelamin', 'tempat_lahir',
            'tanggal_lahir', 'kewarganegaraan', 'gol_darah', 
            'agama', 'status_perkawinan', 'pendidikan', 'pekerjaan',
            'nama_ayah', 'nama_ibu', 'alamat', 'rt', 'rw', 
            'kelurahan', 'status', 'created_at', 'updated_at' ,'user_id'
        ]);

        return DataTables::of($ktps)
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
                    if ($request->has('status')) {
                        $query->where('status', '=', $request->status);
                    }
                    if ($request->has('kelurahan')) {
                        $query->where('kelurahan', 'like', "%{$request->kelurahan}%");
                    }
                    if ($request->input('tanggal_dari') && $request->input('tanggal_sampai')) {
                        $query->whereBetween('created_at', [$request->tanggal_dari, $request->tanggal_sampai]);
                    }
                })
                ->editColumn('created_at', function ($user) {
                    return $user->created_at ? with(new Carbon($user->created_at))->format('Y/m/d') : '';
                })
                ->addColumn('action', function($ktp) {
                    return '<button 
                    class="btn btn-info btn-xs ktp-show"
                    data-toggle="modal"
                    data-target="#ktp-show-modal"
                    data-id="'. $ktp->id .'"
                    data-nik="'. $ktp->nik .'"
                    data-nama="'. $ktp->nama .'"
                    data-jenis_kelamin="'. $ktp->jenis_kelamin .'"
                    data-tempat_lahir="'. $ktp->tempat_lahir .'"
                    data-tanggal_lahir="'. $ktp->tanggal_lahir .'"
                    data-kewarganegaraan="'. $ktp->kewarganegaraan .'"
                    data-gol_darah="'. $ktp->gol_darah .'"
                    data-agama="'. $ktp->agama .'"
                    data-status_perkawinan="'. $ktp->status_perkawinan .'"
                    data-pendidikan="'. $ktp->pendidikan .'"
                    data-pekerjaan="'. $ktp->pekerjaan .'"
                    data-nama_ayah="'. $ktp->nama_ayah .'"
                    data-nama_ibu="'. $ktp->nama_ibu .'"
                    data-alamat="'. $ktp->alamat .'"
                    data-rt="'. $ktp->rt .'"
                    data-rw="'. $ktp->rw .'"
                    data-kelurahan="'. $ktp->kelurahan .'"
                    data-status="'. $ktp->status .'"
                    data-user_id="'. $ktp->user_id .'"
                    ><i class="md-eye"></i></button>
                    <button 
                    class="btn btn-warning btn-xs ktp-edit"
                    data-toggle="modal"
                    data-target="#ktp-edit-modal"
                    data-id="'. $ktp->id .'"
                    data-nik="'. $ktp->nik .'"
                    data-nama="'. $ktp->nama .'"
                    data-jenis_kelamin="'. $ktp->jenis_kelamin .'"
                    data-tempat_lahir="'. $ktp->tempat_lahir .'"
                    data-tanggal_lahir="'. $ktp->tanggal_lahir .'"
                    data-kewarganegaraan="'. $ktp->kewarganegaraan .'"
                    data-gol_darah="'. $ktp->gol_darah .'"
                    data-agama="'. $ktp->agama .'"
                    data-status_perkawinan="'. $ktp->status_perkawinan .'"
                    data-pendidikan="'. $ktp->pendidikan .'"
                    data-pekerjaan="'. $ktp->pekerjaan .'"
                    data-nama_ayah="'. $ktp->nama_ayah .'"
                    data-nama_ibu="'. $ktp->nama_ibu .'"
                    data-alamat="'. $ktp->alamat .'"
                    data-rt="'. $ktp->rt .'"
                    data-rw="'. $ktp->rw .'"
                    data-kelurahan="'. $ktp->kelurahan .'"
                    data-status="'. $ktp->status .'"
                    data-user_id="'. $ktp->user_id .'"
                    ><i class="md-edit"></i></button>
                    <button
                    class="btn btn-danger btn-xs ktp-delete"
                    data-id="'. $ktp->id .'"
                    data-nik="'. $ktp->nik .'"
                    ><i class="md-delete"></i></button>';
                })->make(true);
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

        $query = DB::table('ktp')->select(['nik', 'nama', 'jenis_kelamin', 'alamat', 'rt', 'rw', 'kelurahan'])->whereBetween('created_at', [$startsAt, $endsAt])->get();
        $count = DB::table('ktp')->whereBetween('created_at', [$startsAt, $endsAt])->count();

        $pdf = PDF::loadView('admin.reports.a4.reports', [
            'ktp' => $query,
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

        $query = DB::table('ktp')->select(['nik', 'nama', 'jenis_kelamin', 'alamat', 'rt', 'rw', 'kelurahan'])->where('kelurahan', '=', $kelurahan)->get();
        $count = DB::table('ktp')->where('kelurahan', '=', $kelurahan)->count();

        $pdf = PDF::loadView('admin.reports.a4.reports', [
            'kelurahan' => $kelurahan,
            'ktp' => $query,
            'count' => $count,
        ]);

        return $pdf->stream();
    }

    /**
    * Generate reports filter by kelurahan.
    *
    * @return \Illuminate\Http\Response
    */
    public function cetakResiKtp(Request $request) {
        
        $query = DB::table('ktp')->where('nik', '=', $request->nik)->first();

        $pdf = PDF::loadView('admin.reports.resi.resiktp', [
            'ktp' => $query
        ]);

        return $pdf->setPaper('A4', 'portrait')->stream();
    }
}
