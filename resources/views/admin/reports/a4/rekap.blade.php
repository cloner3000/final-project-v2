<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
<style type="text/css">
    body {
	   background-color: white;
	   color: black;
    }
    th, td {
        text-align: center;
    }
    .cipaganti-summary, .dago-summary, .lebakgede-summary,
    .lebaksiliwangi-summary, .sadangserang-summary, .sekeloa-summary {
        font-weight: bold;
    }
    .summary-ktp-l, .summary-ktp-p, .summary-kk-l, .summary-kk-p,
    .summary-legalisir-l, .summary-legalisir-p, .summary-pindahdatang-l, .summary-pindahdatang-p,
    .summary-pindahkeluar-l, .summary-pindahkeluar-p {
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
                <h4 class="text-center">Rekapitulasi Total Pemohon Berkas</h4>
                <p>Periode : {{ $date['formattedStarts'] }} - {{ $date['formattedEnds'] }}</p>
        	</div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th rowspan="2"><span>Kelurahan</span></th>
                            <th colspan="2">Pemohon E-KTP</th>
                            <th colspan="2">Pemohon Kartu Keluarga</th>
                            <th colspan="2">Penduduk Pindah Datang</th>
                            <th colspan="2">Penduduk Pindah Keluar</th>
                            <th colspan="2">Pemohon Legalisir Berkas</th>
                            <th rowspan="2">Jumlah</th>
                        </tr>
                        <tr>
                            <!-- E-KTP -->
                            <th colspan="1">L</th>
                            <th colspan="1">P</th>

                            <!-- Kartu Keluarga -->
                            <th colspan="1">L</th>
                            <th colspan="1">P</th>

                            <!-- Pindah Datang -->
                            <th colspan="1">L</th>
                            <th colspan="1">P</th>

                            <!-- Pindah Keluar -->
                            <th colspan="1">L</th>
                            <th colspan="1">P</th>

                            <!-- Legalisir -->
                            <th colspan="1">L</th>
                            <th colspan="1">P</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-left">Cipaganti</td>

                            <!-- E-KTP -->
                            <td colspan="1" class="cipaganti-ktp-l">{{ !empty($cipaganti['ktp']['0']) ? $cipaganti['ktp']['0']->total : 0 }}</td>
                            <td colspan="1" class="cipaganti-ktp-p">{{ !empty($cipaganti['ktp']['1']) ? $cipaganti['ktp']['1']->total : 0 }}</td>

                            <!-- Kartu Keluarga -->
                            <td colspan="1" class="cipaganti-kk-l">{{ !empty($cipaganti['kk']['0']) ? $cipaganti['kk']['0']->total : 0 }}</td>
                            <td colspan="1" class="cipaganti-kk-p">{{ !empty($cipaganti['kk']['1']) ? $cipaganti['kk']['1']->total : 0 }}</td>

                            <!-- Pindah Datang -->
                            <td colspan="1" class="cipaganti-pindahdatang-l">{{ !empty($cipaganti['pindahdatang']['0']) ? $cipaganti['pindahdatang']['0']->total : 0 }}</td>
                            <td colspan="1" class="cipaganti-pindahdatang-p">{{ !empty($cipaganti['pindahdatang']['1']) ? $cipaganti['pindahdatang']['1']->total : 0 }}</td>

                            <!-- Pindah Keluar -->
                            <td colspan="1" class="cipaganti-pindahkeluar-l">{{ !empty($cipaganti['pindahkeluar']['0']) ? $cipaganti['pindahkeluar']['0']->total : 0 }}</td>
                            <td colspan="1" class="cipaganti-pindahkeluar-p">{{ !empty($cipaganti['pindahkeluar']['1']) ? $cipaganti['pindahkeluar']['1']->total : 0 }}</td>

                            <!-- Legalisir -->
                            <td colspan="1" class="cipaganti-legalisir-l">{{ !empty($cipaganti['legalisir']['0']) ? $cipaganti['legalisir']['0']->total : 0 }}</td>
                            <td colspan="1" class="cipaganti-legalisir-p">{{ !empty($cipaganti['legalisir']['1']) ? $cipaganti['legalisir']['1']->total : 0 }}</td>

                            <td class="cipaganti-summary"></td>
                        </tr>
                        <tr>
                            <td class="text-left">Dago</td>

                            <!-- E-KTP -->
                            <td colspan="1" class="dago-ktp-l">{{ !empty($dago['ktp']['0']) ? $dago['ktp']['0']->total : 0 }}</td>
                            <td colspan="1" class="dago-ktp-p">{{ !empty($dago['ktp']['1']) ? $dago['ktp']['1']->total : 0 }}</td>

                            <!-- Kartu Keluarga -->
                            <td colspan="1" class="dago-kk-l">{{ !empty($dago['kk']['0']) ? $dago['kk']['0']->total : 0 }}</td>
                            <td colspan="1" class="dago-kk-p">{{ !empty($dago['kk']['1']) ? $dago['kk']['1']->total : 0 }}</td>

                            <!-- Pindah Datang -->
                            <td colspan="1" class="dago-pindahdatang-l">{{ !empty($dago['pindahdatang']['0']) ? $dago['pindahdatang']['0']->total : 0 }}</td>
                            <td colspan="1" class="dago-pindahdatang-p">{{ !empty($dago['pindahdatang']['1']) ? $dago['pindahdatang']['1']->total : 0 }}</td>

                            <!-- Pindah Keluar -->
                            <td colspan="1" class="dago-pindahkeluar-l">{{ !empty($dago['pindahkeluar']['0']) ? $dago['pindahkeluar']['0']->total : 0 }}</td>
                            <td colspan="1" class="dago-pindahkeluar-p">{{ !empty($dago['pindahkeluar']['1']) ? $dago['pindahkeluar']['1']->total : 0 }}</td>

                            <!-- Legalisir -->
                            <td colspan="1" class="dago-legalisir-l">{{ !empty($dago['legalisir']['0']) ? $dago['legalisir']['0']->total : 0 }}</td>
                            <td colspan="1" class="dago-legalisir-p">{{ !empty($dago['legalisir']['1']) ? $dago['legalisir']['1']->total : 0 }}</td>
                        
                            <td class="dago-summary"></td>
                        </tr>
                        <tr>
                            <td class="text-left">Lebak Gede</td>

                            <!-- E-KTP -->
                            <td colspan="1" class="lebakgede-ktp-l">{{ !empty($lebakgede['ktp']['0']) ? $lebakgede['ktp']['0']->total : 0 }}</td>
                            <td colspan="1" class="lebakgede-ktp-p">{{ !empty($lebakgede['ktp']['1']) ? $lebakgede['ktp']['1']->total : 0 }}</td>

                            <!-- Kartu Keluarga -->
                            <td colspan="1" class="lebakgede-kk-l">{{ !empty($lebakgede['kk']['0']) ? $lebakgede['kk']['0']->total : 0 }}</td>
                            <td colspan="1" class="lebakgede-kk-p">{{ !empty($lebakgede['kk']['1']) ? $lebakgede['kk']['1']->total : 0 }}</td>

                            <!-- Pindah Datang -->
                            <td colspan="1" class="lebakgede-pindahdatang-l">{{ !empty($lebakgede['pindahdatang']['0']) ? $lebakgede['pindahdatang']['0']->total : 0 }}</td>
                            <td colspan="1" class="lebakgede-pindahdatang-p">{{ !empty($lebakgede['pindahdatang']['1']) ? $lebakgede['pindahdatang']['1']->total : 0 }}</td>

                            <!-- Pindah Keluar -->
                            <td colspan="1" class="lebakgede-pindahkeluar-l">{{ !empty($lebakgede['pindahkeluar']['0']) ? $lebakgede['pindahkeluar']['0']->total : 0 }}</td>
                            <td colspan="1" class="lebakgede-pindahkeluar-p">{{ !empty($lebakgede['pindahkeluar']['1']) ? $lebakgede['pindahkeluar']['1']->total : 0 }}</td>

                            <!-- Legalisir -->
                            <td colspan="1" class="lebakgede-legalisir-l">{{ !empty($lebakgede['legalisir']['0']) ? $lebakgede['legalisir']['0']->total : 0 }}</td>
                            <td colspan="1" class="lebakgede-legalisir-p">{{ !empty($lebakgede['legalisir']['1']) ? $lebakgede['legalisir']['1']->total : 0 }}</td>

                            <td class="lebakgede-summary"></td>
                        </tr>
                        <tr>
                            <td class="text-left">Lebak Siliwangi</td>

                            <!-- E-KTP -->
                            <td colspan="1" class="lebaksiliwangi-ktp-l">{{ !empty($lebaksiliwangi['ktp']['0']) ? $lebaksiliwangi['ktp']['0']->total : 0 }}</td>
                            <td colspan="1" class="lebaksiliwangi-ktp-p">{{ !empty($lebaksiliwangi['ktp']['1']) ? $lebaksiliwangi['ktp']['1']->total : 0 }}</td>

                            <!-- Kartu Keluarga -->
                            <td colspan="1" class="lebaksiliwangi-kk-l">{{ !empty($lebaksiliwangi['kk']['0']) ? $lebaksiliwangi['kk']['0']->total : 0 }}</td>
                            <td colspan="1" class="lebaksiliwangi-kk-p">{{ !empty($lebaksiliwangi['kk']['1']) ? $lebaksiliwangi['kk']['1']->total : 0 }}</td>

                            <!-- Pindah Datang -->
                            <td colspan="1" class="lebaksiliwangi-pindahdatang-l">{{ !empty($lebaksiliwangi['pindahdatang']['0']) ? $lebaksiliwangi['pindahdatang']['0']->total : 0 }}</td>
                            <td colspan="1" class="lebaksiliwangi-pindahdatang-p">{{ !empty($lebaksiliwangi['pindahdatang']['1']) ? $lebaksiliwangi['pindahdatang']['1']->total : 0 }}</td>

                            <!-- Pindah Keluar -->
                            <td colspan="1" class="lebaksiliwangi-pindahkeluar-l">{{ !empty($lebaksiliwangi['pindahkeluar']['0']) ? $lebaksiliwangi['pindahkeluar']['0']->total : 0 }}</td>
                            <td colspan="1" class="lebaksiliwangi-pindahkeluar-p">{{ !empty($lebaksiliwangi['pindahkeluar']['1']) ? $lebaksiliwangi['pindahkeluar']['1']->total : 0 }}</td>

                            <!-- Legalisir -->
                            <td colspan="1" class="lebaksiliwangi-legalisir-l">{{ !empty($lebaksiliwangi['legalisir']['0']) ? $lebaksiliwangi['legalisir']['0']->total : 0 }}</td>
                            <td colspan="1" class="lebaksiliwangi-legalisir-p">{{ !empty($lebaksiliwangi['legalisir']['1']) ? $lebaksiliwangi['legalisir']['1']->total : 0 }}</td>

                            <td class="lebaksiliwangi-summary"></td>
                        </tr>
                        <tr>
                            <td class="text-left">Sadang Serang</td>

                            <!-- E-KTP -->
                            <td colspan="1" class="sadangserang-ktp-l">{{ !empty($sadangserang['ktp']['0']) ? $sadangserang['ktp']['0']->total : 0 }}</td>
                            <td colspan="1" class="sadangserang-ktp-p">{{ !empty($sadangserang['ktp']['1']) ? $sadangserang['ktp']['1']->total : 0 }}</td>

                            <!-- Kartu Keluarga -->
                            <td colspan="1" class="sadangserang-kk-l">{{ !empty($sadangserang['kk']['0']) ? $sadangserang['kk']['0']->total : 0 }}</td>
                            <td colspan="1" class="sadangserang-kk-p">{{ !empty($sadangserang['kk']['1']) ? $sadangserang['kk']['1']->total : 0 }}</td>

                            <!-- Pindah Datang -->
                            <td colspan="1" class="sadangserang-pindahdatang-l">{{ !empty($sadangserang['pindahdatang']['0']) ? $sadangserang['pindahdatang']['0']->total : 0 }}</td>
                            <td colspan="1" class="sadangserang-pindahdatang-p">{{ !empty($sadangserang['pindahdatang']['1']) ? $sadangserang['pindahdatang']['1']->total : 0 }}</td>

                            <!-- Pindah Keluar -->
                            <td colspan="1" class="sadangserang-pindahkeluar-l">{{ !empty($sadangserang['pindahkeluar']['0']) ? $sadangserang['pindahkeluar']['0']->total : 0 }}</td>
                            <td colspan="1" class="sadangserang-pindahkeluar-p">{{ !empty($sadangserang['pindahkeluar']['1']) ? $sadangserang['pindahkeluar']['1']->total : 0 }}</td>

                            <!-- Legalisir -->
                            <td colspan="1" class="sadangserang-legalisir-l">{{ !empty($sadangserang['legalisir']['0']) ? $sadangserang['legalisir']['0']->total : 0 }}</td>
                            <td colspan="1" class="sadangserang-legalisir-p">{{ !empty($sadangserang['legalisir']['1']) ? $sadangserang['legalisir']['1']->total : 0 }}</td>

                            <td class="sadangserang-summary"></td>
                        </tr>
                        <tr>
                            <td class="text-left">Sekeloa</td>

                            <!-- E-KTP -->
                            <td colspan="1" class="sekeloa-ktp-l">{{ !empty($sekeloa['ktp']['0']) ? $sekeloa['ktp']['0']->total : 0 }}</td>
                            <td colspan="1" class="sekeloa-ktp-p">{{ !empty($sekeloa['ktp']['1']) ? $sekeloa['ktp']['1']->total : 0 }}</td>

                            <!-- Kartu Keluarga -->
                            <td colspan="1" class="sekeloa-kk-l">{{ !empty($sekeloa['kk']['0']) ? $sekeloa['kk']['0']->total : 0 }}</td>
                            <td colspan="1" class="sekeloa-kk-p">{{ !empty($sekeloa['kk']['1']) ? $sekeloa['kk']['1']->total : 0 }}</td>

                            <!-- Pindah Datang -->
                            <td colspan="1" class="sekeloa-pindahdatang-l">{{ !empty($sekeloa['pindahdatang']['0']) ? $sekeloa['pindahdatang']['0']->total : 0 }}</td>
                            <td colspan="1" class="sekeloa-pindahdatang-p">{{ !empty($sekeloa['pindahdatang']['1']) ? $sekeloa['pindahdatang']['1']->total : 0 }}</td>

                            <!-- Pindah Keluar -->
                            <td colspan="1" class="sekeloa-pindahkeluar-l">{{ !empty($sekeloa['pindahkeluar']['0']) ? $sekeloa['pindahkeluar']['0']->total : 0 }}</td>
                            <td colspan="1" class="sekeloa-pindahkeluar-p">{{ !empty($sekeloa['pindahkeluar']['1']) ? $sekeloa['pindahkeluar']['1']->total : 0 }}</td>

                            <!-- Legalisir -->
                            <td colspan="1" class="sekeloa-legalisir-l">{{ !empty($sekeloa['legalisir']['0']) ? $sekeloa['legalisir']['0']->total : 0 }}</td>
                            <td colspan="1" class="sekeloa-legalisir-p">{{ !empty($sekeloa['legalisir']['1']) ? $sekeloa['legalisir']['1']->total : 0 }}</td>

                            <td class="sekeloa-summary"></td>
                        </tr>
                        <tr>
                            <td class="text-left"><strong>Jumlah</strong></td>

                            <!-- E-KTP -->
                            <td colspan="1" class="summary-ktp-l"></td>
                            <td colspan="1" class="summary-ktp-p"></td>

                            <!-- Kartu Keluarga -->
                            <td colspan="1" class="summary-kk-l"></td>
                            <td colspan="1" class="summary-kk-p"></td>

                            <!-- Pindah Datang -->
                            <td colspan="1" class="summary-pindahdatang-l"></td>
                            <td colspan="1" class="summary-pindahdatang-p"></td>

                            <!-- Pindah Keluar -->
                            <td colspan="1" class="summary-pindahkeluar-l"></td>
                            <td colspan="1" class="summary-pindahkeluar-p"></td>

                            <!-- Legalisir -->
                            <td colspan="1" class="summary-legalisir-l"></td>
                            <td colspan="1" class="summary-legalisir-p"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
    	</div>

        <div class="row" style="position: relative; bottom: 15px;">
            <div class="col-lg-12">
                <p style="float: left;"><em>*) L = Laki - Laki, P = Perempuan</em></p>
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
        summary()
    })
</script>