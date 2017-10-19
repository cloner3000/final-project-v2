<!-- Ktp Create Modal -->
<div class="modal fade" id="ktp-create-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Entri Data Pemohon E-KTP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="ktp-create-form" method="POST">
        <div class="modal-body">
          <!-- Tab Ktp -->
          <ul class="nav nav-tabs nav-tabs-line">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#create-identitas-diri">Identitas Diri</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#create-keyakinan-status">Keyakinan &amp; Status</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#create-alamat-tinggal">Alamat Tinggal</a>
            </li>
          </ul>
          <!-- Tab Panel Ktp -->
          <div class="tab-content">
            <div class="tab-pane active" id="create-identitas-diri" role="tabpanel">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12"><br>
                    <!-- NIK -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="nik">NIK</label>
                      <input type="text" class="form-control" id="create-nik" name="nik" placeholder="Masukkan NIK" maxlength="16" />
                      <small class="create-ktp-error-nik text-danger"></small>
                    </div>
                    <!-- Nama -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="nama">Nama</label>
                      <input type="text" class="form-control" id="create-nama" name="nama" placeholder="Masukkan Nama" maxlength="50" />
                      <small class="create-ktp-error-nama text-danger"></small>
                    </div>
                    <!-- Jenis Kelamin -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="jenis_kelamin">Jenis Kelamin</label>
                      <select id="create-jenis-kelamin" name="jenis_kelamin" class="form-control">
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                      </select>
                      <small class="create-ktp-error-jenis-kelamin text-danger"></small>
                    </div>
                    <!-- Tempat Lahir -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="tempat_lahir">Tempat Lahir</label>
                      <input type="text" class="form-control" id="create-tempat-lahir" name="tempat_lahir" placeholder="Masukkan Tempat Lahir" maxlength="16" />
                      <small class="create-ktp-error-tempat-lahir text-danger"></small>
                    </div>
                    <!-- Tanggal Lahir -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="tanggal_lahir">Tanggal Lahir</label>
                      <input type="text" class="form-control" id="create-tanggal-lahir" name="tanggal_lahir" />
                      <small class="create-ktp-error-tanggal-lahir text-danger"></small>
                    </div>
                    <!-- Kewarganegaraan -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="jenis_kelamin">Kewarganegaraan</label>
                      <select id="create-kewarganegaraan" name="kewarganegaraan" class="form-control">
                        <option value="WNI">WNI</option>
                        <option value="WNA">WNA</option>
                      </select>
                      <small class="create-ktp-error-kewarganegaraan text-danger"></small>
                    </div>
                    <!-- Gol. Darah -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="gol_darah">Gol. Darah</label>
                      <select id="create-golongan-darah" name="gol_darah" class="form-control">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="O">O</option>
                        <option value="AB">AB</option>
                      </select>
                      <small class="create-ktp-error-golongan-darah text-danger"></small>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane" id="create-keyakinan-status" role="tabpanel">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12"><br>
                    <!-- Agama -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="agama">Agama</label>
                      <select id="create-agama" name="agama" class="form-control">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katholik">Katholik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Kepercayaan">Kepercayaan</option>
                      </select>
                      <small class="create-ktp-error-agama text-danger"></small>
                    </div>
                    <!-- Status Perkawinan -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="status_perkawinan">Status Perkawinan</label>
                      <select id="create-status-perkawinan" name="status_perkawinan" class="form-control">
                        <option value="Lajang">Lajang</option>
                        <option value="Menikah">Menikah</option>
                        <option value="Cerai Hidup">Cerai Hidup</option>
                        <option value="Cerai Mati">Cerai Mati</option>
                      </select>
                      <small class="create-ktp-error-status-perkawinan text-danger"></small>
                    </div>
                    <!-- Pendidikan -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="pendidikan">Pendidikan</label>
                      <select id="create-pendidikan" name="pendidikan" class="form-control">
                        <option value="Tidak/Belum Sekolah">Tidak/Belum Sekolah</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                      </select>
                      <small class="create-ktp-error-pendidikan text-danger"></small>
                    </div>
                    <!-- Pekerjaan -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="pekerjaan">Pekerjaan</label>
                      <select id="create-pekerjaan" name="pekerjaan" class="form-control">
                        <option value="Belum/Tidak Bekerja">Belum/Tidak Bekerja</option>
                        <option value="MRT">Mengurus Rumah Tangga</option>
                        <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                        <option value="Pensiunan">Pensiunan</option>
                        <option value="PNS">Pegawai Negeri Sipil (PNS)</option>

                        <option value="TNI">Tentara Nasional Indonesia</option>
                        <option value="Kepolisian RI">Kepolisian RI</option>
                        <option value="Perdagangan">Perdagangan</option>
                        <option value="Karyawan Swasta">Karyawan Swasta</option>
                        <option value="Karyawan BUMN">Karyawan BUMN</option>

                        <option value="Guru">Guru</option>
                        <option value="Dosen">Dosen</option>
                        <option value="Dokter">Dokter</option>
                        <option value="Wiraswasta">Wiraswasta</option>
                        <option value="Buruh">Buruh Harian Lepas</option>
                      </select>
                      <small class="create-ktp-error-pekerjaan text-danger"></small>
                    </div>
                    <!-- Nama Ayah -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="nama_ayah">Nama Ayah</label>
                      <input type="text" class="form-control" id="create-nama-ayah" name="nama_ayah" 
                      placeholder="Masukkan Nama Ayah" maxlength="50" />
                      <small class="create-ktp-error-nama-ayah text-danger"></small>
                    </div>
                    <!-- Nama Ibu -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="nama_ibu">Nama Ibu</label>
                      <input type="text" class="form-control" id="create-nama-ibu" name="nama_ibu" placeholder="Masukkan Nama Ibu" maxlength="50" />
                      <small class="create-ktp-error-nama-ibu text-danger"></small>
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
                      <small class="create-ktp-error-alamat text-danger"></small>
                    </div>
                    <!-- RT -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="rt">RT</label>
                      <input type="number" class="form-control" id="create-rt" name="rt" />
                      <small class="create-ktp-error-rt text-danger"></small>
                    </div>
                    <!-- RW -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="rw">RW</label>
                      <input type="number" class="form-control" id="create-rw" name="rw" />
                      <small class="create-ktp-error-rw text-danger"></small>
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
                      <small class="create-ktp-error-kelurahan text-danger"></small>
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

<!-- Ktp Show Modal -->
<div class="modal fade" id="ktp-show-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tampil Data Pemohon E-KTP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ url('/dashboard/resi/ktp') }}" target="_blank" id="ktp-show-form" method="GET">
        <div class="modal-body">
          <!-- Tab Ktp -->
          <ul class="nav nav-tabs nav-tabs-line">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#show-identitas-diri">Identitas Diri</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#show-keyakinan-status">Keyakinan &amp; Status</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#show-alamat-tinggal">Alamat Tinggal</a>
            </li>
          </ul>
          <!-- Tab Panel Ktp -->
          <div class="tab-content">
            <div class="tab-pane active" id="show-identitas-diri" role="tabpanel">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12"><br>
                    {{ csrf_field() }}
                    <!-- ID -->
                    <input type="hidden" id="show-ktp-id" name="id">
                    <!-- NIK -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="nik">NIK</label>
                      <input type="text" class="form-control" id="show-nik" name="nik" placeholder="Masukkan NIK" maxlength="16" readonly />
                    </div>
                    <!-- Nama -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="nama">Nama</label>
                      <input type="text" class="form-control" id="show-nama" name="nama" placeholder="Masukkan Nama" maxlength="50" readonly />
                    </div>
                    <!-- Jenis Kelamin -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="jenis_kelamin">Jenis Kelamin</label>
                      <select id="show-jenis-kelamin" name="jenis_kelamin" class="form-control" disabled>
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                      </select>
                    </div>
                    <!-- Tempat Lahir -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="tempat_lahir">Tempat Lahir</label>
                      <input type="text" class="form-control" id="show-tempat-lahir" name="tempat_lahir" placeholder="Masukkan Tempat Lahir" maxlength="16" readonly />
                    </div>
                    <!-- Tanggal Lahir -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="tanggal_lahir">Tanggal Lahir</label>
                      <input type="text" class="form-control" id="show-tanggal-lahir" name="tanggal_lahir" disabled />
                    </div>
                    <!-- Kewarganegaraan -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="jenis_kelamin">Kewarganegaraan</label>
                      <select id="show-kewarganegaraan" name="kewarganegaraan" class="form-control" disabled>
                        <option value="WNI">WNI</option>
                        <option value="WNA">WNA</option>
                      </select>
                    </div>
                    <!-- Gol. Darah -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="gol_darah">Gol. Darah</label>
                      <select id="show-golongan-darah" name="gol_darah" class="form-control" disabled>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="O">O</option>
                        <option value="AB">AB</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane" id="show-keyakinan-status" role="tabpanel">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12"><br>
                    <!-- Agama -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="agama">Agama</label>
                      <select id="show-agama" name="agama" class="form-control" disabled>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katholik">Katholik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Kepercayaan">Kepercayaan</option>
                      </select>
                    </div>
                    <!-- Status Perkawinan -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="status_perkawinan">Status Perkawinan</label>
                      <select id="show-status-perkawinan" name="status_perkawinan" class="form-control" disabled>
                        <option value="Lajang">Lajang</option>
                        <option value="Menikah">Menikah</option>
                        <option value="Cerai Hidup">Cerai Hidup</option>
                        <option value="Cerai Mati">Cerai Mati</option>
                      </select>
                    </div>
                    <!-- Pendidikan -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="pendidikan">Pendidikan</label>
                      <select id="show-pendidikan" name="pendidikan" class="form-control" disabled>
                        <option value="Tidak/Belum Sekolah">Tidak/Belum Sekolah</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                      </select>
                    </div>
                    <!-- Pekerjaan -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="pekerjaan">Pekerjaan</label>
                      <select id="show-pekerjaan" name="pekerjaan" class="form-control" disabled>
                        <option value="Belum/Tidak Bekerja">Belum/Tidak Bekerja</option>
                        <option value="MRT">Mengurus Rumah Tangga</option>
                        <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                        <option value="Pensiunan">Pensiunan</option>
                        <option value="PNS">Pegawai Negeri Sipil (PNS)</option>

                        <option value="TNI">Tentara Nasional Indonesia</option>
                        <option value="Kepolisian RI">Kepolisian RI</option>
                        <option value="Perdagangan">Perdagangan</option>
                        <option value="Karyawan Swasta">Karyawan Swasta</option>
                        <option value="Karyawan BUMN">Karyawan BUMN</option>

                        <option value="Guru">Guru</option>
                        <option value="Dosen">Dosen</option>
                        <option value="Dokter">Dokter</option>
                        <option value="Wiraswasta">Wiraswasta</option>
                        <option value="Buruh">Buruh Harian Lepas</option>
                      </select>
                    </div>
                    <!-- Nama Ayah -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="nama_ayah">Nama Ayah</label>
                      <input type="text" class="form-control" id="show-nama-ayah" name="nama_ayah" 
                      placeholder="Masukkan Nama Ayah" maxlength="50" readonly />
                    </div>
                    <!-- Nama Ibu -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="nama_ibu">Nama Ibu</label>
                      <input type="text" class="form-control" id="show-nama-ibu" name="nama_ibu" placeholder="Masukkan Nama Ibu" maxlength="50" readonly />
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
          @if ( Auth::user()->isAdmin() == 0 ) 
            <button type="submit" class="btn btn-success">Cetak Resi</button>
          @endif
          <button type="button" class="btn btn-info" data-dismiss="modal">Keluar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Ktp Edit Modal -->
<div class="modal fade" id="ktp-edit-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Perbaharui Data Pemohon E-KTP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="ktp-edit-form" method="POST">
        <div class="modal-body">
          <!-- Tab Ktp -->
          <ul class="nav nav-tabs nav-tabs-line">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#edit-identitas-diri">Identitas Diri</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#edit-keyakinan-status">Keyakinan &amp; Status</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#edit-alamat-tinggal">Alamat Tinggal</a>
            </li>
          </ul>
          <!-- Tab Panel Ktp -->
          <div class="tab-content">
            <div class="tab-pane active" id="edit-identitas-diri" role="tabpanel">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12"><br>
                    <!-- ID -->
                    <input type="hidden" name="id" id="ktp-edit-id">
                    <!-- NIK -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="nik">NIK</label>
                      <input type="text" class="form-control" id="edit-nik" name="nik" placeholder="Masukkan NIK" maxlength="16" />
                      <small class="edit-ktp-error-nik text-danger"></small>
                    </div>
                    <!-- Nama -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="nama">Nama</label>
                      <input type="text" class="form-control" id="edit-nama" name="nama" placeholder="Masukkan Nama" maxlength="50" />
                      <small class="edit-ktp-error-nama text-danger"></small>
                    </div>
                    <!-- Jenis Kelamin -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="jenis_kelamin">Jenis Kelamin</label>
                      <select id="edit-jenis-kelamin" name="jenis_kelamin" class="form-control">
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                      </select>
                      <small class="edit-ktp-error-jenis-kelamin text-danger"></small>
                    </div>
                    <!-- Tempat Lahir -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="tempat_lahir">Tempat Lahir</label>
                      <input type="text" class="form-control" id="edit-tempat-lahir" name="tempat_lahir" placeholder="Masukkan Tempat Lahir" maxlength="16" />
                      <small class="edit-ktp-error-tempat-lahir text-danger"></small>
                    </div>
                    <!-- Tanggal Lahir -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="tanggal_lahir">Tanggal Lahir</label>
                      <input type="text" class="form-control" id="edit-tanggal-lahir" name="tanggal_lahir" />
                      <small class="edit-ktp-error-tanggal-lahir text-danger"></small>
                    </div>
                    <!-- Kewarganegaraan -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="jenis_kelamin">Kewarganegaraan</label>
                      <select id="edit-kewarganegaraan" name="kewarganegaraan" class="form-control">
                        <option value="WNI">WNI</option>
                        <option value="WNA">WNA</option>
                      </select>
                      <small class="edit-ktp-error-kewarganegaraan text-danger"></small>
                    </div>
                    <!-- Gol. Darah -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="gol_darah">Gol. Darah</label>
                      <select id="edit-golongan-darah" name="gol_darah" class="form-control">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="O">O</option>
                        <option value="AB">AB</option>
                      </select>
                      <small class="edit-ktp-error-golongan-darah text-danger"></small>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane" id="edit-keyakinan-status" role="tabpanel">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12"><br>
                    <!-- Agama -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="agama">Agama</label>
                      <select id="edit-agama" name="agama" class="form-control">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katholik">Katholik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Kepercayaan">Kepercayaan</option>
                      </select>
                      <small class="edit-ktp-error-agama text-danger"></small>
                    </div>
                    <!-- Status Perkawinan -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="status_perkawinan">Status Perkawinan</label>
                      <select id="edit-status-perkawinan" name="status_perkawinan" class="form-control">
                        <option value="Lajang">Lajang</option>
                        <option value="Menikah">Menikah</option>
                        <option value="Cerai Hidup">Cerai Hidup</option>
                        <option value="Cerai Mati">Cerai Mati</option>
                      </select>
                      <small class="edit-ktp-error-status-perkawinan text-danger"></small>
                    </div>
                    <!-- Pendidikan -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="pendidikan">Pendidikan</label>
                      <select id="edit-pendidikan" name="pendidikan" class="form-control">
                        <option value="Tidak/Belum Sekolah">Tidak/Belum Sekolah</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                      </select>
                      <small class="edit-ktp-error-pendidikan text-danger"></small>
                    </div>
                    <!-- Pekerjaan -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="pekerjaan">Pekerjaan</label>
                      <select id="edit-pekerjaan" name="pekerjaan" class="form-control">
                        <option value="Belum/Tidak Bekerja">Belum/Tidak Bekerja</option>
                        <option value="MRT">Mengurus Rumah Tangga</option>
                        <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                        <option value="Pensiunan">Pensiunan</option>
                        <option value="PNS">Pegawai Negeri Sipil (PNS)</option>

                        <option value="TNI">Tentara Nasional Indonesia</option>
                        <option value="Kepolisian RI">Kepolisian RI</option>
                        <option value="Perdagangan">Perdagangan</option>
                        <option value="Karyawan Swasta">Karyawan Swasta</option>
                        <option value="Karyawan BUMN">Karyawan BUMN</option>

                        <option value="Guru">Guru</option>
                        <option value="Dosen">Dosen</option>
                        <option value="Dokter">Dokter</option>
                        <option value="Wiraswasta">Wiraswasta</option>
                        <option value="Buruh">Buruh Harian Lepas</option>
                      </select>
                      <small class="edit-ktp-error-pekerjaan text-danger"></small>
                    </div>
                    <!-- Nama Ayah -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="nama_ayah">Nama Ayah</label>
                      <input type="text" class="form-control" id="edit-nama-ayah" name="nama_ayah" placeholder="Masukkan Nama Ayah" maxlength="50" />
                      <small class="edit-ktp-error-nama-ayah text-danger"></small>
                    </div>
                    <!-- Nama Ibu -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="nama_ibu">Nama Ibu</label>
                      <input type="text" class="form-control" id="edit-nama-ibu" name="nama_ibu" placeholder="Masukkan Nama Ibu" maxlength="50" />
                      <small class="edit-ktp-error-nama-ibu text-danger"></small>
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
                      <small class="edit-ktp-error-alamat text-danger"></small>
                    </div>
                    <!-- RT -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="rt">RT</label>
                      <input type="number" class="form-control" id="edit-rt" name="rt" />
                      <small class="edit-ktp-error-rt text-danger"></small>
                    </div>
                    <!-- RW -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="rw">RW</label>
                      <input type="number" class="form-control" id="edit-rw" name="rw" placeholder="RW" />
                      <small class="edit-ktp-error-rw text-danger"></small>
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
                      <small class="edit-ktp-error-kelurahan text-danger"></small><br>
                      <input type="hidden" id="status" name="status" value="0">
                      @if (Auth::user()->isAdmin() != 0)
                        <div class="checkbox-custom checkbox-primary">
                          <input type="checkbox" id="check-status" name="status" value="1" />
                          <label for="status">Sudah Dicek</label>
                        </div>
                      @endif
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