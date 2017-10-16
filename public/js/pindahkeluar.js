// Initialize Pindah Keluar
function initPindahKeluar() {

    // Hide filter section
    $('#filter-pindahkeluar-card').hide()

    // Show Filter Kartu Keluarga Section
    $('#filter-pindahkeluar').click(function(e) {
      /* Act on the event */
      $('#filter-pindahkeluar-card').slideToggle()
      
      $('#filter-pindahkeluar-tanggal-lahir').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true
      })
      $('#filter-pindahkeluar-tanggal-dari').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true
      })
      $('#filter-pindahkeluar-tanggal-sampai').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true
      })
    })

    // Create Pindah Datang DatePicker
    $('#create-tanggal-lahir').datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true
    })
    $('#edit-tanggal-lahir').datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true
    })
}

// Clear error field on create form
function clearCreateField() 
{
    $('#create-no-kk').val('')
    $('#create-nik').val('')
    $('#create-nama').val('')
    $('#create-jenis-kelamin').val('')
    $('#create-tempat-lahir').val('')
    $('#create-tanggal-lahir').val('')
    $('#create-kewarganegaraan').val('')
    $('#create-golongan-darah').val('')

    $('#create-agama').val('')
    $('#create-status-perkawinan').val('')
    $('#create-shdk').val('')
    $('#create-pendidikan').val('')
    $('#create-pekerjaan').val('')
    $('#create-alamat-sekarang').val('')
    $('#create-rt').val('')
    $('#create-rw').val('')
    $('#create-kelurahan').val('')
    $('#create-alamat-tujuan').val('')
}

// Clear error field on create form
function clearErrorCreateField() 
{
    $('.create-pindahkeluar-error-no-kk').html('')
    $('.create-pindahkeluar-error-nik').html('')
    $('.create-pindahkeluar-error-nama').html('')
    $('.create-pindahkeluar-error-jenis-kelamin').html('')
    $('.create-pindahkeluar-error-tempat-lahir').html('')
    $('.create-pindahkeluar-error-tanggal-lahir').html('')
    $('.create-pindahkeluar-error-kewarganegaraan').html('')
    $('.create-pindahkeluar-error-golongan-darah').html('')

    $('.create-pindahkeluar-error-agama').html('')
    $('.create-pindahkeluar-error-status-perkawinan').html('')
    $('.create-pindahkeluar-error-shdk').html('')
    $('.create-pindahkeluar-error-pendidikan').html('')
    $('.create-pindahkeluar-error-pekerjaan').html('')

    $('.create-pindahkeluar-error-alamat-sekarang').html('')
    $('.create-pindahkeluar-error-rt').html('')
    $('.create-pindahkeluar-error-rw').html('')
    $('.create-pindahkeluar-error-kelurahan').html('')
    $('.create-pindahkeluar-error-alamat-tujuan').html('')
}

// Clear error field on edit form
function clearErrorEditField() 
{
    $('.edit-pindahkeluar-error-no-kk').html('')
    $('.edit-pindahkeluar-error-nik').html('')
    $('.edit-pindahkeluar-error-nama').html('')
    $('.edit-pindahkeluar-error-jenis-kelamin').html('')
    $('.edit-pindahkeluar-error-tempat-lahir').html('')
    $('.edit-pindahkeluar-error-tanggal-lahir').html('')
    $('.edit-pindahkeluar-error-kewarganegaraan').html('')
    $('.edit-pindahkeluar-error-golongan-darah').html('')

    $('.edit-pindahkeluar-error-agama').html('')
    $('.edit-pindahkeluar-error-status-perkawinan').html('')
    $('.edit-pindahkeluar-error-shdk').html('')
    $('.edit-pindahkeluar-error-pendidikan').html('')
    $('.edit-pindahkeluar-error-pekerjaan').html('')

    $('.edit-pindahkeluar-error-alamat-sekarang').html('')
    $('.edit-pindahkeluar-error-rt').html('')
    $('.edit-pindahkeluar-error-rw').html('')
    $('.edit-pindahkeluar-error-kelurahan').html('')
    $('.edit-pindahkeluar-error-alamat-tujuan').html('')
}

// Fill error field on create field
function fillErrorCreateField(no_kk, nik, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, kewarganegaraan, gol_darah, agama, status_perkawinan, shdk, pendidikan, pekerjaan, alamat_sekarang, rt, rw, kelurahan, alamat_tujuan) 
{
    $('.create-pindahkeluar-error-no-kk').html(no_kk)
    $('.create-pindahkeluar-error-nik').html(nik)
    $('.create-pindahkeluar-error-nama').html(nama)
    $('.create-pindahkeluar-error-jenis-kelamin').html(jenis_kelamin)
    $('.create-pindahkeluar-error-tempat-lahir').html(tempat_lahir)
    $('.create-pindahkeluar-error-tanggal-lahir').html(tanggal_lahir)
    $('.create-pindahkeluar-error-kewarganegaraan').html(kewarganegaraan)
    $('.create-pindahkeluar-error-golongan-darah').html(gol_darah)

    $('.create-pindahkeluar-error-agama').html(agama)
    $('.create-pindahkeluar-error-status-perkawinan').html(status_perkawinan)
    $('.create-pindahkeluar-error-shdk').html(shdk)
    $('.create-pindahkeluar-error-pendidikan').html(pendidikan)
    $('.create-pindahkeluar-error-pekerjaan').html(pekerjaan)

    $('.create-pindahkeluar-error-alamat-sekarang').html(alamat_sekarang)
    $('.create-pindahkeluar-error-rt').html(rt)
    $('.create-pindahkeluar-error-rw').html(rw)
    $('.create-pindahkeluar-error-kelurahan').html(kelurahan)
    $('.create-pindahkeluar-error-alamat-tujuan').html(alamat_tujuan)
}

// Fill error field on edit form
function fillErrorEditField(no_kk, nik, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, kewarganegaraan, gol_darah, agama, status_perkawinan, shdk, pendidikan, pekerjaan, alamat_sekarang, rt, rw, kelurahan, alamat_tujuan) 
{
    $('.edit-pindahkeluar-error-no-kk').html(no_kk)
    $('.edit-pindahkeluar-error-nik').html(nik)
    $('.edit-pindahkeluar-error-nama').html(nama)
    $('.edit-pindahkeluar-error-jenis-kelamin').html(jenis_kelamin)
    $('.edit-pindahkeluar-error-tempat-lahir').html(tempat_lahir)
    $('.edit-pindahkeluar-error-tanggal-lahir').html(tanggal_lahir)
    $('.edit-pindahkeluar-error-kewarganegaraan').html(kewarganegaraan)
    $('.edit-pindahkeluar-error-golongan-darah').html(gol_darah)

    $('.edit-pindahkeluar-error-agama').html(agama)
    $('.edit-pindahkeluar-error-status-perkawinan').html(status_perkawinan)
    $('.edit-pindahkeluar-error-shdk').html(shdk)
    $('.edit-pindahkeluar-error-pendidikan').html(pendidikan)
    $('.edit-pindahkeluar-error-pekerjaan').html(pekerjaan)

    $('.edit-pindahkeluar-error-alamat-sekarang').html(alamat_sekarang)
    $('.edit-pindahkeluar-error-rt').html(rt)
    $('.edit-pindahkeluar-error-rw').html(rw)
    $('.edit-pindahkeluar-error-kelurahan').html(kelurahan)
    $('.edit-pindahkeluar-error-alamat-tujuan').html(alamat_tujuan)
}

// Fill Show Form
function fillShowForm(no_kk, nik, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, kewarganegaraan, gol_darah, agama, status_perkawinan, shdk, pendidikan, pekerjaan, alamat_sekarang, rt, rw, kelurahan, alamat_tujuan) 
{
    $('#show-no-kk').val(no_kk)
    $('#show-nik').val(nik)
    $('#show-nama').val(nama)
    $('#show-jenis-kelamin').val(jenis_kelamin)
    $('#show-tempat-lahir').val(tempat_lahir)
    $('#show-tanggal-lahir').val(tanggal_lahir)
    $('#show-kewarganegaraan').val(kewarganegaraan)
    $('#show-golongan-darah').val(gol_darah)

    $('#show-agama').val(agama)
    $('#show-status-perkawinan').val(status_perkawinan)
    $('#show-shdk').val(shdk)
    $('#show-pendidikan').val(pendidikan)
    $('#show-pekerjaan').val(pekerjaan)
    $('#show-alamat-sekarang').val(alamat_sekarang)
    $('#show-rt').val(rt)
    $('#show-rw').val(rw)
    $('#show-kelurahan').val(kelurahan)
    $('#show-alamat-tujuan').val(alamat_tujuan)
}

// Fill Edit Form
function fillEditForm(id, no_kk, nik, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, kewarganegaraan, gol_darah, agama, status_perkawinan, shdk, pendidikan, pekerjaan, alamat_sekarang, rt, rw, kelurahan, alamat_tujuan) 
{
    $('#pindahkeluar-edit-id').val(id)
    $('#edit-no-kk').val(no_kk)
    $('#edit-nik').val(nik)
    $('#edit-nama').val(nama)
    $('#edit-jenis-kelamin').val(jenis_kelamin)
    $('#edit-tempat-lahir').val(tempat_lahir)
    $('#edit-tanggal-lahir').val(tanggal_lahir)
    $('#edit-kewarganegaraan').val(kewarganegaraan)
    $('#edit-golongan-darah').val(gol_darah)

    $('#edit-agama').val(agama)
    $('#edit-status-perkawinan').val(status_perkawinan)
    $('#edit-shdk').val(shdk)
    $('#edit-pendidikan').val(pendidikan)
    $('#edit-pekerjaan').val(pekerjaan)
    $('#edit-alamat-sekarang').val(alamat_sekarang)
    $('#edit-rt').val(rt)
    $('#edit-rw').val(rw)
    $('#edit-kelurahan').val(kelurahan)
    $('#edit-alamat-tujuan').val(alamat_tujuan)
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
                $('#pindahkeluar-create-modal').modal('hide')

            $('#pindahkeluar-table').dataTable().fnStandingRedraw()
            clearCreateField()
        },
        error: function(jqXHR) {
            let message = JSON.parse(jqXHR.responseText)
            // If validating process fails, display the error messages
            let no_kk = message.errors.no_kk
            let nik = message.errors.nama
            let nama = message.errors.nama
            let jenis_kelamin = message.errors.jenis_kelamin
            let tempat_lahir = message.errors.tempat_lahir
            let tanggal_lahir = message.errors.tanggal_lahir
            let kewarganegaraan = message.errors.kewarganegaraan
            let gol_darah = message.errors.gol_darah
            let agama = message.errors.agama
            let status_perkawinan = message.errors.status_perkawinan
            let shdk = message.errors.shdk
            let pendidikan = message.errors.pendidikan
            let pekerjaan = message.errors.pekerjaan
            let alamat_sekarang = message.errors.alamat_sekarang
            let rt = message.errors.rt
            let rw = message.errors.rw
            let kelurahan = message.errors.kelurahan
            let alamat_tujuan = message.errors.alamat_tujuan

            // Clear error field first
            clearErrorCreateField()
            
            // Show validating error messages
            fillErrorCreateField(no_kk, nik, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, kewarganegaraan, gol_darah, agama, status_perkawinan, shdk, pendidikan, pekerjaan, alamat_sekarang, rt, rw, kelurahan, alamat_tujuan)
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
                $('#pindahkeluar-edit-modal').modal('hide')

            $('#pindahkeluar-table').dataTable().fnStandingRedraw()
        },
        error: function(jqXHR) {
            let message = JSON.parse(jqXHR.responseText)
            // If validating process fails, display the error messages
            let no_kk = message.errors.no_kk
            let nik = message.errors.nama
            let nama = message.errors.nama
            let jenis_kelamin = message.errors.jenis_kelamin
            let tempat_lahir = message.errors.tempat_lahir
            let tanggal_lahir = message.errors.tanggal_lahir
            let kewarganegaraan = message.errors.kewarganegaraan
            let gol_darah = message.errors.gol_darah
            let agama = message.errors.agama
            let status_perkawinan = message.errors.status_perkawinan
            let shdk = message.errors.shdk
            let pendidikan = message.errors.pendidikan
            let pekerjaan = message.errors.pekerjaan
            let alamat_sekarang = message.errors.alamat_sekarang
            let rt = message.errors.rt
            let rw = message.errors.rw
            let kelurahan = message.errors.kelurahan
            let alamat_tujuan = message.errors.alamat_tujuan
            
            // Clear error field first
            clearErrorEditField()
            
            // Show validating error messages
            fillErrorEditField(no_kk, nik, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, kewarganegaraan, gol_darah, agama, status_perkawinan, shdk, pendidikan, pekerjaan, alamat_sekarang, rt, rw, kelurahan, alamat_tujuan)
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
    }).then(function () {
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

                $('#pindahkeluar-table').dataTable().fnStandingRedraw()
            }
        })
    },
    function (dismiss) {
        if (dismiss === 'cancel')
            swal('Batal', 'Aksi dibatalkan!', 'error')
    })
}
// End of Function