// Initialize Pindah Datang
function initPindahDatang() {

    // Hide filter section
    $('#filter-pindahdatang-card').hide();

    // Show Filter Kartu Keluarga Section
    $('#filter-pindahdatang').click(function(e) {
      /* Act on the event */
      $('#filter-pindahdatang-card').slideToggle();
      
      $('#filter-pindahdatang-tanggal-lahir').datepicker({
        format: 'yyyy-mm-dd'
      });
      $('#filter-pindahdatang-tanggal-dari').datepicker({
        format: 'yyyy-mm-dd'
      });
      $('#filter-pindahdatang-tanggal-sampai').datepicker({
        format: 'yyyy-mm-dd'
      });
    });

    // Create Pindah Datang DatePicker
    $('#create-tanggal-lahir').datepicker({
      format: 'yyyy-mm-dd'
    });
    $('#edit-tanggal-lahir').datepicker({
      format: 'yyyy-mm-dd'
    });
}

// Clear error field on create form
function clearCreateField() 
{
    $('#create-no-kk').val('');
    $('#create-nik').val('');
    $('#create-nama').val('');
    $('#create-jenis-kelamin').val('');
    $('#create-tempat-lahir').val('');
    $('#create-tanggal-lahir').val('');
    $('#create-kewarganegaraan').val('');
    $('#create-golongan-darah').val('');

    $('#create-agama').val('');
    $('#create-status-perkawinan').val('');
    $('#create-shdk').val('');
    $('#create-pendidikan').val('');
    $('#create-pekerjaan').val('');
    $('#create-alamat-lama').val('');
    $('#create-alamat-sekarang').val('');
    $('#create-rt').val('');
    $('#create-rw').val('');
    $('#create-kelurahan').val('');
}

// Clear error field on create form
function clearErrorCreateField() 
{
    $('.create-pindahdatang-error-no-kk').html('');
    $('.create-pindahdatang-error-nik').html('');
    $('.create-pindahdatang-error-nama').html('');
    $('.create-pindahdatang-error-jenis-kelamin').html('');
    $('.create-pindahdatang-error-tempat-lahir').html('');
    $('.create-pindahdatang-error-tanggal-lahir').html('');
    $('.create-pindahdatang-error-kewarganegaraan').html('');
    $('.create-pindahdatang-error-golongan-darah').html('');

    $('.create-pindahdatang-error-agama').html('');
    $('.create-pindahdatang-error-status-perkawinan').html('');
    $('.create-pindahdatang-error-shdk').html('');
    $('.create-pindahdatang-error-pendidikan').html('');
    $('.create-pindahdatang-error-pekerjaan').html('');

    $('.create-pindahdatang-error-alamat-lama').html('');
    $('.create-pindahdatang-error-alamat-sekarang').html('');
    $('.create-pindahdatang-error-rt').html('');
    $('.create-pindahdatang-error-rw').html('');
    $('.create-pindahdatang-error-kelurahan').html('');
}

// Clear error field on edit form
function clearErrorEditField() 
{
    $('.edit-pindahdatang-error-no-kk').html('');
    $('.edit-pindahdatang-error-nik').html('');
    $('.edit-pindahdatang-error-nama').html('');
    $('.edit-pindahdatang-error-jenis-kelamin').html('');
    $('.edit-pindahdatang-error-tempat-lahir').html('');
    $('.edit-pindahdatang-error-tanggal-lahir').html('');
    $('.edit-pindahdatang-error-kewarganegaraan').html('');
    $('.edit-pindahdatang-error-golongan-darah').html('');

    $('.edit-pindahdatang-error-agama').html('');
    $('.edit-pindahdatang-error-status-perkawinan').html('');
    $('.edit-pindahdatang-error-shdk').html('');
    $('.edit-pindahdatang-error-pendidikan').html('');
    $('.edit-pindahdatang-error-pekerjaan').html('');

    $('.edit-pindahdatang-error-alamat-lama').html('');
    $('.edit-pindahdatang-error-alamat-sekarang').html('');
    $('.edit-pindahdatang-error-rt').html('');
    $('.edit-pindahdatang-error-rw').html('');
    $('.edit-pindahdatang-error-kelurahan').html('');
}

// Fill error field on create field
function fillErrorCreateField(no_kk, nik, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, kewarganegaraan, gol_darah, agama, status_perkawinan, shdk, pendidikan, pekerjaan, alamat_lama, alamat_sekarang, rt, rw, kelurahan) 
{
    $('.create-pindahdatang-error-no-kk').html(no_kk);
    $('.create-pindahdatang-error-nik').html(nik);
    $('.create-pindahdatang-error-nama').html(nama);
    $('.create-pindahdatang-error-jenis-kelamin').html(jenis_kelamin);
    $('.create-pindahdatang-error-tempat-lahir').html(tempat_lahir);
    $('.create-pindahdatang-error-tanggal-lahir').html(tanggal_lahir);
    $('.create-pindahdatang-error-kewarganegaraan').html(kewarganegaraan);
    $('.create-pindahdatang-error-golongan-darah').html(gol_darah);

    $('.create-pindahdatang-error-agama').html(agama);
    $('.create-pindahdatang-error-status-perkawinan').html(status_perkawinan);
    $('.create-pindahdatang-error-shdk').html(shdk);
    $('.create-pindahdatang-error-pendidikan').html(pendidikan);
    $('.create-pindahdatang-error-pekerjaan').html(pekerjaan);

    $('.create-pindahdatang-error-alamat-lama').html(alamat_lama);
    $('.create-pindahdatang-error-alamat-sekarang').html(alamat_sekarang);
    $('.create-pindahdatang-error-rt').html(rt);
    $('.create-pindahdatang-error-rw').html(rw);
    $('.create-pindahdatang-error-kelurahan').html(kelurahan);
}

// Fill error field on edit form
function fillErrorEditField(no_kk, nik, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, kewarganegaraan, gol_darah, agama, status_perkawinan, shdk, pendidikan, pekerjaan, alamat_lama, alamat_sekarang, rt, rw, kelurahan) 
{
    $('.edit-pindahdatang-error-no-kk').html(no_kk);
    $('.edit-pindahdatang-error-nik').html(nik);
    $('.edit-pindahdatang-error-nama').html(nama);
    $('.edit-pindahdatang-error-jenis-kelamin').html(jenis_kelamin);
    $('.edit-pindahdatang-error-tempat-lahir').html(tempat_lahir);
    $('.edit-pindahdatang-error-tanggal-lahir').html(tanggal_lahir);
    $('.edit-pindahdatang-error-kewarganegaraan').html(kewarganegaraan);
    $('.edit-pindahdatang-error-golongan-darah').html(gol_darah);

    $('.edit-pindahdatang-error-agama').html(agama);
    $('.edit-pindahdatang-error-status-perkawinan').html(status_perkawinan);
    $('.edit-pindahdatang-error-shdk').html(shdk);
    $('.edit-pindahdatang-error-pendidikan').html(pendidikan);
    $('.edit-pindahdatang-error-pekerjaan').html(pekerjaan);

    $('.edit-pindahdatang-error-alamat-lama').html(alamat_lama);
    $('.edit-pindahdatang-error-alamat-sekarang').html(alamat_sekarang);
    $('.edit-pindahdatang-error-rt').html(rt);
    $('.edit-pindahdatang-error-rw').html(rw);
    $('.edit-pindahdatang-error-kelurahan').html(kelurahan);
}

// Fill Show Form
function fillShowForm(no_kk, nik, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, kewarganegaraan, gol_darah, agama, status_perkawinan, shdk, pendidikan, pekerjaan, alamat_lama, alamat_sekarang, rt, rw, kelurahan) 
{
    $('#show-no-kk').val(no_kk);
    $('#show-nik').val(nik);
    $('#show-nama').val(nama);
    $('#show-jenis-kelamin').val(jenis_kelamin);
    $('#show-tempat-lahir').val(tempat_lahir);
    $('#show-tanggal-lahir').val(tanggal_lahir);
    $('#show-kewarganegaraan').val(kewarganegaraan);
    $('#show-golongan-darah').val(gol_darah);

    $('#show-agama').val(agama);
    $('#show-status-perkawinan').val(status_perkawinan);
    $('#show-shdk').val(shdk);
    $('#show-pendidikan').val(pendidikan);
    $('#show-pekerjaan').val(pekerjaan);
    $('#show-alamat-lama').val(alamat_lama);
    $('#show-alamat-sekarang').val(alamat_sekarang);
    $('#show-rt').val(rt);
    $('#show-rw').val(rw);
    $('#show-kelurahan').val(kelurahan);
}

// Fill Edit Form
function fillEditForm(id, no_kk, nik, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, kewarganegaraan, gol_darah, agama, status_perkawinan, shdk, pendidikan, pekerjaan, alamat_lama, alamat_sekarang, rt, rw, kelurahan) 
{
    $('#pindahdatang-edit-id').val(id);
    $('#edit-no-kk').val(no_kk);
    $('#edit-nik').val(nik);
    $('#edit-nama').val(nama);
    $('#edit-jenis-kelamin').val(jenis_kelamin);
    $('#edit-tempat-lahir').val(tempat_lahir);
    $('#edit-tanggal-lahir').val(tanggal_lahir);
    $('#edit-kewarganegaraan').val(kewarganegaraan);
    $('#edit-golongan-darah').val(gol_darah);

    $('#edit-agama').val(agama);
    $('#edit-status-perkawinan').val(status_perkawinan);
    $('#edit-shdk').val(shdk);
    $('#edit-pendidikan').val(pendidikan);
    $('#edit-pekerjaan').val(pekerjaan);
    $('#edit-alamat-lama').val(alamat_lama);
    $('#edit-alamat-sekarang').val(alamat_sekarang);
    $('#edit-rt').val(rt);
    $('#edit-rw').val(rw);
    $('#edit-kelurahan').val(kelurahan);
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
                // Catch all error messages from Laravel Validator
                let no_kk = data.errors.no_kk;
                let nik = data.errors.nama;
                let nama = data.errors.nama;
                let jenis_kelamin = data.errors.jenis_kelamin;
                let tempat_lahir = data.errors.tempat_lahir;
                let tanggal_lahir = data.errors.tanggal_lahir;
                let kewarganegaraan = data.errors.kewarganegaraan;
                let gol_darah = data.errors.gol_darah;
                let agama = data.errors.agama;
                let status_perkawinan = data.errors.status_perkawinan;
                let shdk = data.errors.shdk;
                let pendidikan = data.errors.pendidikan;
                let pekerjaan = data.errors.pekerjaan;
                let alamat_lama = data.errors.alamat_lama;
                let alamat_sekarang = data.errors.alamat_sekarang;
                let rt = data.errors.rt;
                let rw = data.errors.rw;
                let kelurahan = data.errors.kelurahan;

                // Clear error field first
                clearErrorCreateField();
                
                // Show validating error messages
                fillErrorCreateField(no_kk, nik, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, kewarganegaraan, gol_darah, agama, status_perkawinan, shdk, pendidikan, pekerjaan, alamat_lama, alamat_sekarang, rt, rw, kelurahan);

            } 
            else {
                $('#pindahdatang-create-modal').modal('hide');
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
                        $('#pindahdatang-table').dataTable().fnStandingRedraw();
                        clearCreateField();
                    }
                });
            }
        }
    });
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
            // If validating process fails, display the error messages
            if(data.hasOwnProperty('errors'))
            {
                // Catch all error messages from Laravel Validator
                let no_kk = data.errors.no_kk;
                let nik = data.errors.nama;
                let nama = data.errors.nama;
                let jenis_kelamin = data.errors.jenis_kelamin;
                let tempat_lahir = data.errors.tempat_lahir;
                let tanggal_lahir = data.errors.tanggal_lahir;
                let kewarganegaraan = data.errors.kewarganegaraan;
                let gol_darah = data.errors.gol_darah;
                let agama = data.errors.agama;
                let status_perkawinan = data.errors.status_perkawinan;
                let shdk = data.errors.shdk;
                let pendidikan = data.errors.pendidikan;
                let pekerjaan = data.errors.pekerjaan;
                let alamat_lama = data.errors.alamat_lama;
                let alamat_sekarang = data.errors.alamat_sekarang;
                let rt = data.errors.rt;
                let rw = data.errors.rw;
                let kelurahan = data.errors.kelurahan;
                
                // Clear error field first
                clearErrorEditField();
                
                // Show validating error messages
                fillErrorEditField(no_kk, nik, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, kewarganegaraan, gol_darah, agama, status_perkawinan, shdk, pendidikan, pekerjaan, alamat_lama, alamat_sekarang, rt, rw, kelurahan);
            } 
            else 
            {
                $('#pindahdatang-edit-modal').modal('hide');
                swal({
                title: 'Perbaharui data?',
                text: "Anda bisa melakukan perbaharuan kembali apabila terdapat kesalahan",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Perbaharui data'
                }).then(function () {
                    if (data.message == 'updated') 
                    {
                        swal('Tersimpan!', 'Data berhasil diperbaharui!', 'success');
                        $('#pindahdatang-table').dataTable().fnStandingRedraw();
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
          $('#pindahdatang-table').dataTable().fnStandingRedraw();
        }
      });
    });
}
// End of Function