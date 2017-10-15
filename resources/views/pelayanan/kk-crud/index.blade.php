@extends('layouts.app')

@section('content')

@include('pelayanan.kk-crud.form')

@include('admin.reports.form')

<div class="col-xxl-12 col-lg-12 col-xs-12">
  <!-- Main Widget -->
  <div id="filter-kk-card" class="card card-shadow">
    <div class="card-block p-0">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1>Filter Pemohon Kartu Keluarga</h1>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <form id="filter-kk-form" class="form-inline">
              <h5><strong>Kategori</strong></h5>
              <div class="form-group">
                <!-- Nomor KK -->
                <div class="form-group form-material">
                  <input type="text" class="form-control" id="filter-kk-no-kk" name="no_kk" placeholder="Filter by Nomor Kartu Keluarga"
                  autocomplete="off" />
                </div>
                <!-- NIK -->
                <div class="form-group form-material">
                  <input type="text" class="form-control" id="filter-kk-nik" name="nik" placeholder="Filter by NIK"
                  autocomplete="off" />
                </div>
                <!-- Nama -->
                <div class="form-group form-material">
                  <input type="text" class="form-control" id="filter-kk-nama" name="nama" placeholder="Filter by Nama"
                  autocomplete="off" />
                </div>
                <!-- Jenis Kelamin -->
                <div class="form-group form-material">
                  <input type="text" class="form-control typeahead-jenis-kelamin" id="filter-kk-jenis-kelamin" name="jenis_kelamin" placeholder="Filter by Jenis Kelamin" autocomplete="off" />
                </div>
                <!-- RT -->
                <div class="form-group form-material">
                  <input type="number" class="form-control" id="filter-kk-rt" name="rt" placeholder="Filter by RT"
                  autocomplete="off" />
                </div>
                <!-- RW -->
                <div class="form-group form-material">
                  <input type="number" class="form-control" id="filter-kk-rw" name="rw" placeholder="Filter by RW"
                  autocomplete="off" />
                </div>
                <!-- Kelurahan -->
                <div class="form-group form-material">
                  <input type="text" class="form-control typeahead-kelurahan" id="filter-kk-kelurahan" name="kelurahan" placeholder="Filter by Kelurahan" autocomplete="off" />
                </div>
                <!-- Jumlah Pengikut -->
                <div class="form-group form-material">
                  <input type="number" class="form-control" id="filter-kk-jumlah-pengikut" name="jumlah_pengikut" placeholder="Filter by Jumlah Pengikut" autocomplete="off" />
                </div>
              </div>
              <!-- Status -->
              <div class="form-group">
                <h5><strong>Status</strong></h5>
                <div class="form-group form-material" data-plugin="formMaterial">
                  <select id="filter-kk-status" name="status" class="form-control">
                    <option value="0">0 - Belum Dicek</option>
                    <option value="1">1 - Sudah Dicek</option>
                  </select>
                </div>
              </div><br><br>
              <!-- Rentang Waktu -->
              <div class="form-group">
                <h5><strong>Rentang Waktu</strong></h5>
                <!-- Tanggal Dari -->
                <div class="form-group form-material">
                  <input type="text" class="form-control" id="filter-kk-tanggal-dari" name="tanggal_dari" placeholder="Dari" autocomplete="off" />
                </div>
                <!-- Tanggal Sampai -->
                <div class="form-group form-material">
                  <input type="text" class="form-control" id="filter-kk-tanggal-sampai" name="tanggal_sampai" placeholder="Sampai" autocomplete="off" />
                </div>
              </div><br><br>
              <div class="form-group">
                <button type="submit" class="btn btn-success btn-sm"><i class="md-search"></i>&nbsp; Cari</button>
              </div>
            </form>
            @if ( Auth::user()->isAdmin() != 0 )
              <!-- Print report by filter -->
              <form target="_blank" action="{{ url('/dashboard/reports/kk/filter') }}" method="GET" style="position: relative; bottom: 32.5px; margin-left: 70px;">
                {{ csrf_field() }}

                <input type="hidden" id="report-filter-no-kk" name="no_kk">
                <input type="hidden" id="report-filter-nik" name="nik">
                <input type="hidden" id="report-filter-nama" name="nama">
                <input type="hidden" id="report-filter-jenis-kelamin" name="jenis_kelamin">
                <input type="hidden" id="report-filter-rt" name="rt">
                <input type="hidden" id="report-filter-rw" name="rw">
                <input type="hidden" id="report-filter-kelurahan" name="kelurahan">
                <input type="hidden" id="report-filter-jumlah-pengikut" name="jumlah_pengikut">

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
            <h1 style="float: left">Daftar Pemohon Kartu Keluarga</h1>
            <div style="top: 10px">
              <button id="filter-kk" class="btn btn-default btn-sm" style="float: right; top: 105px"><i class="md-filter-list"></i>&nbsp; Filter Data</button>
              @if (Auth::user()->isAdmin() == 0)
                <button class="btn btn-primary btn-sm btn-new" data-toggle="modal" data-target="#kk-create-modal" style="float: right; top: 105px; right: 10px"><i class="md-collection-plus"></i>&nbsp; Entri Data</button>
                {{-- <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#reports-kk-modal" style="float: right; top: 105px; right: 20px"><i class="md-print"></i>&nbsp; Print Report</button> --}}
              @endif
            </div>
          </div>
        </div><br>
        <div class="row">
          <div class="col-lg-12 col-md-8 col-sm-12 col-xs-12">
            <table id="kk-table" class="table table-hover">
              <thead>
                <th>No. KK</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Alamat</th>
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
<script src="{{ asset('js/kk.js') }}"></script>
<script type="text/javascript">
  $(document).ready(function() {

    // Initialize Kartu Keluarga
    initKartuKeluarga();

    // Initialize DataTables
    var kk_table = $('#kk-table').DataTable({
      searching: false,
      processing: true,
      serverSide: true,
      bStateSave: true,
      ajax: {
        url: '/api/kk',
        data: function(d) {
          d.no_kk = $('#filter-kk-no-kk').val(),
          d.nik = $('#filter-kk-nik').val(),
          d.nama = $('#filter-kk-nama').val(),
          d.jenis_kelamin = $('#filter-kk-jenis-kelamin').val(),
          d.rt = $('#filter-kk-rt').val(),
          d.rw = $('#filter-kk-rw').val(),
          d.kelurahan = $('#filter-kk-kelurahan').val(),
          d.jumlah_pengikut = $('#filter-kk-jumlah-pengikut').val(),
          d.status = $('#filter-kk-status').val(),
          d.tanggal_dari = $('#filter-kk-tanggal-dari').val(),
          d.tanggal_sampai = $('#filter-kk-tanggal-sampai').val()
        }
      },
      columns: [
        { data: 'no_kk' },
        { data: 'nik' },
        { data: 'nama' },
        { data: 'alamat' },
        { data: 'created_at' },
        { data: 'action', searchable: false, orderable: false }
      ]
     });

     // Core : draw datatables!
     $('#kk-table').on('draw.dt', function() {

      // New Kartu Keluarga
      $('.btn-new').click(function() {
        clearErrorCreateField();
        clearCreateField();
      });

      // Show Kartu Keluarga
      $('.kk-show').click(function(e) {
        /* Get the value and store to temporary variable */
        let no_kk = $(this).data('no_kk');
        let nik = $(this).data('nik');
        let nama = $(this).data('nama');
        let jenis_kelamin = $(this).data('jenis_kelamin');
        let alamat = $(this).data('alamat');
        let rt = $(this).data('rt');
        let rw = $(this).data('rw');
        let kelurahan = $(this).data('kelurahan');
        let jumlah_pengikut = $(this).data('jumlah_pengikut');
        let status = $(this).data('status');

        /* Act on the event */
        fillShowForm(no_kk, nik, nama, jenis_kelamin, alamat, rt, rw, kelurahan, jumlah_pengikut);
      });

      // Edit Kartu Keluarga
      $('.kk-edit').click(function(e) {
        
        $('#check-status').prop('checked', false);
        /* Get the value and store to temporary variable */
        let id = $(this).data('id');
        let no_kk = $(this).data('no_kk');
        let nik = $(this).data('nik');
        let nama = $(this).data('nama');
        let jenis_kelamin = $(this).data('jenis_kelamin');
        let alamat = $(this).data('alamat');
        let rt = $(this).data('rt');
        let rw = $(this).data('rw');
        let kelurahan = $(this).data('kelurahan');
        let jumlah_pengikut = $(this).data('jumlah_pengikut');
        let status = $(this).data('status');

        /* Act on the event */
        fillEditForm(id, no_kk, nik, nama, jenis_kelamin, alamat, rt, rw, kelurahan, jumlah_pengikut);
      });

      // Delete Kartu Keluarga
      $('.kk-delete').click(function() {
        let id = $(this).data('id');
        let nik = $(this).data('nik');
        /* Act on the event */
        doAjaxDelete(`/dashboard/kk/${id}`, 'DELETE', {'id' : id, 'nik' : nik});
      });

      // Submit Filter
      $('#filter-kk-form').submit(function(e) {
          e.preventDefault();

          $('#report-filter-no-kk').val($('#filter-kk-no-kk').val());
          $('#report-filter-nik').val($('#filter-kk-nik').val());
          $('#report-filter-nama').val($('#filter-kk-nama').val());
          $('#report-filter-jenis-kelamin').val($('#filter-kk-jenis-kelamin').val());
          $('#report-filter-rt').val($('#filter-kk-rt').val());
          $('#report-filter-rw').val($('#filter-kk-rw').val());
          $('#report-filter-kelurahan').val($('#filter-kk-kelurahan').val());
          $('#report-filter-jumlah-pengikut').val($('#filter-kk-jumlah-pengikut').val());

          $('#report-filter-status').val($('#filter-kk-status').val());

          $('#report-filter-tanggal-dari').val($('#filter-kk-tanggal-dari').val());
          $('#report-filter-tanggal-sampai').val($('#filter-kk-tanggal-sampai').val());

          kk_table.draw();
      });

      // Submit Create
      $('#kk-create-form').submit(function(e) {
        e.preventDefault();
        /* Act on the event */
        doAjaxCreate(`/dashboard/kk`, 'POST', $(this).serialize());
      });

      // Submit update
      $('#kk-edit-form').submit(function(e) {
        e.preventDefault();
        let id = $('#kk-edit-id').val();
        /* Act on the event */
        doAjaxUpdate(`/dashboard/kk/${id}`, 'PUT', $(this).serialize());
      });

    });
  });
</script>
@endpush