// Initialize Legalisir
function initLegalisir() {

    // Hide filter section
    $('#filter-legalisir-card').hide()

    // Show Filter Kartu Keluarga Section
    $('#filter-legalisir').click(function(e) {

        $('#filter-legalisir-card').slideToggle()
        
        $('#filter-legalisir-tanggal-dari').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true
        })
        $('#filter-legalisir-tanggal-sampai').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true
        })
    })
}

// Clear error field on create form
function clearCreateField() 
{
    $('#create-nik').val('')
    $('#create-nama').val('')
    $('#create-alamat').val('')
    $('#create-rt').val('')
    $('#create-rw').val('')
    $('#create-kelurahan').val('')
    $('#create-jenis-berkas').val('')  
}

// Clear error field on create form
function clearErrorCreateField() 
{
    $('.create-legalisir-error-nik').html('')
    $('.create-legalisir-error-nama').html('')
    $('.create-legalisir-error-alamat').html('')
    $('.create-legalisir-error-rt').html('')
    $('.create-legalisir-error-rw').html('')
    $('.create-legalisir-error-kelurahan').html('')
    $('.create-legalisir-error-jenis-berkas').html('') 
}

// Clear error field on edit form
function clearErrorEditField() 
{
    $('.edit-legalisir-error-nik').html('')
    $('.edit-legalisir-error-nama').html('')
    $('.edit-legalisir-error-alamat').html('')
    $('.edit-legalisir-error-rt').html('')
    $('.edit-legalisir-error-rw').html('')
    $('.edit-legalisir-error-kelurahan').html('')
    $('.edit-legalisir-error-jenis-berkas').html('')
}

// Fill error field on create field
function fillErrorCreateField(nik, nama, alamat, rt, rw, kelurahan, jenis_berkas) 
{
    $('.create-legalisir-error-nik').html(nik)
    $('.create-legalisir-error-nama').html(nama)
    $('.create-legalisir-error-alamat').html(alamat)
    $('.create-legalisir-error-rt').html(rt)
    $('.create-legalisir-error-rw').html(rw)
    $('.create-legalisir-error-kelurahan').html(kelurahan)
    $('.create-legalisir-error-jenis-berkas').html(jenis_berkas)
}

// Fill error field on edit form
function fillErrorEditField(nik, nama, alamat, rt, rw, kelurahan, jenis_berkas) 
{
    $('.edit-legalisir-error-nik').html(nik)
    $('.edit-legalisir-error-nama').html(nama)
    $('.edit-legalisir-error-alamat').html(alamat)
    $('.edit-legalisir-error-rt').html(rt)
    $('.edit-legalisir-error-rw').html(rw)
    $('.edit-legalisir-error-kelurahan').html(kelurahan)
    $('.edit-legalisir-error-jenis-berkas').html(jenis_berkas)
}

// Fill Show Form
function fillShowForm(nik, nama, alamat, rt, rw, kelurahan, jenis_berkas) 
{
    $('#show-nik').val(nik)
    $('#show-nama').val(nama)
    $('#show-alamat').val(alamat)
    $('#show-rt').val(rt)
    $('#show-rw').val(rw)
    $('#show-kelurahan').val(kelurahan)
    $('#show-jenis-berkas').val(jenis_berkas)
}

// Fill Edit Form
function fillEditForm(id, nik, nama, alamat, rt, rw, kelurahan, jenis_berkas) 
{
    $('#legalisir-edit-id').val(id)
    $('#edit-nik').val(nik)
    $('#edit-nama').val(nama)
    $('#edit-alamat').val(alamat)
    $('#edit-rt').val(rt)
    $('#edit-rw').val(rw)
    $('#edit-kelurahan').val(kelurahan)
    $('#edit-jenis-berkas').val(jenis_berkas)
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
                $('#legalisir-create-modal').modal('hide')

            $('#legalisir-table').dataTable().fnStandingRedraw()
            clearCreateField()
        },
        error: function(jqXHR) {
            let message = JSON.parse(jqXHR.responseText);

            let nik = message.errors.nik
            let nama = message.errors.nama
            let alamat = message.errors.alamat
            let rt = message.errors.rt
            let rw = message.errors.rw
            let kelurahan = message.errors.kelurahan
            let jenis_berkas = message.errors.jenis_berkas

            // Clear error field first
            clearErrorCreateField()
            
            // Show validating error messages
            fillErrorCreateField(nik, nama, alamat, rt, rw, kelurahan, jenis_berkas)
        }
    })
}

// Do Ajax Update
function doAjaxUpdate(url, type, param) {
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: url,
        type: type,
        data: param,
        success: function(data) {
            if (data.message == 'updated') 
                $('#legalisir-edit-modal').modal('hide')
            
            $('#legalisir-table').dataTable().fnStandingRedraw()
        },
        error: function(jqXHR) {
            let message = JSON.parse(jqXHR.responseText);

            // If validating process fails, display the error messages
            let nik = message.errors.nik
            let nama = message.errors.nama
            let alamat = message.errors.alamat
            let rt = message.errors.rt
            let rw = message.errors.rw
            let kelurahan = message.errors.kelurahan
            let jenis_berkas = message.errors.jenis_berkas
            
            // Clear error field first
            clearErrorEditField()
            
            // Show validating error messages
            fillErrorEditField(nik, nama, alamat, rt, rw, kelurahan, jenis_berkas)
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

                $('#legalisir-table').dataTable().fnStandingRedraw()
            }
        })
    },
    function (dismiss) {
        if (dismiss === 'cancel')
            swal('Batal', 'Aksi dibatalkan!', 'error')
    })
}
// End of Function