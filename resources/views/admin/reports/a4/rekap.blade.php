<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
<style type="text/css">
    body {
	   background-color: white;
	   color: black;
    }
</style>
<body>
    <div class="container">
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
        		<hr style="border-top: 1px solid black;">
        	</div>
        </div>

        <div class="row">
        	<div class="col-lg-12">
                <h4 class="text-center">Rekapitulasi Total Pemohon Berkas</h4>
                <p>Per Tanggal : {{ $formattedStarts }} - {{ $formattedEnds }}</p>
        	</div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Pemohon E-KTP</th>
                            <th>Pemohon Kartu Keluarga</th>
                            <th>Pemohon Legalisir Berkas</th>
                            <th>Penduduk Pindah Datang</th>
                            <th>Penduduk Pindah Keluar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $ktp }}</td>
                            <td>{{ $kk }}</td>
                            <td>{{ $legalisir }}</td>
                            <td>{{ $pindahdatang }}</td>
                            <td>{{ $pindahkeluar }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
    	</div>

    	<div class="row" style="padding: 10px">
    		<div class="col-lg-12">
    			<p style="float: left;">Camat,</p>
                <p style="float: right;">Bandung, {{ date('d/m/Y') }}</p>
                <br>
                <br>
                <br>
                <br>
                <br>
                <p style="float: left;">Anton Sugiana</p>
                <p style="float: right;">{{ Auth::user()->name }}</p>
    		</div>
    	</div>
	</div>
</body>