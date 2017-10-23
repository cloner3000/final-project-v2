@extends('layouts.app')

@section('content')

<div class="col-xxl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <!-- Charts -->
  <div class="card card-block p-35 clearfix">
    <div id="summary-charts"></div>
  </div>
  <!-- End Charts -->
</div>

<div class="col-xxl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
  <!-- Card -->
  <div class="card card-block p-35 clearfix">
    <div class="counter counter-md pull-xs-left text-xs-left">
      <div class="counter-number-group">
        <span class="counter-number">{{ $count['ktp'] }}</span>
      </div>
      <div class="counter-label text-capitalize font-size-16">E-KTP</div>
    </div>
    <div class="pull-xs-right white">
      <i class="icon icon-circle icon-2x md-assignment-account bg-blue-600" aria-hidden="true"></i>
    </div>
  </div>
  <!-- End Card -->
</div>
<div class="col-xxl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
  <!-- Card -->
  <div class="card card-block p-35 clearfix">
    <div class="counter counter-md pull-xs-left text-xs-left">
      <div class="counter-number-group">
        <span class="counter-number">{{ $count['kk'] }}</span>
      </div>
      <div class="counter-label text-capitalize font-size-16">Kartu Keluarga</div>
    </div>
    <div class="pull-xs-right white">
      <i class="icon icon-circle icon-2x md-accounts bg-blue-600" aria-hidden="true"></i>
    </div>
  </div>
  <!-- End Card -->
</div>
<div class="col-xxl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
  <!-- Card -->
  <div class="card card-block p-35 clearfix">
    <div class="counter counter-md pull-xs-left text-xs-left">
      <div class="counter-number-group">
        <span class="counter-number">{{ $count['legalisir'] }}</span>
      </div>
      <div class="counter-label text-capitalize font-size-16">Legalisir</div>
    </div>
    <div class="pull-xs-right white">
      <i class="icon icon-circle icon-2x md-receipt bg-blue-600" aria-hidden="true"></i>
    </div>
  </div>
  <!-- End Card -->
</div>
<div class="col-xxl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
  <!-- Card -->
  <div class="card card-block p-35 clearfix">
    <div class="counter counter-md pull-xs-left text-xs-left">
      <div class="counter-number-group">
        <span class="counter-number">{{ $count['pindahdatang'] }}</span>
      </div>
      <div class="counter-label text-capitalize font-size-16">Pindah datang</div>
    </div>
    <div class="pull-xs-right white">
      <i class="icon icon-circle icon-2x md-bus bg-blue-600" aria-hidden="true"></i>
    </div>
  </div>
  <!-- End Card -->
</div>
<div class="col-xxl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
  <!-- Card -->
  <div class="card card-block p-35 clearfix">
    <div class="counter counter-md pull-xs-left text-xs-left">
      <div class="counter-number-group">
        <span class="counter-number">{{ $count['pindahkeluar'] }}</span>
      </div>
      <div class="counter-label text-capitalize font-size-16">Pindah Keluar</div>
    </div>
    <div class="pull-xs-right white">
      <i class="icon icon-circle icon-2x md-airplane bg-blue-600" aria-hidden="true"></i>
    </div>
  </div>
  <!-- End Card -->
</div>
<div class="col-xxl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
  <!-- Card -->
  <div class="card card-block p-35 clearfix">
    <div class="counter counter-md pull-xs-left text-xs-left">
      <div class="counter-number-group">
        <span class="counter-number">{{ $count['users'] }}</span>
      </div>
      <div class="counter-label text-capitalize font-size-16">Pengguna Terdaftar</div>
    </div>
    <div class="pull-xs-right white">
      <i class="icon icon-circle icon-2x md-account bg-blue-600" aria-hidden="true"></i>
    </div>
  </div>
  <!-- End Card -->
</div>
<script src="{{ asset('js/Plugin/highcharts.js') }}"></script>
<script src="{{ asset('js/Plugin/exporting.js') }}"></script>
<script type="text/javascript">
  let startDate = Date.parse("{{ $count['ktp_summary'][0]->date }}")
  Highcharts.chart('summary-charts', {

    title: {
        text: 'Total Pemohon Berkas & Perpindahan Penduduk Per Bulan'
    },

    subtitle: {
        text: 'Bidang Pelayanan Kecamatan Coblong'
    },

    xAxis: {
      type: 'datetime'
    },

    yAxis: {
        title: {
            text: 'Jumlah Pemohon'
        }
    },

    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

    plotOptions: {
        series: {
            label: {
                connectorAllowed: false
            },
            pointStart: startDate,
            pointInterval: 24 * 3600 * 1000
        }
    },

    series: [{
        name: 'Pemohon E-KTP',
        data: [@foreach ($count['ktp_summary'] as $data)  {{ $data->value . ', ' }}  @endforeach]
    }, {
        name: 'Pemohon Kartu Keluarga',
        data: [@foreach ($count['kk_summary'] as $data)  {{ $data->value . ', ' }}  @endforeach],
        visible: false
    }, {
        name: 'Pemohon Legalisir',
        data: [@foreach ($count['legalisir_summary'] as $data)  {{ $data->value . ', ' }}  @endforeach],
        visible: false
    }, {
        name: 'Penduduk Pindah Datang',
        data: [@foreach ($count['pindahdatang_summary'] as $data)  {{ $data->value . ', ' }}  @endforeach],
        visible: false
    }, {
        name: 'Penduduk Pindah Keluar',
        data: [@foreach ($count['pindahkeluar_summary'] as $data)  {{ $data->value . ', ' }}  @endforeach],
        visible: false
    }],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom'
                }
            }
        }]
    }
  });
</script>
@endsection