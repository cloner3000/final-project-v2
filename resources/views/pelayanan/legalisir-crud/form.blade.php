<!-- Legalisir Create Modal -->
<div class="modal fade" id="legalisir-create-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Entri Data Pemohon Legalisir</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="legalisir-create-form" method="POST">
        <div class="modal-body">
          <!-- Tab Legalisir -->
          <ul class="nav nav-tabs nav-tabs-line">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#create-identitas-diri">Identitas Diri</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#create-alamat-tinggal">Alamat Tinggal</a>
            </li>
          </ul>
          <!-- Tab Panel Legalisir -->
          <div class="tab-content">

            <div class="tab-pane active" id="create-identitas-diri" role="tabpanel">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12"><br>
                    <!-- NIK -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="nik">NIK</label>
                      <input type="text" class="form-control" id="create-nik" name="nik" placeholder="Masukkan NIK" maxlength="16" />
                      <small class="create-legalisir-error-nik text-danger"></small>
                    </div>
                    <!-- Nama -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="nama">Nama</label>
                      <input type="text" class="form-control" id="create-nama" name="nama" placeholder="Masukkan Nama" />
                      <small class="create-legalisir-error-nama text-danger"></small>
                    </div>
                    <!-- Jenis Kelamin -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="jenis_kelamin">Jenis Kelamin</label>
                      <select id="create-jenis-kelamin" name="jenis_kelamin" class="form-control">
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                      </select>
                      <small class="create-legalisir-error-jenis-kelamin text-danger"></small>
                    </div>
                    <!-- Jenis Berkas -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="jenis_berkas">Jenis Berkas</label>
                      <select id="create-jenis-berkas" name="jenis_berkas" class="form-control">
                        <option value="E-KTP">E-KTP</option>
                        <option value="KK">Kartu Keluarga</option>
                      </select>
                      <small class="create-legalisir-error-jenis-berkas text-danger"></small>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane" id="create-alamat-tinggal" role="tabpanel">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12"><br>
                    <!-- Alamat -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="alamat">Alamat</label>
                      <textarea class="form-control" id="create-alamat" name="alamat" rows="5"></textarea>
                      <small class="create-legalisir-error-alamat text-danger"></small>
                    </div>
                    <!-- RT -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="rt">RT</label>
                      <input type="number" class="form-control" id="create-rt" name="rt" />
                      <small class="create-legalisir-error-rt text-danger"></small>
                    </div>
                    <!-- RW -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="rw">RW</label>
                      <input type="number" class="form-control" id="create-rw" name="rw" />
                      <small class="create-legalisir-error-rw text-danger"></small>
                    </div>
                    <!-- Kelurahan -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="kelurahan">Kelurahan</label>
                      <select id="create-kelurahan" name="kelurahan" class="form-control">
                        <option value="Cipaganti">Cipaganti</option>
                        <option value="Dago">Dago</option>
                        <option value="Lebak Gede">Lebak Gede</option>
                        <option value="Lebak Siliwangi">Lebak Siliwangi</option>
                        <option value="Sekeloa">Sekeloa</option>
                        <option value="Sadang Serang">Sadang Serang</option>
                      </select>
                      <small class="create-legalisir-error-kelurahan text-danger"></small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Legalisir Show Modal -->
<div class="modal fade" id="legalisir-show-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tampil Data Pemohon Legalisir</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="legalisir-show-form" method="POST">
        <div class="modal-body">
          <!-- Tab Legalisir -->
          <ul class="nav nav-tabs nav-tabs-line">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#show-identitas-diri">Identitas Diri</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#show-alamat-tinggal">Alamat Tinggal</a>
            </li>
          </ul>
          <!-- Tab Panel Legalisir -->
          <div class="tab-content">

            <div class="tab-pane active" id="show-identitas-diri" role="tabpanel">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12"><br>
                    <!-- NIK -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="nik">NIK</label>
                      <input type="text" class="form-control" id="show-nik" name="nik" placeholder="Masukkan NIK" maxlength="16" readonly />
                    </div>
                    <!-- Nama -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="nama">Nama</label>
                      <input type="text" class="form-control" id="show-nama" name="nama" placeholder="Masukkan Nama" readonly />
                    </div>
                    <!-- Jenis Kelamin -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="jenis_kelamin">Jenis Kelamin</label>
                      <select id="show-jenis-kelamin" name="jenis_kelamin" class="form-control" disabled>
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                      </select>
                    </div>
                    <!-- Jenis Berkas -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="jenis_berkas">Jenis Berkas</label>
                      <select id="show-jenis-berkas" name="jenis_berkas" class="form-control" disabled>
                        <option value="E-KTP">E-KTP</option>
                        <option value="KK">Kartu Keluarga</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane" id="show-alamat-tinggal" role="tabpanel">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12"><br>
                    <!-- Alamat -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="alamat">Alamat</label>
                      <textarea class="form-control" id="show-alamat" name="alamat" rows="5" readonly></textarea>
                    </div>
                    <!-- RT -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="rt">RT</label>
                      <input type="number" class="form-control" id="show-rt" name="rt" readonly />
                    </div>
                    <!-- RW -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="rw">RW</label>
                      <input type="number" class="form-control" id="show-rw" name="rw" readonly />
                    </div>
                    <!-- Kelurahan -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="kelurahan">Kelurahan</label>
                      <select id="show-kelurahan" name="kelurahan" class="form-control" disabled>
                        <option value="Cipaganti">Cipaganti</option>
                        <option value="Dago">Dago</option>
                        <option value="Lebak Gede">Lebak Gede</option>
                        <option value="Lebak Siliwangi">Lebak Siliwangi</option>
                        <option value="Sekeloa">Sekeloa</option>
                        <option value="Sadang Serang">Sadang Serang</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Legalisir Edit Modal -->
<div class="modal fade" id="legalisir-edit-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Perbaharui Data Pemohon Legalisir</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="legalisir-edit-form" method="POST">
        <div class="modal-body">
          <!-- Tab Legalisir -->
          <ul class="nav nav-tabs nav-tabs-line">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#edit-identitas-diri">Identitas Diri</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#edit-alamat-tinggal">Alamat Tinggal</a>
            </li>
          </ul>
          <!-- Tab Panel Legalisir -->
          <div class="tab-content">

            <div class="tab-pane active" id="edit-identitas-diri" role="tabpanel">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12"><br>
                    <!-- ID -->
                    <input type="hidden" name="id" id="legalisir-edit-id">
                    <!-- NIK -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="nik">NIK</label>
                      <input type="text" class="form-control" id="edit-nik" name="nik" placeholder="Masukkan NIK" maxlength="16" />
                      <small class="edit-legalisir-error-nik text-danger"></small>
                    </div>
                    <!-- Nama -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="nama">Nama</label>
                      <input type="text" class="form-control" id="edit-nama" name="nama" placeholder="Masukkan Nama" />
                      <small class="edit-legalisir-error-nama text-danger"></small>
                    </div>
                    <!-- Jenis Kelamin -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="jenis_kelamin">Jenis Kelamin</label>
                      <select id="edit-jenis-kelamin" name="jenis_kelamin" class="form-control">
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                      </select>
                      <small class="edit-legalisir-error-jenis-kelamin text-danger"></small>
                    </div>
                    <!-- Jenis Berkas -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="jenis_berkas">Jenis Berkas</label>
                      <select id="edit-jenis-berkas" name="jenis_berkas" class="form-control">
                        <option value="E-KTP">E-KTP</option>
                        <option value="KK">Kartu Keluarga</option>
                      </select>
                      <small class="edit-legalisir-error-jenis-berkas text-danger"></small>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane" id="edit-alamat-tinggal" role="tabpanel">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12"><br>
                    <!-- Alamat -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="alamat">Alamat</label>
                      <textarea class="form-control" id="edit-alamat" name="alamat" rows="5"></textarea>
                      <small class="edit-legalisir-error-alamat text-danger"></small>
                    </div>
                    <!-- RT -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="rt">RT</label>
                      <input type="number" class="form-control" id="edit-rt" name="rt" />
                      <small class="edit-legalisir-error-rt text-danger"></small>
                    </div>
                    <!-- RW -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="rw">RW</label>
                      <input type="number" class="form-control" id="edit-rw" name="rw" />
                      <small class="edit-legalisir-error-rw text-danger"></small>
                    </div>
                    <!-- Kelurahan -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="kelurahan">Kelurahan</label>
                      <select id="edit-kelurahan" name="kelurahan" class="form-control">
                        <option value="Cipaganti">Cipaganti</option>
                        <option value="Dago">Dago</option>
                        <option value="Lebak Gede">Lebak Gede</option>
                        <option value="Lebak Siliwangi">Lebak Siliwangi</option>
                        <option value="Sekeloa">Sekeloa</option>
                        <option value="Sadang Serang">Sadang Serang</option>
                      </select>
                      <small class="edit-legalisir-error-kelurahan text-danger"></small><br>
                      <input type="hidden" id="status" name="status" value="0">
                    </div>
                    <!-- Status -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="status">Status</label>
                      <select id="edit-status" name="status" class="form-control">
                        <option value="0">Belum</option>
                        <option value="1">On Progress</option>
                        <option value="2">Selesai</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Perbaharui</button>
        </div>
      </form>
    </div>
  </div>
</div>
