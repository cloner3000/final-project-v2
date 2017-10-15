@extends('layouts.app')

@section('content')
@include('admin.user.form')
<div class="col-xxl-12 col-lg-12 col-xs-12">
  <!-- Main Widget -->
  <div class="card card-shadow">
    <div class="card-block p-0">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1 style="float: left">Daftar User</h1>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <button class="btn btn-primary btn-sm btn-new" data-toggle="modal" data-target="#user-create-modal"><i class="md-collection-plus"></i>&nbsp; Tambah User</button>
          </div>
        </div><br>
        <div class="row">
          <div class="col-lg-12 col-md-8 col-sm-12 col-xs-12">
            <table id="user-table" class="table table-hover">
              <thead>
                <th>Nama</th>
                <th>Username</th>
                <th>Email</th>
                <th>Terdaftar Sejak</th>
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
<script src="{{ asset('js/user.js') }}"></script>
<script type="text/javascript">
  $(document).ready(function() {

    // Initialize DataTables
    $('#user-table').DataTable({
      processing: true,
      serverSide: true,
      bStateSave: true,
      ajax: '/api/users',
      columns: [
        { data: 'name' },
        { data: 'username' },
        { data: 'email' },
        { data: 'created_at' },
        { data: 'action', searchable: false, orderable: false }
      ]
     });

     // Core : draw datatables!
     $('#user-table').on('draw.dt', function() {

      // New Users
      $('.btn-new').click(function() {
        clearErrorCreateField();
        clearCreateField();
      });

      // Show Users
      $('.user-show').click(function() {

        /* Get the value and store to temporary variable */
        let name = $(this).data('name');
        let username = $(this).data('username');
        let email = $(this).data('email');

        /* Act on the event */
        fillShowForm(name, username, email);
      });

      // Delete data
      $('.user-delete').click(function() {
        let id = $(this).data('id');
        /* Act on the event */
        doAjaxDelete(`/dashboard/users/${id}`, 'DELETE', {'id' : id});
      });

      // Submit create
      $('#user-create-form').submit(function(e) {
        e.preventDefault();
        /* Act on the event */
        doAjaxCreate(`/dashboard/users`, 'POST', $(this).serialize());
      });

    });
  });
</script>
@endpush