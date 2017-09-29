@extends('layouts.app')

@section('content')
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
@endsection