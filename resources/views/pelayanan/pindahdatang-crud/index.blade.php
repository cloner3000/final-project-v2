@extends('layouts.app')

@section('content')

@include('pelayanan.pindahdatang-crud.form')

@include('admin.reports.form')

<div class="col-xxl-12 col-lg-12 col-xs-12">
  <!-- Main Widget -->
  <div id="filter-pindahdatang-card" class="card card-shadow">
    <div class="card-block p-0">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1>Filter Pemohon Pindah Datang</h1>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <form id="filter-pindahdatang-form" class="form-inline">
              <h5><strong>Kategori</strong></h5>
              <div class="form-group">
                <!-- NIK -->
                <div class="form-group form-material">
                  <input type="text" id="filter-pindahdatang-nik" class="form-control" name="nik" placeholder="Filter by NIK"
                  autocomplete="off" />
                </div>
                <!-- Nama -->
                <div class="form-group form-material">
                  <input type="text" id="filter-pindahdatang-nama" class="form-control" name="nama" placeholder="Filter by Nama"
                  autocomplete="off" />
                </div>
                <!-- Jenis Kelamin -->
                <div class="form-group form-material">
                  <input type="text" id="filter-pindahdatang-jenis-kelamin" class="form-control typeahead-jenis-kelamin" name="jenis_kelamin" placeholder="Filter by Jenis Kelamin" autocomplete="off" />
                </div>
                <!-- Tempat Lahir -->
                <div class="form-group form-material">
                  <input type="text" id="filter-pindahdatang-tempat-lahir" class="form-control" name="tempat_lahir" placeholder="Filter by Tempat Lahir" autocomplete="off" />
                </div>
                <!-- Tanggal lahir -->
                <div class="form-group form-material">
                  <input type="text" id="filter-pindahdatang-tanggal-lahir" class="form-control" name="tanggal_lahir" placeholder="Filter by Tanggal Lahir"
                  autocomplete="off" />
                </div>
                <!-- Kewarganegaraan -->
                <div class="form-group form-material">
                  <input type="text" id="filter-pindahdatang-kewarganegaraan" class="form-control typeahead-kewarganegaraan" name="kewarganegaraan" placeholder="Filter by Kewarganegaraan" autocomplete="off" />
                </div>
                <!-- Golongan Darah -->
                <div class="form-group form-material">
                  <input type="text" id="filter-pindahdatang-golongan-darah" class="form-control typeahead-golongan-darah" name="gol_darah" placeholder="Filter by Golongan Darah" autocomplete="off" />
                </div>
                <!-- Agama -->
                <div class="form-group form-material">
                  <input type="text" id="filter-pindahdatang-agama" class="form-control typeahead-agama" name="agama" placeholder="Filter by Agama" autocomplete="off" />
                </div>
                <!-- Status Perkawinan -->
                <div class="form-group form-material">
                  <input type="text" id="filter-pindahdatang-status-perkawinan" class="form-control typeahead-status-perkawinan" name="status_perkawinan" placeholder="Filter by Status Perkawinan" autocomplete="off" />
                </div>
                <!-- SHDK -->
                <div class="form-group form-material">
                  <input type="text" id="filter-pindahdatang-shdk" class="form-control typeahead-shdk" name="shdk" placeholder="Filter by SHDK" autocomplete="off" />
                </div>
                <!-- Pendidikan -->
                <div class="form-group form-material">
                  <input type="text" id="filter-pindahdatang-pendidikan" class="form-control typeahead-pendidikan" name="pendidikan" placeholder="Filter by Pendidikan" autocomplete="off" />
                </div>
                <!-- Pekerjaan -->
                <div class="form-group form-material">
                  <input type="text" id="filter-pindahdatang-pekerjaan" class="form-control typeahead-pekerjaan" name="pekerjaan" placeholder="Filter by Pekerjaan" autocomplete="off" />
                </div>
                <!-- RT -->
                <div class="form-group form-material">
                  <input type="number" id="filter-pindahdatang-rt" class="form-control" name="rt" placeholder="Filter by RT"
                  autocomplete="off" />
                </div>
                <!-- RW -->
                <div class="form-group form-material">
                  <input type="number" id="filter-pindahdatang-rw" class="form-control" name="rw" placeholder="Filter by RW"
                  autocomplete="off" />
                </div>
                <!-- Kelurahan -->
                <div class="form-group form-material">
                  <input type="text" id="filter-pindahdatang-kelurahan" class="form-control typeahead-kelurahan" name="kelurahan" placeholder="Filter by Kelurahan" autocomplete="off" />
                </div>
              </div>
              <!-- Status -->
              <div class="form-group">
                <h5><strong>Status</strong></h5>
                <div class="form-group form-material" data-plugin="formMaterial">
                  <select id="filter-pindahdatang-status" name="status" class="form-control">
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
                  <input type="text" class="form-control" id="filter-pindahdatang-tanggal-dari" name="tanggal_dari" placeholder="Dari" autocomplete="off" />
                </div>
                <!-- Tanggal Sampai -->
                <div class="form-group form-material">
                  <input type="text" class="form-control" id="filter-pindahdatang-tanggal-sampai" name="tanggal_sampai" placeholder="Sampai" autocomplete="off" />
                </div>
              </div><br><br>
              <div class="form-group">
                <button type="submit" class="btn btn-success btn-sm"><i class="md-search"></i>&nbsp; Cari</button>
              </div>
            </form><br>
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
            <h1 style="float: left">Daftar Pemohon Pindah Datang</h1>
            <div style="top: 10px">
              <button id="filter-pindahdatang" class="btn btn-default btn-sm" style="float: right; top: 105px"><i class="md-filter-list"></i>&nbsp; Filter Data</button>
              @if (Auth::user()->isAdmin() == 0)
                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#pindahdatang-create-modal" style="float: right; top: 105px; right: 10px"><i class="md-collection-plus"></i>&nbsp; Entri Data</button>
              @else
                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#reports-pindahdatang-modal" style="float: right; top: 105px; right: 20px"><i class="md-print"></i>&nbsp; Print Report</button>
              @endif
            </div>
          </div>
        </div><br>
        <div class="row">
          <div class="col-lg-12 col-md-8 col-sm-12 col-xs-12">
            <table id="pindahdatang-table" class="table table-hover">
              <thead>
                <th>NIK</th>
                <th>Nama</th>
                <th>Alamat Sebelumnya</th>
                <th>Alamat Sekarang</th>
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
<script src="{{ asset('js/pindahdatang.js') }}"></script>
<script type="text/javascript">
  $(document).ready(function() {

    // Initialize Pindah Datang
    initPindahDatang();

    // Initialize DataTables
    var pindahdatang_table = $('#pindahdatang-table').DataTable({
      searching: false,
      processing: true,
      serverSide: true,
      bStateSave: true,
      ajax: {
        url: '/api/pindahdatang',
        data: function(d) {
          d.nik = $('#filter-pindahdatang-nik').val(),
          d.nama = $('#filter-pindahdatang-nama').val(),
          d.jenis_kelamin = $('#filter-pindahdatang-jenis-kelamin').val(),
          d.tempat_lahir = $('#filter-pindahdatang-tempat-lahir').val(),
          d.tanggal_lahir = $('#filter-pindahdatang-tanggal-lahir').val(),
          d.agama = $('#filter-pindahdatang-agama').val(),
          d.status_perkawinan = $('#filter-pindahdatang-status-perkawinan').val(),
          d.shdk = $('#filter-pindahdatang-shdk').val(),
          d.pendidikan = $('#filter-pindahdatang-pendidikan').val(),
          d.pekerjaan = $('#filter-pindahdatang-pekerjaan').val(),
          d.rt = $('#filter-pindahdatang-rt').val(),
          d.rw = $('#filter-pindahdatang-rw').val(),
          d.kelurahan = $('#filter-pindahdatang-kelurahan').val(),
          d.status = $('#filter-pindahdatang-status').val(),
          d.tanggal_dari = $('#filter-pindahdatang-tanggal-dari').val(),
          d.tanggal_sampai = $('#filter-pindahdatang-tanggal-sampai').val()
        }
      },
      columns: [
        { data: 'nik' },
        { data: 'nama' },
        { data: 'alamat_lama' },
        { data: 'alamat_sekarang' },
        { data: 'created_at' },
        { data: 'action', searchable: false, orderable: false }
      ]
     });

     // Core : draw datatables!
     $('#pindahdatang-table').on('draw.dt', function() {

      // Show Pindah Datang
      $('.pindahdatang-show').click(function() {
        /* Get the value and store to temporary variable */
        let no_kk = $(this).data('no_kk');
        let nik = $(this).data('nik');
        let nama = $(this).data('nama');
        let jenis_kelamin = $(this).data('jenis_kelamin');
        let tempat_lahir = $(this).data('tempat_lahir');
        let tanggal_lahir = $(this).data('tanggal_lahir');
        let kewarganegaraan = $(this).data('kewarganegaraan');
        let gol_darah = $(this).data('gol_darah');

        let agama = $(this).data('agama');
        let status_perkawinan = $(this).data('status_perkawinan');
        let shdk = $(this).data('shdk');
        let pendidikan = $(this).data('pendidikan');
        let pekerjaan = $(this).data('pekerjaan');

        let alamat_lama = $(this).data('alamat_lama');
        let alamat_sekarang = $(this).data('alamat_sekarang');
        let rt = $(this).data('rt');
        let rw = $(this).data('rw');
        let kelurahan = $(this).data('kelurahan');
        let status = $(this).data('kelurahan');

        /* Act on the event */
        fillShowForm(no_kk, nik, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, kewarganegaraan, gol_darah, agama, status_perkawinan, shdk, pendidikan, pekerjaan, alamat_lama, alamat_sekarang, rt, rw, kelurahan)
      });

      // Edit Pindah Datang
      $('.pindahdatang-edit').click(function(e) {
        e.preventDefault();
        /* Get the value and store to temporary variable */
        let id = $(this).data('id');
        let no_kk = $(this).data('no_kk');
        let nik = $(this).data('nik');
        let nama = $(this).data('nama');
        let jenis_kelamin = $(this).data('jenis_kelamin');
        let tempat_lahir = $(this).data('tempat_lahir');
        let tanggal_lahir = $(this).data('tanggal_lahir');
        let kewarganegaraan = $(this).data('kewarganegaraan');
        let gol_darah = $(this).data('gol_darah');

        let agama = $(this).data('agama');
        let status_perkawinan = $(this).data('status_perkawinan');
        let shdk = $(this).data('shdk');
        let pendidikan = $(this).data('pendidikan');
        let pekerjaan = $(this).data('pekerjaan');

        let alamat_lama = $(this).data('alamat_lama');
        let alamat_sekarang = $(this).data('alamat_sekarang');
        let rt = $(this).data('rt');
        let rw = $(this).data('rw');
        let kelurahan = $(this).data('kelurahan');
        let status = $(this).data('kelurahan');

        /* Act on the event */
        fillEditForm(id, no_kk, nik, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, kewarganegaraan, gol_darah, agama, status_perkawinan, shdk, pendidikan, pekerjaan, alamat_lama, alamat_sekarang, rt, rw, kelurahan);
      });

      // Delete data
      $('.pindahdatang-delete').click(function() {
        let id = $(this).data('id');
        let nik = $(this).data('nik');
        /* Act on the event */
        doAjaxDelete(`/dashboard/pindahdatang/${id}`, 'DELETE', {'id' : id, 'nik' : nik});
      });

      // Submit Filter
      $('#filter-pindahdatang-form').submit(function(e) {
          e.preventDefault();
          pindahdatang_table.draw();
      });

      // Submit create
      $('#pindahdatang-create-form').submit(function(e) {
        e.preventDefault();

        /* Act on the event */
        doAjaxCreate(`/dashboard/pindahdatang`, 'POST', $(this).serialize());
      });

      // Submit update
      $('#pindahdatang-edit-form').submit(function(e) {
        e.preventDefault();
        let id = $('#pindahdatang-edit-id').val();

        /* Act on the event */
        doAjaxUpdate(`/dashboard/pindahdatang/${id}`, 'PUT', $(this).serialize());
      });

    });
  });
</script>
@endpush