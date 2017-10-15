@extends('layouts.app')

@section('content')

@include('pelayanan.ktp-crud.form')

@include('admin.reports.form')

<div class="col-xxl-12 col-lg-12 col-xs-12">
  <!-- Main Widget -->
  <div id="filter-ktp-card" class="card card-shadow">
    <div class="card-block p-0">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1>Filter Pemohon E-KTP</h1>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <form id="filter-ktp-form" class="form-inline">
              <h5><strong>Kategori</strong></h5>
              <div class="form-group">
                <!-- NIK -->
                <div class="form-group form-material">
                  <input type="text" class="form-control" id="filter-ktp-nik" name="nik" placeholder="Filter by NIK"
                  autocomplete="off" />
                </div>
                <!-- Nama -->
                <div class="form-group form-material">
                  <input type="text" class="form-control" id="filter-ktp-nama" name="nama" placeholder="Filter by Nama"
                  autocomplete="off" />
                </div>
                <!-- Jenis Kelamin -->
                <div class="form-group form-material">
                  <input type="text" class="form-control typeahead-jenis-kelamin" id="filter-ktp-jenis-kelamin" name="jenis_kelamin" placeholder="Filter by Jenis Kelamin" autocomplete="off" />
                </div>
                <!-- Tempat Lahir -->
                <div class="form-group form-material">
                  <input type="text" class="form-control" id="filter-ktp-tempat-lahir" name="tempat_lahir" placeholder="Filter by Tempat Lahir" autocomplete="off" />
                </div>
                <!-- Tanggal lahir -->
                <div class="form-group form-material">
                  <input type="text" class="form-control" id="filter-ktp-tanggal-lahir" name="tanggal_lahir" placeholder="Filter by Tanggal Lahir"
                  autocomplete="off" />
                </div>
                <!-- Kewarganegaraan -->
                <div class="form-group form-material">
                  <input type="text" class="form-control typeahead-kewarganegaraan" id="filter-ktp-kewarganegaraan" name="kewarganegaraan" placeholder="Filter by Kewarganegaraan" autocomplete="off" />
                </div>
                <!-- Golongan Darah -->
                <div class="form-group form-material">
                  <input type="text" class="form-control typeahead-golongan-darah" id="filter-ktp-golongan-darah" name="gol_darah" placeholder="Filter by Golongan Darah" autocomplete="off" />
                </div>
                <!-- Agama -->
                <div class="form-group form-material">
                  <input type="text" class="form-control typeahead-agama" id="filter-ktp-agama" name="agama" placeholder="Filter by Agama" autocomplete="off" />
                </div>
                <!-- Status Perkawinan -->
                <div class="form-group form-material">
                  <input type="text" class="form-control typeahead-status-perkawinan" id="filter-ktp-status-perkawinan" name="status_perkawinan" placeholder="Filter by Status Perkawinan" autocomplete="off" />
                </div>
                <!-- Pendidikan -->
                <div class="form-group form-material">
                  <input type="text" class="form-control typeahead-pendidikan" id="filter-ktp-pendidikan" name="pendidikan" placeholder="Filter by Pendidikan" autocomplete="off" />
                </div>
                <!-- Pekerjaan -->
                <div class="form-group form-material">
                  <input type="text" class="form-control typeahead-pekerjaan" id="filter-ktp-pekerjaan" name="pekerjaan" placeholder="Filter by Pekerjaan" autocomplete="off" />
                </div>
                <!-- RT -->
                <div class="form-group form-material">
                  <input type="number" class="form-control" id="filter-ktp-rt" name="rt" placeholder="Filter by RT"
                  autocomplete="off" />
                </div>
                <!-- RW -->
                <div class="form-group form-material">
                  <input type="number" class="form-control" id="filter-ktp-rw" name="rw" placeholder="Filter by RW"
                  autocomplete="off" />
                </div>
                <!-- Kelurahan -->
                <div class="form-group form-material">
                  <input type="text" class="form-control typeahead-kelurahan" id="filter-ktp-kelurahan" name="kelurahan" placeholder="Filter by Kelurahan" autocomplete="off" />
                </div>
              </div>
              <!-- Status -->
              <div class="form-group">
                <h5><strong>Status</strong></h5>
                <div class="form-group form-material" data-plugin="formMaterial">
                  <select id="filter-ktp-status" name="status" class="form-control">
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
                  <input type="text" class="form-control" id="filter-ktp-tanggal-dari" name="tanggal_dari" placeholder="Dari" autocomplete="off" />
                </div>
                <!-- Tanggal Sampai -->
                <div class="form-group form-material">
                  <input type="text" class="form-control" id="filter-ktp-tanggal-sampai" name="tanggal_sampai" placeholder="Sampai" autocomplete="off" />
                </div>
              </div><br><br>
              <div class="form-group">
                <button type="submit" class="btn btn-success btn-sm"><i class="md-search"></i>&nbsp; Cari</button>
              </div>
            </form>
            <!-- Print report by filter -->
            <form target="_blank" action="{{ url('/dashboard/reports/ktp/filter') }}" method="GET" style="position: relative; bottom: 32.5px; margin-left: 70px;">
              {{ csrf_field() }}
              
              <input type="hidden" id="report-filter-nik" name="nik">
              <input type="hidden" id="report-filter-nama" name="nama">
              <input type="hidden" id="report-filter-jenis-kelamin" name="jenis_kelamin">
              <input type="hidden" id="report-filter-tempat-lahir" name="tempat-lahir">
              <input type="hidden" id="report-filter-tanggal-lahir" name="tanggal_lahir">
              <input type="hidden" id="report-filter-kewarganegaraan" name="kewarganegaraan">
              <input type="hidden" id="report-filter-golongan-darah" name="gol_darah">
              <input type="hidden" id="report-filter-agama" name="agama">
              <input type="hidden" id="report-filter-status-perkawinan" name="status_perkawinan">
              <input type="hidden" id="report-filter-pendidikan" name="pendidikan">
              <input type="hidden" id="report-filter-pekerjaan" name="pekerjaan">
              <input type="hidden" id="report-filter-rt" name="rt">
              <input type="hidden" id="report-filter-rw" name="rw">
              <input type="hidden" id="report-filter-kelurahan" name="kelurahan">

              <input type="hidden" id="report-filter-status" name="status">

              <input type="hidden" id="report-filter-tanggal-dari" name="tanggal_dari">
              <input type="hidden" id="report-filter-tanggal-sampai" name="tanggal_sampai">

              <button type="submit" class="btn btn-primary btn-sm"><i class="md-print"></i>&nbsp; Print Report</button>
            </form>
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
            <h1 style="float: left">Daftar Pemohon E-KTP</h1>
            <div style="top: 10px">
              <button id="filter-ktp" class="btn btn-default btn-sm" style="float: right; top: 105px"><i class="md-filter-list"></i>&nbsp; Filter Data</button>
              @if (Auth::user()->isAdmin() == 0)
                <button class="btn btn-primary btn-sm btn-new" data-toggle="modal" data-target="#ktp-create-modal" style="float: right; top: 105px; right: 10px"><i class="md-collection-plus"></i>&nbsp; Entri Data</button>
                {{-- <button class="btn btn-info btn-sm" id="ktp-reports" data-toggle="modal" data-target="#reports-ktp-modal" style="float: right; top: 105px; right: 20px"><i class="md-print"></i>&nbsp; Print Report</button> --}}
              @endif
            </div>
          </div>
        </div><br>
        <div class="row">
          <div class="col-lg-12 col-md-8 col-sm-12 col-xs-12">
            <table id="ktp-table" class="table table-hover">
              <thead>
                <th>NIK</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Dibuat Tanggal</th>
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
<script src="{{ asset('js/ktp.js') }}"></script>
<script type="text/javascript">
  $(document).ready(function() {

    // Init Ktp
    initKtp()

    // Initialize DataTables
    var ktp_table = $('#ktp-table').DataTable({
      searching: false,
      processing: true,
      serverSide: true,
      bStateSave: true,
      ajax: {
        url: '/api/ktp',
        data: function(d) {
          d.nik = $('#filter-ktp-nik').val(),
          d.nama = $('#filter-ktp-nama').val(),
          d.jenis_kelamin = $('#filter-ktp-jenis-kelamin').val(),
          d.tempat_lahir = $('#filter-ktp-tempat-lahir').val(),
          d.tanggal_lahir = $('#filter-ktp-tanggal-lahir').val(),
          d.kewarganegaraan = $('#filter-ktp-kewarganegaraan').val(),
          d.gol_darah = $('#filter-ktp-golongan-darah').val(),
          d.agama = $('#filter-ktp-agama').val(),
          d.status_perkawinan = $('#filter-ktp-status-perkawinan').val(),
          d.pendidikan = $('#filter-ktp-pendidikan').val(),
          d.pekerjaan = $('#filter-ktp-pekerjaan').val(),
          d.rt = $('#filter-ktp-rt').val(),
          d.rw = $('#filter-ktp-rw').val(),
          d.kelurahan = $('#filter-ktp-kelurahan').val(),
          d.status = $('#filter-ktp-status').val(),
          d.tanggal_dari = $('#filter-ktp-tanggal-dari').val(),
          d.tanggal_sampai = $('#filter-ktp-tanggal-sampai').val()
        }
      },
      columns: [
        { data: 'nik' },
        { data: 'nama' },
        { data: 'alamat' },
        { data: 'created_at' },
        { data: 'action', searchable: false, orderable: false }
      ]
     });

     // Core : draw datatables!
     $('#ktp-table').on('draw.dt', function() {

      // New KTP
      $('.btn-new').click(function() {
        clearErrorCreateField();
        clearCreateField();
      });

      // Show KTP
      $('.ktp-show').click(function() {

        /* Get the value and store to temporary variable */
        let nik = $(this).data('nik');
        let nama = $(this).data('nama');
        let jenis_kelamin = $(this).data('jenis_kelamin');
        let tempat_lahir = $(this).data('tempat_lahir');
        let tanggal_lahir = $(this).data('tanggal_lahir');
        let kewarganegaraan = $(this).data('kewarganegaraan');
        let gol_darah = $(this).data('gol_darah');

        let agama = $(this).data('agama');
        let status_perkawinan = $(this).data('status_perkawinan');
        let pendidikan = $(this).data('pendidikan');
        let pekerjaan = $(this).data('pekerjaan');
        let nama_ayah = $(this).data('nama_ayah');
        let nama_ibu = $(this).data('nama_ibu');

        let alamat = $(this).data('alamat');
        let rt = $(this).data('rt');
        let rw = $(this).data('rw');
        let kelurahan = $(this).data('kelurahan');

        /* Act on the event */
        fillShowForm(nik, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, kewarganegaraan, gol_darah, agama, status_perkawinan, pendidikan, pekerjaan, nama_ayah, nama_ibu, alamat, rt, rw, kelurahan);
      });

      // Edit KTP
      $('.ktp-edit').click(function(e) {
        
        $('#check-status').prop('checked', false);
        /* Get the value and store to temporary variable */
        let id = $(this).data('id');
        let nik = $(this).data('nik');
        let nama = $(this).data('nama');
        let jenis_kelamin = $(this).data('jenis_kelamin');
        let tempat_lahir = $(this).data('tempat_lahir');
        let tanggal_lahir = $(this).data('tanggal_lahir');
        let kewarganegaraan = $(this).data('kewarganegaraan');
        let gol_darah = $(this).data('gol_darah');

        let agama = $(this).data('agama');
        let status_perkawinan = $(this).data('status_perkawinan');
        let pendidikan = $(this).data('pendidikan');
        let pekerjaan = $(this).data('pekerjaan');
        let nama_ayah = $(this).data('nama_ayah');
        let nama_ibu = $(this).data('nama_ibu');

        let alamat = $(this).data('alamat');
        let rt = $(this).data('rt');
        let rw = $(this).data('rw');
        let kelurahan = $(this).data('kelurahan');

        /* Act on the event */
        fillEditForm(id, nik, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, kewarganegaraan, gol_darah, agama, status_perkawinan, pendidikan, pekerjaan, nama_ayah, nama_ibu, alamat, rt, rw, kelurahan);
      });

      // Delete data
      $('.ktp-delete').click(function(e) {
        let id = $(this).data('id');
        let nik = $(this).data('nik');
        /* Act on the event */
        doAjaxDelete(`/dashboard/ktp/${id}`, 'DELETE', {'id' : id, 'nik' : nik});
      });

      // Submit Filter
      $('#filter-ktp-form').submit(function(e) {
          e.preventDefault();

          $('#report-filter-nik').val($('#filter-ktp-nik').val());
          $('#report-filter-nama').val($('#filter-ktp-nama').val());
          $('#report-filter-jenis-kelamin').val($('#filter-ktp-jenis-kelamin').val());
          $('#report-filter-tempat-lahir').val($('#filter-ktp-tempat-lahir').val());
          $('#report-filter-tanggal-lahir').val($('#filter-ktp-tanggal-lahir').val());
          $('#report-filter-kewarganegaraan').val($('#filter-ktp-kewarganegaraan').val());
          $('#report-filter-golongan-darah').val($('#filter-ktp-golongan-darah').val());
          $('#report-filter-agama').val($('#filter-ktp-agama').val());
          $('#report-filter-status-perkawinan').val($('#filter-ktp-status-perkawinan').val());
          $('#report-filter-pendidikan').val($('#filter-ktp-pendidikan').val());
          $('#report-filter-pekerjaan').val($('#filter-ktp-pekerjaan').val());
          $('#report-filter-rt').val($('#filter-ktp-rt').val());
          $('#report-filter-rw').val($('#filter-ktp-rw').val());
          $('#report-filter-kelurahan').val($('#filter-ktp-kelurahan').val());

          $('#report-filter-status').val($('#filter-ktp-status').val());

          $('#report-filter-tanggal-dari').val($('#filter-ktp-tanggal-dari').val());
          $('#report-filter-tanggal-sampai').val($('#filter-ktp-tanggal-sampai').val());

          /* Act on the event */
          ktp_table.draw();
      });

      // Submit create
      $('#ktp-create-form').submit(function(e) {
        e.preventDefault();
        /* Act on the event */
        doAjaxCreate(`/dashboard/ktp`, 'POST', $(this).serialize());
      });

      // Submit update
      $('#ktp-edit-form').submit(function(e) {
        e.preventDefault();
        let id = $('#ktp-edit-id').val();
        /* Act on the event */
        doAjaxUpdate(`/dashboard/ktp/${id}`, 'PUT', $(this).serialize());
      });

    });
  });
</script>
@endpush