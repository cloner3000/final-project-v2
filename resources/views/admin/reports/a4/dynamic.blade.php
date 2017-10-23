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

        <hr style="border-top: 3px double black;">

        <div class="row">
        	<div class="col-lg-12">
                @if (isset($ktp))
            	   <h4 class="text-center">Laporan Pemohon E-KTP</h4>
                @elseif (isset($kk))
                    <h4 class="text-center">Laporan Pemohon Kartu Keluarga</h4>
                @elseif (isset($legalisir))
                    <h4 class="text-center">Laporan Pemohon Legalisir</h4>
                @elseif (isset($pindahdatang))
                    <h4 class="text-center">Laporan Penduduk Pindah Datang</h4>
                @elseif (isset($pindahkeluar))
                    <h4 class="text-center">Laporan Penduduk Pindah Keluar</h4>
                @endif
                
                <p>Jumlah Data : {{ $count }}</p>
        	</div>
        </div>

        @if (isset($ktp))
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No KK</th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>RT/RW</th>
                                <th>Kelurahan</th>
                            </tr>
                        </thead>
                        @foreach($ktp as $row)
                        <tbody>
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->no_kk }}</td>
                                <td>{{ $row->nik }}</td>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->jenis_kelamin }}</td>
                                <td>{{ $row->alamat }}</td>
                                <td>{{ $row->rt }} / {{ $row->rw }}</td>
                                <td>{{ $row->kelurahan }}</td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
        	</div>

        @elseif (isset($kk))
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No. KK</th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>RT/RW</th>
                                <th>Kelurahan</th>
                            </tr>
                        </thead>
                        @foreach($kk as $row)
                        <tbody>
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->no_kk }}</td>
                                <td>{{ $row->nik }}</td>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->jenis_kelamin }}</td>
                                <td>{{ $row->alamat }}</td>
                                <td>{{ $row->rt }} / {{ $row->rw }}</td>
                                <td>{{ $row->kelurahan }}</td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>

        @elseif (isset($legalisir))
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>RT/RW</th>
                                <th>Kelurahan</th>
                                <th>Jenis Berkas</th>
                            </tr>
                        </thead>
                        @foreach($legalisir as $row)
                        <tbody>
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->nik }}</td>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->alamat }}</td>
                                <td>{{ $row->rt }} / {{ $row->rw }}</td>
                                <td>{{ $row->kelurahan }}</td>
                                <td>{{ $row->jenis_berkas }}</td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>

        @elseif (isset($pindahdatang))
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Alamat Lama</th>
                                <th>Alamat Sekarang</th>
                                <th>RT/RW</th>
                                <th>Kelurahan</th>
                            </tr>
                        </thead>
                        @foreach($pindahdatang as $row)
                        <tbody>
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->nik }}</td>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->alamat_lama }}</td>
                                <td>{{ $row->alamat_sekarang }}</td>
                                <td>{{ $row->rt }} / {{ $row->rw }}</td>
                                <td>{{ $row->kelurahan }}</td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>

            @else

            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <td>No</td>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Alamat Sekarang</th>
                                <th>RT/RW</th>
                                <th>Kelurahan</th>
                                <th>Alamat Tujuan</th>
                            </tr>
                        </thead>
                        @foreach($pindahkeluar as $row)
                        <tbody>
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->nik }}</td>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->alamat_sekarang }}</td>
                                <td>{{ $row->rt }} / {{ $row->rw }}</td>
                                <td>{{ $row->kelurahan }}</td>
                                <td>{{ $row->alamat_tujuan }}</td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>

        @endif

    	<div class="row" style="padding: 10px">
    		<div class="col-lg-12">
                <p style="float: right;">Bandung, {{ date('d F Y') }}</p><br>
            </div>
    	</div>
        <div class="row" style="padding: 10px">
            <div class="col-lg-12">
                <p style="float: right;"><strong>Camat Coblong</strong></p>
            </div>
        </div><br><br>
        <div class="row" style="padding: 10px">
            <div class="col-lg-12">
                <p style="float: right;"><strong>Anton Sugiana</strong></p>
            </div>
        </div>
	</div>
</body>