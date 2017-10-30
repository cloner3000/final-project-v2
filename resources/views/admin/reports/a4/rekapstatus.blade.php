<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
<style type="text/css">
    body {
	   background-color: white;
	   color: black;
    }
    th, td {
        text-align: center;
    }
    .summary-ktp-cipaganti, .summary-kk-cipaganti, .summary-pindahdatang-cipaganti, .summary-pindahkeluar-cipaganti, .summary-legalisir-cipaganti,
    .summary-ktp-dago, .summary-kk-dago, .summary-pindahdatang-dago, .summary-pindahkeluar-dago, .summary-legalisir-dago,
    .summary-ktp-lebakgede, .summary-kk-lebakgede, .summary-pindahdatang-lebakgede, .summary-pindahkeluar-lebakgede, .summary-legalisir-lebakgede,
    .summary-ktp-lebaksiliwangi, .summary-kk-lebaksiliwangi, .summary-pindahdatang-lebaksiliwangi, .summary-pindahkeluar-lebaksiliwangi, .summary-legalisir-lebaksiliwangi,
    .summary-ktp-sadangserang, .summary-kk-sadangserang, .summary-pindahdatang-sadangserang, .summary-pindahkeluar-sadangserang, .summary-legalisir-sadangserang,
    .summary-ktp-sekeloa, .summary-kk-sekeloa, .summary-pindahdatang-sekeloa, .summary-pindahkeluar-sekeloa, .summary-legalisir-sekeloa,
    .summary-ktp-0, .summary-kk-0, .summary-pindahdatang-0, .summary-pindahkeluar-0, .summary-legalisir-0,
    .summary-ktp-1, .summary-kk-1, .summary-pindahdatang-1, .summary-pindahkeluar-1, .summary-legalisir-1,
    .summary-ktp-2, .summary-kk-2, .summary-pindahdatang-2, .summary-pindahkeluar-2, .summary-legalisir-2,
    .summary-ktp, .summary-kk, .summary-pindahdatang, .summary-pindahkeluar, .summary-legalisir {
        font-weight: bold;
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
                <h4 class="text-center">Rekapitulasi Total Pengajuan Berkas</h4>
                <p>Periode : {{ $date['formattedStarts'] }} - {{ $date['formattedEnds'] }}</p>
        	</div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th rowspan="2"><span>Kelurahan</span></th>
                            <th colspan="4">Pemohon E-KTP</th>
                            <th colspan="4">Pemohon Kartu Keluarga</th>
                            <th colspan="4">Penduduk Pindah Datang</th>
                            <th colspan="4">Penduduk Pindah Keluar</th>
                            <th colspan="4">Pemohon Legalisir Berkas</th>
                        </tr>
                        <tr>
                            <!-- E-KTP -->
                            <th colspan="1">0</th>
                            <th colspan="1">1</th>
                            <th colspan="1">2</th>
                            <th colspan="1">Jml</th>

                            <!-- Kartu Keluarga -->
                            <th colspan="1">0</th>
                            <th colspan="1">1</th>
                            <th colspan="1">2</th>
                            <th colspan="1">Jml</th>

                            <!-- Pindah Datang -->
                            <th colspan="1">0</th>
                            <th colspan="1">1</th>
                            <th colspan="1">2</th>
                            <th colspan="1">Jml</th>

                            <!-- Pindah Keluar -->
                            <th colspan="1">0</th>
                            <th colspan="1">1</th>
                            <th colspan="1">2</th>
                            <th colspan="1">Jml</th>

                            <!-- Legalisir -->
                            <th colspan="1">0</th>
                            <th colspan="1">1</th>
                            <th colspan="1">2</th>
                            <th colspan="1">Jml</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-left">Cipaganti</td>

                            <!-- E-KTP -->
                            <td colspan="1" class="cipaganti-ktp-0">{{ !empty($cipaganti['ktp']['0']) ? $cipaganti['ktp']['0']->total : 0 }}</td>
                            <td colspan="1" class="cipaganti-ktp-1">{{ !empty($cipaganti['ktp']['1']) ? $cipaganti['ktp']['1']->total : 0 }}</td>
                            <td colspan="1" class="cipaganti-ktp-2">{{ !empty($cipaganti['ktp']['2']) ? $cipaganti['ktp']['2']->total : 0 }}</td>
                            <td colspan="1" class="summary-ktp-cipaganti"></td>

                            <!-- Kartu Keluarga -->
                            <td colspan="1" class="cipaganti-kk-0">{{ !empty($cipaganti['kk']['0']) ? $cipaganti['kk']['0']->total : 0 }}</td>
                            <td colspan="1" class="cipaganti-kk-1">{{ !empty($cipaganti['kk']['1']) ? $cipaganti['kk']['1']->total : 0 }}</td>
                            <td colspan="1" class="cipaganti-kk-2">{{ !empty($cipaganti['kk']['2']) ? $cipaganti['kk']['2']->total : 0 }}</td>
                            <td colspan="1" class="summary-kk-cipaganti"></td>

                            <!-- Pindah Datang -->
                            <td colspan="1" class="cipaganti-pindahdatang-0">{{ !empty($cipaganti['pindahdatang']['0']) ? $cipaganti['pindahdatang']['0']->total : 0 }}</td>
                            <td colspan="1" class="cipaganti-pindahdatang-1">{{ !empty($cipaganti['pindahdatang']['1']) ? $cipaganti['pindahdatang']['1']->total : 0 }}</td>
                            <td colspan="1" class="cipaganti-pindahdatang-2">{{ !empty($cipaganti['pindahdatang']['2']) ? $cipaganti['pindahdatang']['2']->total : 0 }}</td>
                            <td class="summary-pindahdatang-cipaganti"></td>

                            <!-- Pindah Keluar -->
                            <td colspan="1" class="cipaganti-pindahkeluar-0">{{ !empty($cipaganti['pindahkeluar']['0']) ? $cipaganti['pindahkeluar']['0']->total : 0 }}</td>
                            <td colspan="1" class="cipaganti-pindahkeluar-1">{{ !empty($cipaganti['pindahkeluar']['1']) ? $cipaganti['pindahkeluar']['1']->total : 0 }}</td>
                            <td colspan="1" class="cipaganti-pindahkeluar-2">{{ !empty($cipaganti['pindahkeluar']['2']) ? $cipaganti['pindahkeluar']['2']->total : 0 }}</td>
                            <td colspan="1" class="summary-pindahkeluar-cipaganti"></td>

                            <!-- Legalisir -->
                            <td colspan="1" class="cipaganti-legalisir-0">{{ !empty($cipaganti['legalisir']['0']) ? $cipaganti['legalisir']['0']->total : 0 }}</td>
                            <td colspan="1" class="cipaganti-legalisir-1">{{ !empty($cipaganti['legalisir']['1']) ? $cipaganti['legalisir']['1']->total : 0 }}</td>
                            <td colspan="1" class="cipaganti-legalisir-2">{{ !empty($cipaganti['legalisir']['2']) ? $cipaganti['legalisir']['2']->total : 0 }}</td>
                            <td colspan="1" class="summary-legalisir-cipaganti"></td>
                        </tr>
                        <tr>
                            <td class="text-left">Dago</td>

                            <!-- E-KTP -->
                            <td colspan="1" class="dago-ktp-0">{{ !empty($dago['ktp']['0']) ? $dago['ktp']['0']->total : 0 }}</td>
                            <td colspan="1" class="dago-ktp-1">{{ !empty($dago['ktp']['1']) ? $dago['ktp']['1']->total : 0 }}</td>
                            <td colspan="1" class="dago-ktp-2">{{ !empty($dago['ktp']['2']) ? $dago['ktp']['2']->total : 0 }}</td>
                            <td colspan="1" class="summary-ktp-dago"></td>

                            <!-- Kartu Keluarga -->
                            <td colspan="1" class="dago-kk-0">{{ !empty($dago['kk']['0']) ? $dago['kk']['0']->total : 0 }}</td>
                            <td colspan="1" class="dago-kk-1">{{ !empty($dago['kk']['1']) ? $dago['kk']['1']->total : 0 }}</td>
                            <td colspan="1" class="dago-kk-2">{{ !empty($dago['kk']['2']) ? $dago['kk']['2']->total : 0 }}</td>
                            <td colspan="1" class="summary-kk-dago"></td>

                            <!-- Pindah Datang -->
                            <td colspan="1" class="dago-pindahdatang-0">{{ !empty($dago['pindahdatang']['0']) ? $dago['pindahdatang']['0']->total : 0 }}</td>
                            <td colspan="1" class="dago-pindahdatang-1">{{ !empty($dago['pindahdatang']['1']) ? $dago['pindahdatang']['1']->total : 0 }}</td>
                            <td colspan="1" class="dago-pindahdatang-2">{{ !empty($dago['pindahdatang']['2']) ? $dago['pindahdatang']['2']->total : 0 }}</td>
                            <td colspan="1" class="summary-pindahdatang-dago"></td>

                            <!-- Pindah Keluar -->
                            <td colspan="1" class="dago-pindahkeluar-0">{{ !empty($dago['pindahkeluar']['0']) ? $dago['pindahkeluar']['0']->total : 0 }}</td>
                            <td colspan="1" class="dago-pindahkeluar-1">{{ !empty($dago['pindahkeluar']['1']) ? $dago['pindahkeluar']['1']->total : 0 }}</td>
                            <td colspan="1" class="dago-pindahkeluar-2">{{ !empty($dago['pindahkeluar']['2']) ? $dago['pindahkeluar']['2']->total : 0 }}</td>
                            <td colspan="1" class="summary-pindahkeluar-dago"></td>

                            <!-- Legalisir -->
                            <td colspan="1" class="dago-legalisir-0">{{ !empty($dago['legalisir']['0']) ? $dago['legalisir']['0']->total : 0 }}</td>
                            <td colspan="1" class="dago-legalisir-1">{{ !empty($dago['legalisir']['1']) ? $dago['legalisir']['1']->total : 0 }}</td>
                            <td colspan="1" class="dago-legalisir-2">{{ !empty($dago['legalisir']['2']) ? $dago['legalisir']['2']->total : 0 }}</td>
                            <td colspan="1" class="summary-legalisir-dago"></td>
                        </tr>
                        <tr>
                            <td class="text-left">Lebak Gede</td>

                            <!-- E-KTP -->
                            <td colspan="1" class="lebakgede-ktp-0">{{ !empty($lebakgede['ktp']['0']) ? $lebakgede['ktp']['0']->total : 0 }}</td>
                            <td colspan="1" class="lebakgede-ktp-1">{{ !empty($lebakgede['ktp']['1']) ? $lebakgede['ktp']['1']->total : 0 }}</td>
                            <td colspan="1" class="lebakgede-ktp-2">{{ !empty($lebakgede['ktp']['2']) ? $lebakgede['ktp']['2']->total : 0 }}</td>
                            <td colspan="1" class="summary-ktp-lebakgede"></td>

                            <!-- Kartu Keluarga -->
                            <td colspan="1" class="lebakgede-kk-0">{{ !empty($lebakgede['kk']['0']) ? $lebakgede['kk']['0']->total : 0 }}</td>
                            <td colspan="1" class="lebakgede-kk-1">{{ !empty($lebakgede['kk']['1']) ? $lebakgede['kk']['1']->total : 0 }}</td>
                            <td colspan="1" class="lebakgede-kk-2">{{ !empty($lebakgede['kk']['2']) ? $lebakgede['kk']['2']->total : 0 }}</td>
                            <td colspan="1" class="summary-kk-lebakgede"></td>

                            <!-- Pindah Datang -->
                            <td colspan="1" class="lebakgede-pindahdatang-0">{{ !empty($lebakgede['pindahdatang']['0']) ? $lebakgede['pindahdatang']['0']->total : 0 }}</td>
                            <td colspan="1" class="lebakgede-pindahdatang-1">{{ !empty($lebakgede['pindahdatang']['1']) ? $lebakgede['pindahdatang']['1']->total : 0 }}</td>
                            <td colspan="1" class="lebakgede-pindahdatang-2">{{ !empty($lebakgede['pindahdatang']['2']) ? $lebakgede['pindahdatang']['2']->total : 0 }}</td>
                            <td colspan="1" class="summary-pindahdatang-lebakgede"></td>

                            <!-- Pindah Keluar -->
                            <td colspan="1" class="lebakgede-pindahkeluar-0">{{ !empty($lebakgede['pindahkeluar']['0']) ? $lebakgede['pindahkeluar']['0']->total : 0 }}</td>
                            <td colspan="1" class="lebakgede-pindahkeluar-1">{{ !empty($lebakgede['pindahkeluar']['1']) ? $lebakgede['pindahkeluar']['1']->total : 0 }}</td>
                            <td colspan="1" class="lebakgede-pindahkeluar-2">{{ !empty($lebakgede['pindahkeluar']['2']) ? $lebakgede['pindahkeluar']['2']->total : 0 }}</td>
                            <td colspan="1" class="summary-pindahkeluar-lebakgede"></td>

                            <!-- Legalisir -->
                            <td colspan="1" class="lebakgede-legalisir-0">{{ !empty($lebakgede['legalisir']['0']) ? $lebakgede['legalisir']['0']->total : 0 }}</td>
                            <td colspan="1" class="lebakgede-legalisir-1">{{ !empty($lebakgede['legalisir']['1']) ? $lebakgede['legalisir']['1']->total : 0 }}</td>
                            <td colspan="1" class="lebakgede-legalisir-2">{{ !empty($lebakgede['legalisir']['2']) ? $lebakgede['legalisir']['2']->total : 0 }}</td>
                            <td colspan="1" class="summary-legalisir-lebakgede"></td>
                        </tr>
                        <tr>
                            <td class="text-left">Lebak Siliwangi</td>

                            <!-- E-KTP -->
                            <td colspan="1" class="lebaksiliwangi-ktp-0">{{ !empty($lebaksiliwangi['ktp']['0']) ? $lebaksiliwangi['ktp']['0']->total : 0 }}</td>
                            <td colspan="1" class="lebaksiliwangi-ktp-1">{{ !empty($lebaksiliwangi['ktp']['1']) ? $lebaksiliwangi['ktp']['1']->total : 0 }}</td>
                            <td colspan="1" class="lebaksiliwangi-ktp-2">{{ !empty($lebaksiliwangi['ktp']['2']) ? $lebaksiliwangi['ktp']['2']->total : 0 }}</td>
                            <td colspan="1" class="summary-ktp-lebaksiliwangi"></td>

                            <!-- Kartu Keluarga -->
                            <td colspan="1" class="lebaksiliwangi-kk-0">{{ !empty($lebaksiliwangi['kk']['0']) ? $lebaksiliwangi['kk']['0']->total : 0 }}</td>
                            <td colspan="1" class="lebaksiliwangi-kk-1">{{ !empty($lebaksiliwangi['kk']['1']) ? $lebaksiliwangi['kk']['1']->total : 0 }}</td>
                            <td colspan="1" class="lebaksiliwangi-kk-2">{{ !empty($lebaksiliwangi['kk']['2']) ? $lebaksiliwangi['kk']['2']->total : 0 }}</td>
                            <td colspan="1" class="summary-kk-lebaksiliwangi"></td>

                            <!-- Pindah Datang -->
                            <td colspan="1" class="lebaksiliwangi-pindahdatang-0">{{ !empty($lebaksiliwangi['pindahdatang']['0']) ? $lebaksiliwangi['pindahdatang']['0']->total : 0 }}</td>
                            <td colspan="1" class="lebaksiliwangi-pindahdatang-1">{{ !empty($lebaksiliwangi['pindahdatang']['1']) ? $lebaksiliwangi['pindahdatang']['1']->total : 0 }}</td>
                            <td colspan="1" class="lebaksiliwangi-pindahdatang-2">{{ !empty($lebaksiliwangi['pindahdatang']['2']) ? $lebaksiliwangi['pindahdatang']['2']->total : 0 }}</td>
                            <td colspan="1" class="summary-pindahdatang-lebaksiliwangi"></td>

                            <!-- Pindah Keluar -->
                            <td colspan="1" class="lebaksiliwangi-pindahkeluar-0">{{ !empty($lebaksiliwangi['pindahkeluar']['0']) ? $lebaksiliwangi['pindahkeluar']['0']->total : 0 }}</td>
                            <td colspan="1" class="lebaksiliwangi-pindahkeluar-1">{{ !empty($lebaksiliwangi['pindahkeluar']['1']) ? $lebaksiliwangi['pindahkeluar']['1']->total : 0 }}</td>
                            <td colspan="1" class="lebaksiliwangi-pindahkeluar-2">{{ !empty($lebaksiliwangi['pindahkeluar']['2']) ? $lebaksiliwangi['pindahkeluar']['2']->total : 0 }}</td>
                            <td colspan="1" class="summary-pindahkeluar-lebaksiliwangi"></td>

                            <!-- Legalisir -->
                            <td colspan="1" class="lebaksiliwangi-legalisir-0">{{ !empty($lebaksiliwangi['legalisir']['0']) ? $lebaksiliwangi['legalisir']['0']->total : 0 }}</td>
                            <td colspan="1" class="lebaksiliwangi-legalisir-1">{{ !empty($lebaksiliwangi['legalisir']['1']) ? $lebaksiliwangi['legalisir']['1']->total : 0 }}</td>
                            <td colspan="1" class="lebaksiliwangi-legalisir-2">{{ !empty($lebaksiliwangi['legalisir']['2']) ? $lebaksiliwangi['legalisir']['2']->total : 0 }}</td>
                            <td colspan="1" class="summary-legalisir-lebaksiliwangi"></td>
                        </tr>
                        <tr>
                            <td class="text-left">Sadang Serang</td>

                            <!-- E-KTP -->
                            <td colspan="1" class="sadangserang-ktp-0">{{ !empty($sadangserang['ktp']['0']) ? $sadangserang['ktp']['0']->total : 0 }}</td>
                            <td colspan="1" class="sadangserang-ktp-1">{{ !empty($sadangserang['ktp']['1']) ? $sadangserang['ktp']['1']->total : 0 }}</td>
                            <td colspan="1" class="sadangserang-ktp-2">{{ !empty($sadangserang['ktp']['2']) ? $sadangserang['ktp']['2']->total : 0 }}</td>
                            <td colspan="1" class="summary-ktp-sadangserang"></td>

                            <!-- Kartu Keluarga -->
                            <td colspan="1" class="sadangserang-kk-0">{{ !empty($sadangserang['kk']['0']) ? $sadangserang['kk']['0']->total : 0 }}</td>
                            <td colspan="1" class="sadangserang-kk-1">{{ !empty($sadangserang['kk']['1']) ? $sadangserang['kk']['1']->total : 0 }}</td>
                            <td colspan="1" class="sadangserang-kk-2">{{ !empty($sadangserang['kk']['2']) ? $sadangserang['kk']['2']->total : 0 }}</td>
                            <td colspan="1" class="summary-kk-sadangserang"></td>

                            <!-- Pindah Datang -->
                            <td colspan="1" class="sadangserang-pindahdatang-0">{{ !empty($sadangserang['pindahdatang']['0']) ? $sadangserang['pindahdatang']['0']->total : 0 }}</td>
                            <td colspan="1" class="sadangserang-pindahdatang-1">{{ !empty($sadangserang['pindahdatang']['1']) ? $sadangserang['pindahdatang']['1']->total : 0 }}</td>
                            <td colspan="1" class="sadangserang-pindahdatang-2">{{ !empty($sadangserang['pindahdatang']['2']) ? $sadangserang['pindahdatang']['2']->total : 0 }}</td>
                            <td colspan="1" class="summary-pindahdatang-sadangserang"></td>

                            <!-- Pindah Keluar -->
                            <td colspan="1" class="sadangserang-pindahkeluar-0">{{ !empty($sadangserang['pindahkeluar']['0']) ? $sadangserang['pindahkeluar']['0']->total : 0 }}</td>
                            <td colspan="1" class="sadangserang-pindahkeluar-1">{{ !empty($sadangserang['pindahkeluar']['1']) ? $sadangserang['pindahkeluar']['1']->total : 0 }}</td>
                            <td colspan="1" class="sadangserang-pindahkeluar-2">{{ !empty($sadangserang['pindahkeluar']['2']) ? $sadangserang['pindahkeluar']['2']->total : 0 }}</td>
                            <td colspan="1" class="summary-pindahkeluar-sadangserang"></td>

                            <!-- Legalisir -->
                            <td colspan="1" class="sadangserang-legalisir-0">{{ !empty($sadangserang['legalisir']['0']) ? $sadangserang['legalisir']['0']->total : 0 }}</td>
                            <td colspan="1" class="sadangserang-legalisir-1">{{ !empty($sadangserang['legalisir']['1']) ? $sadangserang['legalisir']['1']->total : 0 }}</td>
                            <td colspan="1" class="sadangserang-legalisir-2">{{ !empty($sadangserang['legalisir']['2']) ? $sadangserang['legalisir']['2']->total : 0 }}</td>
                            <td colspan="1" class="summary-legalisir-sadangserang"></td>
                        </tr>
                        <tr>
                            <td class="text-left">Sekeloa</td>

                            <!-- E-KTP -->
                            <td colspan="1" class="sekeloa-ktp-0">{{ !empty($sekeloa['ktp']['0']) ? $sekeloa['ktp']['0']->total : 0 }}</td>
                            <td colspan="1" class="sekeloa-ktp-1">{{ !empty($sekeloa['ktp']['1']) ? $sekeloa['ktp']['1']->total : 0 }}</td>
                            <td colspan="1" class="sekeloa-ktp-2">{{ !empty($sekeloa['ktp']['2']) ? $sekeloa['ktp']['2']->total : 0 }}</td>
                            <td colspan="1" class="summary-ktp-sekeloa"></td>

                            <!-- Kartu Keluarga -->
                            <td colspan="1" class="sekeloa-kk-0">{{ !empty($sekeloa['kk']['0']) ? $sekeloa['kk']['0']->total : 0 }}</td>
                            <td colspan="1" class="sekeloa-kk-1">{{ !empty($sekeloa['kk']['1']) ? $sekeloa['kk']['1']->total : 0 }}</td>
                            <td colspan="1" class="sekeloa-kk-2">{{ !empty($sekeloa['kk']['2']) ? $sekeloa['kk']['2']->total : 0 }}</td>
                            <td colspan="1" class="summary-kk-sekeloa"></td>

                            <!-- Pindah Datang -->
                            <td colspan="1" class="sekeloa-pindahdatang-0">{{ !empty($sekeloa['pindahdatang']['0']) ? $sekeloa['pindahdatang']['0']->total : 0 }}</td>
                            <td colspan="1" class="sekeloa-pindahdatang-1">{{ !empty($sekeloa['pindahdatang']['1']) ? $sekeloa['pindahdatang']['1']->total : 0 }}</td>
                            <td colspan="1" class="sekeloa-pindahdatang-2">{{ !empty($sekeloa['pindahdatang']['2']) ? $sekeloa['pindahdatang']['2']->total : 0 }}</td>
                            <td colspan="1" class="summary-pindahdatang-sekeloa"></td>

                            <!-- Pindah Keluar -->
                            <td colspan="1" class="sekeloa-pindahkeluar-0">{{ !empty($sekeloa['pindahkeluar']['0']) ? $sekeloa['pindahkeluar']['0']->total : 0 }}</td>
                            <td colspan="1" class="sekeloa-pindahkeluar-1">{{ !empty($sekeloa['pindahkeluar']['1']) ? $sekeloa['pindahkeluar']['1']->total : 0 }}</td>
                            <td colspan="1" class="sekeloa-pindahkeluar-2">{{ !empty($sekeloa['pindahkeluar']['2']) ? $sekeloa['pindahkeluar']['2']->total : 0 }}</td>
                            <td colspan="1"class="summary-pindahkeluar-sekeloa"></td>

                            <!-- Legalisir -->
                            <td colspan="1" class="sekeloa-legalisir-0">{{ !empty($sekeloa['legalisir']['0']) ? $sekeloa['legalisir']['0']->total : 0 }}</td>
                            <td colspan="1" class="sekeloa-legalisir-1">{{ !empty($sekeloa['legalisir']['1']) ? $sekeloa['legalisir']['1']->total : 0 }}</td>
                            <td colspan="1" class="sekeloa-legalisir-2">{{ !empty($sekeloa['legalisir']['2']) ? $sekeloa['legalisir']['2']->total : 0 }}</td>
                            <td colspan="1" class="summary-legalisir-sekeloa"></td>
                        </tr>
                        <tr>
                            <td class="text-left"><strong>Jumlah</strong></td>

                            <!-- E-KTP -->
                            <td colspan="1" class="summary-ktp-0"></td>
                            <td colspan="1" class="summary-ktp-1"></td>
                            <td colspan="1" class="summary-ktp-2"></td>
                            <td colspan="1" class="summary-ktp"></td>

                            <!-- Kartu Keluarga -->
                            <td colspan="1" class="summary-kk-0"></td>
                            <td colspan="1" class="summary-kk-1"></td>
                            <td colspan="1" class="summary-kk-2"></td>
                            <td colspan="1" class="summary-kk"></td>

                            <!-- Pindah Datang -->
                            <td colspan="1" class="summary-pindahdatang-0"></td>
                            <td colspan="1" class="summary-pindahdatang-1"></td>
                            <td colspan="1" class="summary-pindahdatang-2"></td>
                            <td colspan="1" class="summary-pindahdatang"></td>

                            <!-- Pindah Keluar -->
                            <td colspan="1" class="summary-pindahkeluar-0"></td>
                            <td colspan="1" class="summary-pindahkeluar-1"></td>
                            <td colspan="1" class="summary-pindahkeluar-2"></td>
                            <td colspan="1" class="summary-pindahkeluar"></td>

                            <!-- Legalisir -->
                            <td colspan="1" class="summary-legalisir-0"></td>
                            <td colspan="1" class="summary-legalisir-1"></td>
                            <td colspan="1" class="summary-legalisir-2"></td>
                            <td colspan="1" class="summary-legalisir"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
    	</div>

        <div class="row" style="position: relative; bottom: 15px;">
            <div class="col-lg-12">
                <p style="float: left;"><em>*) 0 = Belum Dicek, 1 = On Progress, 2 = Selesai</em></p>
            </div>
        </div>

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
<script src="{{ asset('vendor/jquery/jquery.js') }}"></script>
<script src="{{ asset('js/rekap.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        summaryStatus()
    })
</script>