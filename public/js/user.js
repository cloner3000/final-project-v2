// Clear error field on create form
function clearCreateField() 
{
  $('#create-name').val('')
  $('#create-username').val('')
  $('#create-email').val('')
}

// Clear error field on create form
function clearErrorCreateField() 
{
  $('.create-user-error-name').html('')
  $('.create-user-error-username').html('')
  $('.create-user-error-email').html('')
}

// Fill error field on create field
function fillErrorCreateField(name, username, email) 
{
  $('.create-user-error-name').html(name)
  $('.create-user-error-username').html(username)
  $('.create-user-error-email').html(email)
}

// Fill Show Form
function fillShowForm(name, username, email) 
{
  $('#show-name').val(name)
  $('#show-username').val(username)
  $('#show-email').val(email)
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
        if (data.message == 'stored')
          $('#user-create-modal').modal('hide')

        $('#user-table').dataTable().fnStandingRedraw()
        clearCreateField()
      },
      error: function(jqXHR) {
        let message = JSON.parse(jqXHR.responseText)

        // If validating process fails, display the error messages
        let name = message.errors.name
        let username = message.errors.username
        let email = message.errors.email

        // Clear error field first
        clearErrorCreateField()
        
        // Show validating error messages
        fillErrorCreateField(name, username, email)
      }
  })
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
  })
  .then(function () {
    $.ajax({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      url: url,
      type: type,
      data: param,
      success: function(data) {
        if(data.message == 'deleted')
          swal('Terhapus!', 'Data terhapus!', 'success')

        $('#user-table').dataTable().fnStandingRedraw()
      }
    })
  },
  function (dismiss) {
    if (dismiss === 'cancel')
      swal('Batal', 'Aksi dibatalkan!', 'error')
  })
}
// End of Function