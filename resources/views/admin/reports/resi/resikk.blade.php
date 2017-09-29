<link href="css/app.css" rel="stylesheet" type="text/css">
<style type="text/css">
    body {
	   background-color: white;
	   color: black;
    }
    pre {
    	background-color: white;
    	border: transparent;
    }
</style>
<body>
    <div class="container">
        <div class="box">
            <div class="row">
                <div class="col-lg-2">
                    <img height="60px" src="{{ asset('images/bdg.png')}}" style="position: absolute; margin-top: 35px" width="80px">
                </div>
                <div class="col-lg-10">
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

            <div class="row">
            	<div class="col-lg-12">
            		<hr style="width: 80%; border-top: 1px solid black;">
            	</div>
            </div>

            <div class="row">
            	<div class="col-lg-12">
                	<h4 class="text-center">Resi Pengambilan Kartu Keluarga</h4>
                	<h6 class="text-center">Tanggal: {{ date('d') }}/{{ date('m')}}/{{ date('Y') }}</h6>
            	</div>
            </div>

            <div class="row">
	            <div class="col-lg-12">
	                <pre>
						<p>NIK                 : <strong>{{ $kk->nik }}</strong></p>
						<p>Nama                : <strong>{{ $kk->nama }}</strong></p>
						<p>Alamat              : <strong>{{ $kk->alamat }}</strong></p>
						<p>RT/RW               : <strong>{{ $kk->rt }}</strong> / <strong>{{ $kk->rw }}</strong></p>
						<p>Kelurahan           : <strong>{{ $kk->kelurahan }}</strong></p>
						<p>Jumlah Pengikut     : <strong>{{ $kk->jumlah_pengikut }}</strong></p>
					</pre>
	            </div>
        	</div>

        	<div class="row" style="padding: 10px">
        		<div class="col-lg-12">
        			<p style="float: left;">Pemohon</p>
                    <p style="float: right;">Bandung, {{ date('d-m-Y') }}</p>
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
	</div>
</body>