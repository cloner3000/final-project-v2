@extends('layouts.app')

@section('content')

@include('pelayanan.legalisir-crud.form')

<div class="col-xxl-12 col-lg-12 col-xs-12">
  <!-- Main Widget -->
  <div id="filter-legalisir-card" class="card card-shadow">
    <div class="card-block p-0">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1>Filter Pemohon Legalisir</h1>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <form id="filter-legalisir-form" class="form-inline">
              <h5><strong>Kategori</strong></h5>
              <div class="form-group">
                <!-- NIK -->
                <div class="form-group form-material">
                  <input type="text" class="form-control" name="nik" placeholder="Filter by NIK" autocomplete="off" />
                </div>
                <!-- Nama -->
                <div class="form-group form-material">
                  <input type="text" class="form-control" id="filter-legalisir-nama" name="nama" placeholder="Filter by Nama"
                  autocomplete="off" />
                </div>
                <!-- Jenis Kelamin -->
                <div class="form-group form-material">
                  <input type="text" class="form-control typeahead-jenis-kelamin" id="filter-legalisir-jenis-kelamin" name="jenis_kelamin" placeholder="Filter by Jenis Kelamin" autocomplete="off" />
                </div>
                <!-- RT -->
                <div class="form-group form-material">
                  <input type="number" class="form-control" id="filter-legalisir-rt" name="rt" placeholder="Filter by RT"
                  autocomplete="off" />
                </div>
                <!-- RW -->
                <div class="form-group form-material">
                  <input type="number" class="form-control" id="filter-legalisir-rw" name="rw" placeholder="Filter by RW"
                  autocomplete="off" />
                </div>
                <!-- Kelurahan -->
                <div class="form-group form-material">
                  <input type="text" class="form-control typeahead-kelurahan" id="filter-legalisir-kelurahan" name="kelurahan" placeholder="Filter by Kelurahan" autocomplete="off" />
                </div>
                <!-- Jenis Berkas -->
                <div class="form-group form-material">
                  <input type="text" class="form-control typeahead-jenis-berkas" id="filter-legalisir-jenis-berkas" name="jenis_berkas" placeholder="Filter by Jenis Berkas" autocomplete="off" />
                </div>
              </div><br>
              <!-- Status -->
              <div class="form-group">
                <h5><strong>Status</strong></h5>
                <div class="form-group form-material" data-plugin="formMaterial">
                  <select id="filter-legalisir-status" name="status" class="form-control">
                    <option value="0">0 - Belum Dicek</option>
                    <option value="1">1 - Sudah Dicek</option>
                  </select>
                </div>
              </div><br>
              <!-- Tanggal Dibuat -->
              <div class="form-group">
                <h5><strong>Tanggal Dibuat</strong></h5>
                <!-- Tanggal Dari -->
                <div class="form-group form-material">
                  <input type="text" class="form-control" id="filter-legalisir-tanggal-dari" name="tanggal_dari" placeholder="Dari" autocomplete="off" />
                </div>
                <!-- Tanggal Sampai -->
                <div class="form-group form-material">
                  <input type="text" class="form-control" id="filter-legalisir-tanggal-sampai" name="tanggal_sampai" placeholder="Sampai" autocomplete="off" />
                </div>
              </div><br><br>
              <div class="form-group">
                <button type="submit" class="btn btn-success btn-sm"><i class="md-search"></i>&nbsp; Cari</button>
              </div>
            </form>
            @if ( Auth::user()->isAdmin() != 0 )
              <!-- Print report by filter -->
              <form target="_blank" action="{{ url('/dashboard/reports/legalisir/filter') }}" method="GET" style="position: relative; bottom: 32.5px; margin-left: 70px;">
                {{ csrf_field() }}

                <input type="hidden" id="report-filter-nik" name="nik">
                <input type="hidden" id="report-filter-nama" name="nama">
                <input type="hidden" id="report-filter-jenis-kelamin" name="jenis_kelamin">
                <input type="hidden" id="report-filter-rt" name="rt">
                <input type="hidden" id="report-filter-rw" name="rw">
                <input type="hidden" id="report-filter-kelurahan" name="kelurahan">
                <input type="hidden" id="report-filter-jenis-berkas" name="jenis_berkas">

                <input type="hidden" id="report-filter-status" name="status">

                <input type="hidden" id="report-filter-tanggal-dari" name="tanggal_dari">
                <input type="hidden" id="report-filter-tanggal-sampai" name="tanggal_sampai">

                <button type="submit" class="btn btn-primary btn-sm"><i class="md-print"></i>&nbsp; Print Report</button>
              </form>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Main Widget -->
</div>
<div class="col-xxl-12 col-lg-12 col-xs-12">
  <!-- Main Widget -->
  <div class="card card-shadow">
    <div class="card-block p-0">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1 style="float: left">Daftar Pemohon Legalisir</h1>
            <div style="top: 10px">
              <button id="filter-legalisir" class="btn btn-default btn-sm" style="float: right; top: 105px"><i class="md-filter-list"></i>&nbsp; Filter Data</button>
              @if (Auth::user()->isAdmin() == 0)
                <button class="btn btn-primary btn-sm btn-new" data-toggle="modal" data-target="#legalisir-create-modal" style="float: right; top: 105px; right: 10px"><i class="md-collection-plus"></i>&nbsp; Entri Data</button>
              @else
                <button class="btn btn-primary btn-sm" id="legalisir-archive" data-toggle="modal" data-target="#archive-legalisir-modal" style="float: right; top: 105px; right: 10px"><i class="md-archive"></i>&nbsp; Arsipkan Data</button>
              @endif
            </div>
          </div>
        </div><br>
        <div class="row">
          <div class="col-lg-12 col-md-8 col-sm-12 col-xs-12">
            <table id="legalisir-table" class="table table-hover display responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <th>NIK</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Berkas</th>
                <th>Dibuat Tgl</th>
                <th>Action</th>
              </thead>
              <!-- Inject by AJAX -->
              <tbody></tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Main Widget -->
</div>
@endsection

@push('script')
<script src="{{ asset('js/typeahead.js') }}"></script>
<script src="{{ asset('js/legalisir.js') }}"></script>
<script type="text/javascript">
  $(document).ready(function() {

    // Initialize Legalisir
    initLegalisir()

    // Initialize DataTables
    var legalisir_table = $('#legalisir-table').DataTable({
      searching: false,
      processing: true,
      serverSide: true,
      bStateSave: true,
      ajax: {
        url: '/api/legalisir',
        data: function(d) {
          d.nik = $('#filter-legalisir-nik').val(),
          d.nama = $('#filter-legalisir-nama').val(),
          d.jenis_kelamin = $('#filter-legalisir-jenis-kelamin').val(),
          d.rt = $('#filter-legalisir-rt').val(),
          d.rw = $('#filter-legalisir-rw').val(),
          d.kelurahan = $('#filter-legalisir-kelurahan').val(),
          d.jenis_berkas = $('#filter-legalisir-jenis-berkas').val(),
          d.status = $('#filter-legalisir-status').val(),
          d.tanggal_dari = $('#filter-legalisir-tanggal-dari').val(),
          d.tanggal_sampai = $('#filter-legalisir-tanggal-sampai').val()
        }
      },
      columns: [
        { data: 'nik' },
        { data: 'nama' },
        { data: 'alamat' },
        { data: 'jenis_berkas' },
        { data: 'created_at' },
        { data: 'action', searchable: false, orderable: false }
      ]
     })

    // New Legalisir
    $('.btn-new').click(function() {
      clearErrorCreateField()
      clearCreateField()
    })

    // Submit Filter
    $('#filter-legalisir-form').submit(function(e) {
      e.preventDefault()

      $('#report-filter-nik').val($('#filter-legalisir-nik').val())
      $('#report-filter-nama').val($('#filter-legalisir-nama').val())
      $('#report-filter-jenis-kelamin').val($('#filter-legalisir-jenis-kelamin').val())
      $('#report-filter-rt').val($('#filter-legalisir-rt').val())
      $('#report-filter-rw').val($('#filter-legalisir-rw').val())
      $('#report-filter-kelurahan').val($('#filter-legalisir-kelurahan').val())
      $('#report-filter-jenis-berkas').val($('#filter-legalisir-jenis-berkas').val())

      $('#report-filter-status').val($('#filter-legalisir-status').val())

      $('#report-filter-tanggal-dari').val($('#filter-legalisir-tanggal-dari').val())
      $('#report-filter-tanggal-sampai').val($('#filter-legalisir-tanggal-sampai').val())

      legalisir_table.draw()
    })

    // Submit create
    $('#legalisir-create-form').submit(function(e) {
      e.preventDefault()
      /* Act on the event */
      doAjaxCreate(`/dashboard/legalisir`, 'POST', $(this).serialize())
    })

    // Submit update
    $('#legalisir-edit-form').submit(function(e) {
      e.preventDefault()
      let id = $('#legalisir-edit-id').val()
      /* Act on the event */
      doAjaxUpdate(`/dashboard/legalisir/${id}`, 'PUT', $(this).serialize())
    })

     // Core : draw datatables!
     $('#legalisir-table').on('draw.dt', function() {

      // Show Legalisir
      $('.legalisir-show').click(function() {

        /* Get the value and store to temporary variable */
        let nik = $(this).data('nik')
        let nama = $(this).data('nama')
        let jenis_kelamin = $(this).data('jenis_kelamin')
        let jenis_berkas = $(this).data('jenis_berkas')
        let alamat = $(this).data('alamat')
        let rt = $(this).data('rt')
        let rw = $(this).data('rw')
        let kelurahan = $(this).data('kelurahan')

        /* Act on the event */
        fillShowForm(nik, nama, jenis_kelamin, jenis_berkas, alamat, rt, rw, kelurahan)
      })

      // Edit legalisir
      $('.legalisir-edit').click(function() {
        
        $('#check-status').prop('checked', false)
        /* Get the value and store to temporary variable */
        let id = $(this).data('id')
        let nik = $(this).data('nik')
        let nama = $(this).data('nama')
        let jenis_kelamin = $(this).data('jenis_kelamin')
        let jenis_berkas = $(this).data('jenis_berkas')
        let alamat = $(this).data('alamat')
        let rt = $(this).data('rt')
        let rw = $(this).data('rw')
        let kelurahan = $(this).data('kelurahan')

        /* Act on the event */
        clearErrorEditField()
        fillEditForm(id, nik, nama, jenis_kelamin, jenis_berkas, alamat, rt, rw, kelurahan)
      })

      // Delete data
      $('.legalisir-delete').click(function() {
        let id = $(this).data('id')
        let nik = $(this).data('nik')
        /* Act on the event */
        doAjaxDelete(`/dashboard/legalisir/${id}`, 'DELETE', {'id' : id, 'nik' : nik})
      })

    })
  })
</script>
@endpush