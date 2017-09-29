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
                        Pemerintah Kota Bandung
                    </h3>
                    <h4 class="text-center">
                        Kecamatan Coblong
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
                	<h4 class="text-center">Resi E-KTP</h4>
                	<h6 class="text-center">Tanggal: {{ date('d') }}/{{ date('m')}}/{{ date('Y') }}</h6>
            	</div>
            </div>

            <div class="row">
	            <div class="col-lg-12">
	                <pre>
						<p>NIK                  : <strong>{{ $ktp->nik }}</strong></p>
						<p>Nama                 : <strong>{{ $ktp->nama }}</strong></p>
						<p>Tempat/Tanggal Lahir : <strong>{{ $ktp->tempat_lahir }}</strong> / <strong>{{ $ktp->tanggal_lahir }}</strong></p>
						<p>Status               : <strong>{{ $ktp->status_perkawinan }}</strong></p>
						<p>Pendidikan           : <strong>{{ $ktp->pendidikan }}</strong></p>
						<p>Pekerjaan            : <strong>{{ $ktp->pekerjaan }}</strong></p>
						<p>Alamat               : <strong>{{ $ktp->alamat }}</strong></p>
						<p>RT/RW                : <strong>{{ $ktp->rt }}</strong> / <strong>{{ $ktp->rw }}</strong></p>
						<p>Kelurahan            : <strong>{{ $ktp->kelurahan }}</strong></p>
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
                    <p style="float: left;">{{ $ktp->nama }}</p>
                    <p style="float: right;">{{ Auth::user()->name }}</p>
        		</div>
        	</div>
    	</div>
	</div>
</body>