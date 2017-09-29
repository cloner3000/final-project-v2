// Do Ajax Delete
function doAjaxDelete(url, type, param) {
    swal({
      title: 'Kosongkan log?',
      text: "Anda tidak akan bisa melakukan rollback!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Kosongkan Log'
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
            swal('Terhapus!', 'Log telah dikosongkan!', 'success');
          }
          $('#log-table').dataTable().fnStandingRedraw();
        }
      });
    });
}
// End of Function