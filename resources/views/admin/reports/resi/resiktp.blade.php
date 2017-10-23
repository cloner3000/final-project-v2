<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
<style type="text/css">

</style>
<body>
    <div class="container">

        <div class="row">
            <div class="col-lg-2">
                <img src="{{ asset('images/bdg.png')}}" style="position: absolute; margin-top: 25px" height="100px" width="140px">
            </div>
            <div class="col-lg-10" style="margin-top: 20px">
                <h3 class="text-center">
                    PEMERINTAH KOTA BANDUNG
                </h3>
                <h4 class="text-center">
                    KECAMATAN COBLONG
                </h4>
                <p class="text-center">
                    Alamat : Jl. Sangkuriang No. 10 Bandung
                </p>
            </div>
        </div>
        <br>

        <div class="row">
        	<div class="col-lg-12">
            	<h4 class="text-center">Resi E-KTP</h4>
        	</div>
        </div><br>

        <div class="row">
            <div class="col-lg-12" style="margin-top: 10px; margin-bottom: 60px; margin-left: 10px;">
				<p>Nomor Kartu Keluarga : <strong>{{ $ktp->no_kk }}</strong></p>
                <p>NIK                  : <strong>{{ $ktp->nik }}</strong></p>
				<p>Nama                 : <strong>{{ $ktp->nama }}</strong></p>
				<p>Tempat/Tanggal Lahir : <strong>{{ $ktp->tempat_lahir }}</strong> / <strong>{{ $ktp->tanggal_lahir }}</strong></p>
				<p>Status               : <strong>{{ $ktp->status_perkawinan }}</strong></p>
				<p>Pendidikan           : <strong>{{ $ktp->pendidikan }}</strong></p>
				<p>Pekerjaan            : <strong>{{ $ktp->pekerjaan }}</strong></p>
				<p>Alamat               : <strong>{{ $ktp->alamat }}</strong></p>
				<p>RT/RW                : <strong>{{ $ktp->rt }}</strong> / <strong>{{ $ktp->rw }}</strong></p>
				<p>Kelurahan            : <strong>{{ $ktp->kelurahan }}</strong></p>
            </div>
    	</div>

    	<div class="row" style="padding: 10px">
    		<div class="col-lg-12">
    			<p style="float: left;">Pemohon</p>
                <p style="float: right;">Bandung, {{ date('d F Y') }}</p>
                <br>
                <br>
                <br>
                <br>
                <br>
                <p style="float: left;">{{ $ktp->nama }}</p>
                <p style="float: right;">{{ Auth::user()->name }}</p>
    		</div>
    	</div>

	</div>
</body>