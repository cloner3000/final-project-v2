<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
<style type="text/css">
    body {
	   background-color: white;
	   color: black;
    }
</style>
<body>
    <div class="container">

        @if (isset($ktp))
            <div class="row">
                <div class="col-lg-12">
                    <p>Tanggal : {{ $formattedDate }}</p>

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th rowspan="2" class="text-center">No</th>
                                <th colspan="8" class="text-center">Identitas Diri</th>
                            </tr>
                            <tr>
                                <!-- Identitas Diri -->
                                <th class="text-center">No KK</th>
                                <th class="text-center">NIK</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Jenis Kelamin</th>
                                <th class="text-center">Tempat Lahir</th>
                                <th class="text-center">Tanggal Lahir</th>
                                <th class="text-center">Kewarganegaraan</th>
                                <th class="text-center">Gol. Darah</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ktp as $row)
                                <tr>
                                    <!-- Identitas Diri -->
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">{{ $row->no_kk }}</td>
                                    <td class="text-center">{{ $row->nik }}</td>
                                    <td>{{ $row->nama }}</td>
                                    <td class="text-center">{{ $row->jenis_kelamin }}</td>
                                    <td>{{ $row->tempat_lahir }}</td>
                                    <td class="text-center">{{ Carbon\Carbon::parse($row->tanggal_lahir)->format('d/m/Y') }}</td>
                                    <td class="text-center">{{ $row->kewarganegaraan }}</td>
                                    <td class="text-center">{{ $row->gol_darah }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <hr style="border-top: 3px double black;">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th colspan="6" class="text-center">Keyakinan &amp; Status</th>
                            </tr>
                            <tr>
                                <!-- Keyakinan & Status -->
                                <th class="text-center">Agama</th>
                                <th class="text-center">Status Perkawinan</th>
                                <th class="text-center">Pendidikan</th>
                                <th class="text-center">Pekerjaan</th>
                                <th class="text-center">Nama Ayah</th>
                                <th class="text-center">Nama Ibu</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ktp as $row)
                                <tr>
                                    <!-- Keyakinan & Status -->
                                    <td class="text-center">{{ $row->agama }}</td>
                                    <td class="text-center">{{ $row->status_perkawinan }}</td>
                                    <td class="text-center">{{ $row->pendidikan }}</td>
                                    <td>{{ $row->pekerjaan }}</td>
                                    <td>{{ $row->nama_ayah }}</td>
                                    <td>{{ $row->nama_ibu }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <hr style="border-top: 3px double black;">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th colspan="4" class="text-center">Alamat Tinggal</th>
                            </tr>
                            <tr>
                                <!-- Alamat Tinggal -->
                                <th class="text-center">Alamat</th>
                                <th class="text-center">RT</th>
                                <th class="text-center">RW</th>
                                <th class="text-center">Kelurahan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ktp as $row)
                                <tr>
                                    <!-- Alamat Tinggal -->
                                    <td>{{ $row->alamat }}</td>
                                    <td class="text-center">{{ $row->rt }}</td>
                                    <td class="text-center">{{ $row->rw }}</td>
                                    <td>{{ $row->kelurahan }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        @elseif (isset($kk))
            <div class="row">
                <div class="col-lg-12">
                    <p>Tanggal : {{ $formattedDate }}</p>

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th rowspan="2" class="text-center">No</th>
                                <th colspan="5" class="text-center">Identitas Diri</th>
                            </tr>
                            <tr>
                                <!-- Identitas Diri -->
                                <th class="text-center">Nomor KK</th>
                                <th class="text-center">NIK</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Jenis Kelamin</th>
                                <th class="text-center">Jumlah Pengikut</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kk as $row)
                                <tr>
                                    <!-- Identitas Diri -->
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $row->no_kk }}</td>
                                    <td>{{ $row->nik }}</td>
                                    <td>{{ $row->nama }}</td>
                                    <td class="text-center">{{ $row->jenis_kelamin }}</td>
                                    <td class="text-center">{{ $row->jumlah_pengikut }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <hr style="border-top: 3px double black;">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th colspan="4" class="text-center">Alamat Tinggal</th>
                            </tr>
                            <tr>
                                <!-- Alamat Tinggal -->
                                <th class="text-center">Alamat</th>
                                <th class="text-center">RT</th>
                                <th class="text-center">RW</th>
                                <th class="text-center">Kelurahan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kk as $row)
                                <tr>
                                    <!-- Alamat Tinggal -->
                                    <td>{{ $row->alamat }}</td>
                                    <td class="text-center">{{ $row->rt }}</td>
                                    <td class="text-center">{{ $row->rw }}</td>
                                    <td>{{ $row->kelurahan }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        @elseif (isset($legalisir))
            <div class="row">
                <div class="col-lg-12">
                    <p>Tanggal : {{ $formattedDate }}</p>

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th rowspan="2" class="text-center">No</th>
                                <th colspan="4" class="text-center">Identitas Diri</th>
                            </tr>
                            <tr>
                                <!-- Identitas Diri -->
                                <th class="text-center">NIK</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Jenis Kelamin</th>
                                <th class="text-center">Jenis Berkas</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($legalisir as $row)
                                <tr>
                                    <!-- Identitas Diri -->
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $row->nik }}</td>
                                    <td>{{ $row->nama }}</td>
                                    <td class="text-center">{{ $row->jenis_kelamin }}</td>
                                    <td class="text-center">{{ $row->jenis_berkas }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <hr style="border-top: 3px double black;">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th colspan="4" class="text-center">Alamat Tinggal</th>
                            </tr>
                            <tr>
                                <!-- Alamat Tinggal -->
                                <th class="text-center">Alamat</th>
                                <th class="text-center">RT</th>
                                <th class="text-center">RW</th>
                                <th class="text-center">Kelurahan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($legalisir as $row)
                                <tr>
                                    <!-- Alamat Tinggal -->
                                    <td>{{ $row->alamat }}</td>
                                    <td class="text-center">{{ $row->rt }}</td>
                                    <td class="text-center">{{ $row->rw }}</td>
                                    <td>{{ $row->kelurahan }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @elseif (isset($pindahdatang))
            <div class="row">
                <div class="col-lg-12">
                    <p>Tanggal : {{ $formattedDate }}</p>

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th rowspan="2" class="text-center">No</th>
                                <th colspan="8" class="text-center">Identitas Diri</th>
                            </tr>
                            <tr>
                                <!-- Identitas Diri -->
                                <th class="text-center">Nomor KK</th>
                                <th class="text-center">NIK</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Jenis Kelamin</th>
                                <th class="text-center">Tempat Lahir</th>
                                <th class="text-center">Tanggal Lahir</th>
                                <th class="text-center">Kewarganegaraan</th>
                                <th class="text-center">Gol. Darah</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pindahdatang as $row)
                                <tr>
                                    <!-- Identitas Diri -->
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">{{ $row->no_kk }}</td>
                                    <td class="text-center">{{ $row->nik }}</td>
                                    <td>{{ $row->nama }}</td>
                                    <td class="text-center">{{ $row->jenis_kelamin }}</td>
                                    <td>{{ $row->tempat_lahir }}</td>
                                    <td class="text-center">{{ Carbon\Carbon::parse($row->tanggal_lahir)->format('d/m/Y') }}</td>
                                    <td class="text-center">{{ $row->kewarganegaraan }}</td>
                                    <td class="text-center">{{ $row->gol_darah }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <hr style="border-top: 3px double black;">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th colspan="5" class="text-center">Keyakinan &amp; Status</th>
                            </tr>
                            <tr>
                                <!-- Keyakinan & Status -->
                                <th class="text-center">Agama</th>
                                <th class="text-center">Status Perkawinan</th>
                                <th class="text-center">SHDK</th>
                                <th class="text-center">Pendidikan</th>
                                <th class="text-center">Pekerjaan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pindahdatang as $row)
                                <tr>
                                    <!-- Keyakinan & Status -->
                                    <td class="text-center">{{ $row->agama }}</td>
                                    <td class="text-center">{{ $row->status_perkawinan }}</td>
                                    <td class="text-center">{{ $row->shdk }}</td>
                                    <td class="text-center">{{ $row->pendidikan }}</td>
                                    <td>{{ $row->pekerjaan }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <hr style="border-top: 3px double black;">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th colspan="5" class="text-center">Alamat Tinggal</th>
                            </tr>
                            <tr>
                                <!-- Alamat Tinggal -->
                                <th class="text-center">Alamat Sebelumnya</th>
                                <th class="text-center">Alamat Sekarang</th>
                                <th class="text-center">RT</th>
                                <th class="text-center">RW</th>
                                <th class="text-center">Kelurahan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pindahdatang as $row)
                                <tr>
                                    <!-- Alamat Tinggal -->
                                    <td>{{ $row->alamat_lama }}</td>
                                    <td>{{ $row->alamat_sekarang }}</td>
                                    <td class="text-center">{{ $row->rt }}</td>
                                    <td class="text-center">{{ $row->rw }}</td>
                                    <td>{{ $row->kelurahan }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-lg-12">
                    <p>Tanggal : {{ $formattedDate }}</p>

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th rowspan="2" class="text-center">No</th>
                                <th colspan="8" class="text-center">Identitas Diri</th>
                            </tr>
                            <tr>
                                <!-- Identitas Diri -->
                                <th class="text-center">Nomor KK</th>
                                <th class="text-center">NIK</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Jenis Kelamin</th>
                                <th class="text-center">Tempat Lahir</th>
                                <th class="text-center">Tanggal Lahir</th>
                                <th class="text-center">Kewarganegaraan</th>
                                <th class="text-center">Gol. Darah</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pindahkeluar as $row)
                                <tr>
                                    <!-- Identitas Diri -->
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">{{ $row->no_kk }}</td>
                                    <td class="text-center">{{ $row->nik }}</td>
                                    <td>{{ $row->nama }}</td>
                                    <td class="text-center">{{ $row->jenis_kelamin }}</td>
                                    <td>{{ $row->tempat_lahir }}</td>
                                    <td class="text-center">{{ Carbon\Carbon::parse($row->tanggal_lahir)->format('d/m/Y') }}</td>
                                    <td class="text-center">{{ $row->kewarganegaraan }}</td>
                                    <td class="text-center">{{ $row->gol_darah }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <hr style="border-top: 3px double black;">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th colspan="5" class="text-center">Keyakinan &amp; Status</th>
                            </tr>
                            <tr>
                                <!-- Keyakinan & Status -->
                                <th class="text-center">Agama</th>
                                <th class="text-center">Status Perkawinan</th>
                                <th class="text-center">SHDK</th>
                                <th class="text-center">Pendidikan</th>
                                <th class="text-center">Pekerjaan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pindahkeluar as $row)
                                <tr>
                                    <!-- Keyakinan & Status -->
                                    <td class="text-center">{{ $row->agama }}</td>
                                    <td class="text-center">{{ $row->status_perkawinan }}</td>
                                    <td class="text-center">{{ $row->shdk }}</td>
                                    <td class="text-center">{{ $row->pendidikan }}</td>
                                    <td>{{ $row->pekerjaan }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <hr style="border-top: 3px double black;">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th colspan="5" class="text-center">Alamat Tinggal</th>
                            </tr>
                            <tr>
                                <!-- Alamat Tinggal -->
                                <th class="text-center">Alamat Sekarang</th>
                                <th class="text-center">RT</th>
                                <th class="text-center">RW</th>
                                <th class="text-center">Kelurahan</th>
                                <th class="text-center">Alamat Tujuan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pindahkeluar as $row)
                                <tr>
                                    <!-- Alamat Tinggal -->
                                    <td>{{ $row->alamat_sekarang }}</td>
                                    <td class="text-center">{{ $row->rt }}</td>
                                    <td class="text-center">{{ $row->rw }}</td>
                                    <td>{{ $row->kelurahan }}</td>
                                    <td>{{ $row->alamat_tujuan }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
        
	</div>
</body>