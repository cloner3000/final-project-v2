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
        <br><br><br>

        <div class="row">
        	<div class="col-lg-12">
            	<h4 class="text-center">Resi Pengambilan Kartu Keluarga</h4>
        	</div>
        </div><br><br>

        <div class="row">
            <div class="col-lg-12" style="margin-top: 10px; margin-bottom: 60px; margin-left: 10px;">
				<p>NIK                 : <strong>{{ $kk->nik }}</strong></p>
				<p>Nama                : <strong>{{ $kk->nama }}</strong></p>
				<p>Alamat              : <strong>{{ $kk->alamat }}</strong></p>
				<p>RT/RW               : <strong>{{ $kk->rt }}</strong> / <strong>{{ $kk->rw }}</strong></p>
				<p>Kelurahan           : <strong>{{ $kk->kelurahan }}</strong></p>
				<p>Jumlah Pengikut     : <strong>{{ $kk->jumlah_pengikut }}</strong></p>
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
                <p style="float: left;">{{ $kk->nama }}</p>
                <p style="float: right;">{{ Auth::user()->name }}</p>
    		</div>
    	</div>

	</div>
</body>