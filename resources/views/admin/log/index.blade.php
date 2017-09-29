@extends('layouts.app')

@section('content')
<div class="col-xxl-12 col-lg-12 col-xs-12">
  <!-- Main Widget -->
  <div class="card card-shadow">
    <div class="card-block p-0">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1 style="float: left">Log Pengguna</h1>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <button class="btn btn-danger btn-sm log-delete"><i class="md-delete"></i>&nbsp; Kosongkan Log</button>
          </div>
        </div><br>
        <div class="row">
          <div class="col-lg-12 col-md-8 col-sm-12 col-xs-12">
            <table id="log-table" class="table table-hover">
              <thead>
                <th>ID</th>
                <th>Username</th>
                <th>Aktifitas</th>
                <th>Dibuat Tgl</th>
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
<script src="{{ asset('js/log.js') }}"></script>
<script type="text/javascript">
  $(document).ready(function() {

    // Initialize DataTables
    $('#log-table').DataTable({
      processing: true,
      serverSide: true,
      bStateSave: true,
      ajax: '/api/log',
      columns: [
        { data: 'user_id' },
        { data: 'user_name' },
        { data: 'activity' },
        { data: 'created_at' }
      ]
     });

     // Core : draw datatables!
     $('#log-table').on('draw.dt', function() {

      // Delete data
      $('.log-delete').click(function() {
        /* Act on the event */
        doAjaxDelete("{{ url('/dashboard/truncatelog') }}", 'POST', '');
      });

    });
  });
</script>
@endpush