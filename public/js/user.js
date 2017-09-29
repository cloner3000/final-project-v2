// Clear error field on create form
function clearCreateField() 
{
  $('#create-name').val('');
  $('#create-username').val('');
  $('#create-email').val('');
}

// Clear error field on create form
function clearErrorCreateField() 
{
  $('.create-user-error-name').html('');
  $('.create-user-error-username').html('');
  $('.create-user-error-email').html('');
}

// Fill error field on create field
function fillErrorCreateField(name, username, email) 
{
  $('.create-user-error-name').html(name);
  $('.create-user-error-username').html(username);
  $('.create-user-error-email').html(email);
}

// Fill Show Form
function fillShowForm(name, username, email) 
{
  $('#show-name').val(name);
  $('#show-username').val(username);
  $('#show-email').val(email);
}

// Do Ajax Create
function doAjaxCreate(url, type, param) {
  $.ajax({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      url: url,
      type: type,
      data: param,
      success: function(data) {
          // If validating process fails, display the error messages
          if(data.hasOwnProperty('errors'))
          {
              let name = data.errors.name;
              let username = data.errors.username;
              let email = data.errors.email;

              // Clear error field first
              clearErrorCreateField();
              
              // Show validating error messages
              fillErrorCreateField(name, username, email);
          } 
          else {
              $('#user-create-modal').modal('hide');
              swal({
                  title: 'Simpan data?',
                  text: "Anda bisa melakukan perbaharuan apabila terdapat kesalahan",
                  type: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Simpan data'
              }).then(function () {
                  if (data.message == 'stored') {
                      swal('Tersimpan!', 'Data tersimpan!', 'success');
                      $('#user-table').dataTable().fnStandingRedraw();
                      clearCreateField();
                  }
              });
          }
      }
  });
}

// Do Ajax Delete
function doAjaxDelete(url, type, param) {
  swal({
    title: 'Hapus data?',
    text: "Anda tidak akan bisa melakukan rollback!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Hapus data!'
  }).then(function () {
    $.ajax({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      url: url,
      type: type,
      data: param,
      success: function(data) {
        if(data.message == 'deleted') {
          swal('Terhapus!', 'Data terhapus!', 'success');
        }
        $('#user-table').dataTable().fnStandingRedraw();
      }
    });
  });
}
// End of Function