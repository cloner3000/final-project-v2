@extends('layouts.app')

@section('content')

@include('pelayanan.pindahkeluar-crud.form')

<div class="col-xxl-12 col-lg-12 col-xs-12">
  <!-- Main Widget -->
  <div id="filter-pindahkeluar-card" class="card card-shadow">
    <div class="card-block p-0">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1>Filter Penduduk Pindah Keluar</h1>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <form id="filter-pindahkeluar-form" class="form-inline">
              <h5><strong>Kategori</strong></h5>  
              <div class="form-group">
                <!-- NIK -->
                <div class="form-group form-material">
                  <input type="text" id="filter-pindahkeluar-nik" class="form-control" name="nik" placeholder="Filter by NIK"
                  autocomplete="off" />
                </div>
                <!-- Nama -->
                <div class="form-group form-material">
                  <input type="text" id="filter-pindahkeluar-nama" class="form-control" name="nama" placeholder="Filter by Nama"
                  autocomplete="off" />
                </div>
                <!-- Jenis Kelamin -->
                <div class="form-group form-material">
                  <input type="text" id="filter-pindahkeluar-jenis-kelamin" class="form-control typeahead-jenis-kelamin" name="jenis_kelamin" placeholder="Filter by Jenis Kelamin" autocomplete="off" />
                </div>
                <!-- Tempat Lahir -->
                <div class="form-group form-material">
                  <input type="text" id="filter-pindahkeluar-tempat-lahir" class="form-control" name="tempat_lahir" placeholder="Filter by Tempat Lahir" autocomplete="off" />
                </div>
                <!-- Kewarganegaraan -->
                <div class="form-group form-material">
                  <input type="text" id="filter-pindahkeluar-kewarganegaraan" class="form-control typeahead-kewarganegaraan" name="kewarganegaraan" placeholder="Filter by Kewarganegaraan" autocomplete="off" />
                </div>
                <!-- Golongan Darah -->
                <div class="form-group form-material">
                  <input type="text" id="filter-pindahkeluar-golongan-darah" class="form-control typeahead-golongan-darah" name="gol_darah" placeholder="Filter by Golongan Darah" autocomplete="off" />
                </div>
                <!-- Agama -->
                <div class="form-group form-material">
                  <input type="text" id="filter-pindahkeluar-agama" class="form-control typeahead-agama" name="agama" placeholder="Filter by Agama" autocomplete="off" />
                </div>
                <!-- Status Perkawinan -->
                <div class="form-group form-material">
                  <input type="text" id="filter-pindahkeluar-status-perkawinan" class="form-control typeahead-status-perkawinan" name="status_perkawinan" placeholder="Filter by Status Perkawinan" autocomplete="off" />
                </div>
                <!-- SHDK -->
                <div class="form-group form-material">
                  <input type="text" id="filter-pindahkeluar-shdk" class="form-control typeahead-shdk" name="shdk" placeholder="Filter by SHDK" autocomplete="off" />
                </div>
                <!-- Pendidikan -->
                <div class="form-group form-material">
                  <input type="text" id="filter-pindahkeluar-pendidikan" class="form-control typeahead-pendidikan" name="pendidikan" placeholder="Filter by Pendidikan" autocomplete="off" />
                </div>
                <!-- Pekerjaan -->
                <div class="form-group form-material">
                  <input type="text" id="filter-pindahkeluar-pekerjaan" class="form-control typeahead-pekerjaan" name="pekerjaan" placeholder="Filter by Pekerjaan" autocomplete="off" />
                </div>
                <!-- RT -->
                <div class="form-group form-material">
                  <input type="number" id="filter-pindahkeluar-rt" class="form-control" name="rt" placeholder="Filter by RT"
                  autocomplete="off" />
                </div>
                <!-- RW -->
                <div class="form-group form-material">
                  <input type="number" id="filter-pindahkeluar-rw" class="form-control" name="rw" placeholder="Filter by RW"
                  autocomplete="off" />
                </div>
                <!-- Kelurahan -->
                <div class="form-group form-material">
                  <input type="text" id="filter-pindahkeluar-kelurahan" class="form-control typeahead-kelurahan" name="kelurahan" placeholder="Filter by Kelurahan" autocomplete="off" />
                </div>
              </div>
              <!-- Tanggal Lahir -->
              <div class="form-group">
                <h5><strong>Tanggal Lahir</strong></h5>
                <!-- Tanggal Dari -->
                <div class="form-group form-material">
                  <input type="text" class="form-control" id="filter-pindahkeluar-tanggal-lahir-dari" name="tanggal_lahir_dari" placeholder="Dari" autocomplete="off" />
                </div>
                <!-- Tanggal Sampai -->
                <div class="form-group form-material">
                  <input type="text" class="form-control" id="filter-pindahkeluar-tanggal-lahir-sampai" name="tanggal_lahir_sampai" placeholder="Sampai" autocomplete="off" />
                </div>
              </div><br>
              <!-- Status -->
              <div class="form-group">
                <h5><strong>Status</strong></h5>
                <div class="form-group form-material" data-plugin="formMaterial">
                  <select id="filter-pindahkeluar-status" name="status" class="form-control">
                    <option value="0">Belum</option>
                    <option value="1">On Progress</option>
                    <option value="2">Selesai</option>
                  </select>
                </div>
              </div><br>
              <!-- Tanggal Dibuat -->
              <div class="form-group">
                <h5><strong>Tanggal Dibuat</strong></h5>
                <!-- Tanggal Dari -->
                <div class="form-group form-material">
                  <input type="text" class="form-control" id="filter-pindahkeluar-tanggal-dari" name="tanggal_dari" placeholder="Dari" autocomplete="off" />
                </div>
                <!-- Tanggal Sampai -->
                <div class="form-group form-material">
                  <input type="text" class="form-control" id="filter-pindahkeluar-tanggal-sampai" name="tanggal_sampai" placeholder="Sampai" autocomplete="off" />
                </div>
              </div><br><br>
              <div class="form-group">
                <button type="submit" class="btn btn-success btn-sm"><i class="md-search"></i>&nbsp; Cari</button>
              </div>
            </form>
            @if ( Auth::user()->isAdmin() != 0 )
              <!-- Print report by filter -->
              <form target="_blank" action="{{ url('/dashboard/reports/pindahkeluar/filter') }}" method="GET" style="position: relative; bottom: 32.5px; margin-left: 70px;">
                {{ csrf_field() }}
                
                <input type="hidden" id="report-filter-nik" name="nik">
                <input type="hidden" id="report-filter-nama" name="nama">
                <input type="hidden" id="report-filter-jenis-kelamin" name="jenis_kelamin">
                <input type="hidden" id="report-filter-tempat-lahir" name="tempat-lahir">
                <input type="hidden" id="report-filter-kewarganegaraan" name="kewarganegaraan">

                <input type="hidden" id="report-filter-golongan-darah" name="gol_darah">
                <input type="hidden" id="report-filter-agama" name="agama">
                <input type="hidden" id="report-filter-status-perkawinan" name="status_perkawinan">
                <input type="hidden" id="report-filter-shdk" name="shdk">
                <input type="hidden" id="report-filter-pendidikan" name="pendidikan">
                <input type="hidden" id="report-filter-pekerjaan" name="pekerjaan">

                <input type="hidden" id="report-filter-rt" name="rt">
                <input type="hidden" id="report-filter-rw" name="rw">
                <input type="hidden" id="report-filter-kelurahan" name="kelurahan">

                <input type="hidden" id="report-filter-tanggal-lahir-dari" name="tanggal_lahir_dari">
                <input type="hidden" id="report-filter-tanggal-lahir-sampai" name="tanggal_lahir_sampai">

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
            <h1 style="float: left">Daftar Penduduk Pindah Keluar</h1>
            <div style="top: 10px">
              <button id="filter-pindahkeluar" class="btn btn-default btn-sm" style="float: right; top: 105px"><i class="md-filter-list"></i>&nbsp; Filter Data</button>
              @if (Auth::user()->isAdmin() == 0)
                <button class="btn btn-primary btn-sm btn-new" data-toggle="modal" data-target="#pindahkeluar-create-modal" style="float: right; top: 105px; right: 10px"><i class="md-collection-plus"></i>&nbsp; Entri Data</button>
              @else
                <button class="btn btn-primary btn-sm" id="pindahkeluar-archive" data-toggle="modal" data-target="#archive-pindahkeluar-modal" style="float: right; top: 105px; right: 10px"><i class="md-archive"></i>&nbsp; Arsipkan Data</button>
              @endif
            </div>
          </div>
        </div><br>
        <div class="row">
          <div class="col-lg-12 col-md-8 col-sm-12 col-xs-12">
            <table id="pindahkeluar-table" class="table table-hover display responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <th></th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Dibuat Tgl</th>
                <th>Status</th>
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
<script src="{{ asset('js/pindahkeluar.js') }}"></script>
<script type="text/javascript">
  $(document).ready(function() {

    // Initialize Pindah Keluar
    initPindahKeluar()

    // Initialize DataTables
    var pindahkeluar_table = $('#pindahkeluar-table').DataTable({
      searching: false,
      processing: true,
      serverSide: true,
      bStateSave: true,
      ajax: {
        url: '/api/pindahkeluar',
        data: function(d) {
          d.nik = $('#filter-pindahkeluar-nik').val(),
          d.nama = $('#filter-pindahkeluar-nama').val(),
          d.jenis_kelamin = $('#filter-pindahkeluar-jenis-kelamin').val(),
          d.tempat_lahir = $('#filter-pindahkeluar-tempat-lahir').val(),
          d.kewarganegaraan = $('#filter-pindahkeluar-kewarganegaraan').val(),
          d.gol_darah = $('#filter-pindahkeluar-golongan-darah').val(),
          d.agama = $('#filter-pindahkeluar-agama').val(),
          d.status_perkawinan = $('#filter-pindahkeluar-status-perkawinan').val(),
          d.shdk = $('#filter-pindahkeluar-shdk').val(),
          d.pendidikan = $('#filter-pindahkeluar-pendidikan').val(),
          d.pekerjaan = $('#filter-pindahkeluar-pekerjaan').val(),
          d.rt = $('#filter-pindahkeluar-rt').val(),
          d.rw = $('#filter-pindahkeluar-rw').val(),
          d.kelurahan = $('#filter-pindahkeluar-kelurahan').val(),

          d.tanggal_lahir_dari = $('#filter-pindahkeluar-tanggal-lahir-dari').val(),
          d.tanggal_lahir_sampai = $('#filter-pindahkeluar-tanggal-lahir-sampai').val(),

          d.status = $('#filter-pindahkeluar-status').val(),
          
          d.tanggal_dari = $('#filter-pindahkeluar-tanggal-dari').val(),
          d.tanggal_sampai = $('#filter-pindahkeluar-tanggal-sampai').val()
        }
      },
      columns: [
        {
          "class": "details-control",
          "orderable": false,
          "data": null,
          "defaultContent": ""
        },
        { data: 'nik' },
        { data: 'nama' },
        { data: 'created_at' },
        { data: 'status', searchable: false, orderable: false },
        { data: 'action', searchable: false, orderable: false }
      ]
     })

    // Handle specified data to show
    function format ( d ) {
      return `<table class="table borderless">
                <tr>
                  <td>No. Registrasi : <strong>${d.id}</strong></td>
                  <td>Jenis Kelamin : <strong>${d.jenis_kelamin}</strong></td>
                  <td>Golongan Darah : <strong>${d.gol_darah}</strong></td>
                  <td>Status Perkawinan : <strong>${d.status_perkawinan}</strong></td>
                </tr>
                <tr>
                  <td>Tempat Lahir  : <strong>${d.tempat_lahir}</strong></td>
                  <td>Tanggal Lahir : <strong>${d.tanggal_lahir}</strong></td>
                  <td>Kewarganegaraan : <strong>${d.kewarganegaraan}</strong></td>
                  <td>Agama : <strong>${d.agama}</strong></td>
                </tr>
                <tr>
                  <td>Pendidikan  : <strong>${d.pendidikan}</strong></td>
                  <td>Pekerjaan : <strong>${d.pekerjaan}</strong></td>
                  <td>SHDK : <strong>${d.shdk}</strong></td>
                </tr>
                <tr>
                  <td>Alamat Sekarang : <strong>${d.alamat_sekarang}</strong></td>
                  <td>RT / RW : <strong>${d.rt} / ${d.rw}</strong></td>
                  <td>Kelurahan : <strong>${d.kelurahan}</strong></td>
                  <td>Alamat Pindah : <strong>${d.alamat_tujuan}</strong></td>
                </tr>
              </table>`
    }

    // Array to track the ids of the details displayed rows
    let detailRows = [];
  
    // Assign event action to button
    $('#pindahkeluar-table tbody').on( 'click', 'tr td.details-control', function () {
      let tr = $(this).closest('tr');
      let row = pindahkeluar_table.row( tr );
      let idx = $.inArray( tr.attr('id'), detailRows );

      if ( row.child.isShown() ) {
          tr.removeClass( 'details' );
          row.child.hide();

          // Remove from the 'open' array
          detailRows.splice( idx, 1 );
      }
      else {
        tr.addClass( 'details' );
        row.child( format( row.data() ) ).show();

        // Add to the 'open' array
        if ( idx === -1 ) {
          detailRows.push( tr.attr('id') );
        }
      }
    })

    // New Pindah Keluar
    $('.btn-new').click(function() {
      clearErrorCreateField()
      clearCreateField()
    })

    // Submit Filter
    $('#filter-pindahkeluar-form').submit(function(e) {
      e.preventDefault()

      $('#report-filter-nik').val($('#filter-pindahkeluar-nik').val())
      $('#report-filter-nama').val($('#filter-pindahkeluar-nama').val())
      $('#report-filter-jenis-kelamin').val($('#filter-pindahkeluar-jenis-kelamin').val())
      $('#report-filter-tempat-lahir').val($('#filter-pindahkeluar-tempat-lahir').val())
      $('#report-filter-kewarganegaraan').val($('#filter-pindahkeluar-kewarganegaraan').val())

      $('#report-filter-golongan-darah').val($('#filter-pindahkeluar-golongan-darah').val())
      $('#report-filter-agama').val($('#filter-pindahkeluar-agama').val())
      $('#report-filter-status-perkawinan').val($('#filter-pindahkeluar-status-perkawinan').val())
      $('#report-filter-shdk').val($('#filter-pindahkeluar-shdk').val())
      $('#report-filter-pendidikan').val($('#filter-pindahkeluar-pendidikan').val())
      $('#report-filter-pekerjaan').val($('#filter-pindahkeluar-pekerjaan').val())

      $('#report-filter-rt').val($('#filter-pindahkeluar-rt').val())
      $('#report-filter-rw').val($('#filter-pindahkeluar-rw').val())
      $('#report-filter-kelurahan').val($('#filter-pindahkeluar-kelurahan').val())

      $('#report-filter-tanggal-lahir-dari').val($('#filter-pindahkeluar-tanggal-lahir-dari').val())
      $('#report-filter-tanggal-lahir-sampai').val($('#filter-pindahkeluar-tanggal-lahir-sampai').val())

      $('#report-filter-status').val($('#filter-pindahkeluar-status').val())

      $('#report-filter-tanggal-dari').val($('#filter-pindahkeluar-tanggal-dari').val())
      $('#report-filter-tanggal-sampai').val($('#filter-pindahkeluar-tanggal-sampai').val())

      pindahkeluar_table.draw()
    })

    // Submit create
    $('#pindahkeluar-create-form').submit(function(e) {
      e.preventDefault()
      /* Act on the event */
      doAjaxCreate(`/dashboard/pindahkeluar`, 'POST', $(this).serialize())
    })

    // Submit update
    $('#pindahkeluar-edit-form').submit(function(e) {
      e.preventDefault()
      let id = $('#pindahkeluar-edit-id').val()
      /* Act on the event */
      doAjaxUpdate(`/dashboard/pindahkeluar/${id}`, 'PUT', $(this).serialize())
    })

     // Core : draw datatables!
     $('#pindahkeluar-table').on('draw.dt', function() {

      // Trigger click to details button
      $.each( detailRows, function ( i, id ) {
        $('#'+ id +' td.details-control').trigger( 'click' );
      });
      
      // Show Pindah Keluar
      // $('.pindahkeluar-show').click(function() {
      //   /* Get the value and store to temporary variable */
      //   let no_kk = $(this).data('no_kk')
      //   let nik = $(this).data('nik')
      //   let nama = $(this).data('nama')
      //   let jenis_kelamin = $(this).data('jenis_kelamin')
      //   let tempat_lahir = $(this).data('tempat_lahir')
      //   let tanggal_lahir = $(this).data('tanggal_lahir')
      //   let kewarganegaraan = $(this).data('kewarganegaraan')
      //   let gol_darah = $(this).data('gol_darah')

      //   let agama = $(this).data('agama')
      //   let status_perkawinan = $(this).data('status_perkawinan')
      //   let shdk = $(this).data('shdk')
      //   let pendidikan = $(this).data('pendidikan')
      //   let pekerjaan = $(this).data('pekerjaan')

      //   let alamat_sekarang = $(this).data('alamat_sekarang')
      //   let rt = $(this).data('rt')
      //   let rw = $(this).data('rw')
      //   let kelurahan = $(this).data('kelurahan')
      //   let alamat_tujuan = $(this).data('alamat_tujuan')
      //   let status = $(this).data('kelurahan')

      //   /* Act on the event */
      //   fillShowForm(no_kk, nik, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, kewarganegaraan, gol_darah, agama, status_perkawinan, shdk, pendidikan, pekerjaan, alamat_sekarang, rt, rw, kelurahan, alamat_tujuan)
      // })

      // Edit Pindah Keluar
      $('.pindahkeluar-edit').click(function() {
        
        /* Get the value and store to temporary variable */
        let id = $(this).data('id')
        let no_kk = $(this).data('no_kk')
        let nik = $(this).data('nik')
        let nama = $(this).data('nama')
        let jenis_kelamin = $(this).data('jenis_kelamin')
        let tempat_lahir = $(this).data('tempat_lahir')
        let tanggal_lahir = $(this).data('tanggal_lahir')
        let kewarganegaraan = $(this).data('kewarganegaraan')
        let gol_darah = $(this).data('gol_darah')

        let agama = $(this).data('agama')
        let status_perkawinan = $(this).data('status_perkawinan')
        let shdk = $(this).data('shdk')
        let pendidikan = $(this).data('pendidikan')
        let pekerjaan = $(this).data('pekerjaan')

        let alamat_sekarang = $(this).data('alamat_sekarang')
        let rt = $(this).data('rt')
        let rw = $(this).data('rw')
        let kelurahan = $(this).data('kelurahan')
        let alamat_tujuan = $(this).data('alamat_tujuan')
        let status = $(this).data('kelurahan')

        /* Act on the event */
        fillEditForm(id, no_kk, nik, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, kewarganegaraan, gol_darah, agama, status_perkawinan, shdk, pendidikan, pekerjaan, alamat_sekarang, rt, rw, kelurahan, alamat_tujuan)
      })

      // Delete data
      $('.pindahkeluar-delete').click(function() {
        let id = $(this).data('id')
        let nik = $(this).data('nik')
        /* Act on the event */
        doAjaxDelete(`/dashboard/pindahkeluar/${id}`, 'DELETE', {'id' : id, 'nik' : nik})
      })

    })
  })
</script>
@endpush