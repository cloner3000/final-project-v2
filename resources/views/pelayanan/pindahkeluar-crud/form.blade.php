<!-- Pindah Keluar Create Modal -->
<div class="modal fade" id="pindahkeluar-create-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Entri Data Penduduk Pindah Keluar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="pindahkeluar-create-form" method="POST">
        <div class="modal-body">
          <!-- Tab Pindah Keluar -->
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
          <!-- Tab Panel Pindah Keluar -->
          <div class="tab-content">

            <div class="tab-pane active" id="create-identitas-diri" role="tabpanel">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12"><br>
                    <!-- Nomor KK -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="no_kk">Nomor Kartu Keluarga</label>
                      <input type="text" class="form-control" id="create-no-kk" name="no_kk" placeholder="Masukkan Nomor Kartu Keluarga" maxlength="16" />
                      <small class="create-pindahkeluar-error-no-kk text-danger"></small>
                    </div>
                    <!-- NIK -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="nik">NIK</label>
                      <input type="text" class="form-control" id="create-nik" name="nik" placeholder="Masukkan NIK" maxlength="16" />
                      <small class="create-pindahkeluar-error-nik text-danger"></small>
                    </div>
                    <!-- Nama -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="nama">Nama</label>
                      <input type="text" class="form-control" id="create-nama" name="nama" placeholder="Masukkan Nama" maxlength="50" />
                      <small class="create-pindahkeluar-error-nama text-danger"></small>
                    </div>
                    <!-- Jenis Kelamin -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="jenis_kelamin">Jenis Kelamin</label>
                      <select id="create-jenis-kelamin" name="jenis_kelamin" class="form-control">
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                      </select>
                      <small class="create-pindahkeluar-error-jenis-kelamin text-danger"></small>
                    </div>
                    <!-- Tempat Lahir -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="tempat_lahir">Tempat Lahir</label>
                      <input type="text" class="form-control" id="create-tempat-lahir" name="tempat_lahir" placeholder="Masukkan Tempat Lahir" maxlength="16" />
                      <small class="create-pindahkeluar-error-tempat-lahir text-danger"></small>
                    </div>
                    <!-- Tanggal Lahir -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="tanggal_lahir">Tanggal Lahir</label>
                      <input type="text" class="form-control" id="create-tanggal-lahir" name="tanggal_lahir" />
                      <small class="create-pindahkeluar-error-tanggal-lahir text-danger"></small>
                    </div>
                    <!-- Kewarganegaraan -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="jenis_kelamin">Kewarganegaraan</label>
                      <select id="create-kewarganegaraan" name="kewarganegaraan" class="form-control">
                        <option value="WNI">WNI</option>
                        <option value="WNA">WNA</option>
                      </select>
                      <small class="create-pindahkeluar-error-kewarganegaraan text-danger"></small>
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
                      <small class="create-pindahkeluar-error-golongan-darah text-danger"></small>
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
                      <small class="create-pindahkeluar-error-agama text-danger"></small>
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
                      <small class="create-pindahkeluar-error-status-perkawinan text-danger"></small>
                    </div>
                    <!-- Status Perkawinan -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="shdk">SHDK</label>
                      <select id="create-shdk" name="shdk" class="form-control">
                        <option value="Kepala Keluarga">Kepala Keluarga</option>
                        <option value="Suami">Suami</option>
                        <option value="Istri">Istri</option>
                        <option value="Anak">Anak</option>
                        <option value="Menantu">Menantu</option>
                        <option value="Cucu">Cucu</option>
                        <option value="Orangtua">Orangtua</option>
                        <option value="Mertua">Mertua</option>
                        <option value="Famili Lain">Famili Lain</option>
                        <option value="Pembantu">Pembantu</option>
                        <option value="Lainnya">Lainnya</option>
                      </select>
                      <small class="create-pindahkeluar-error-status-perkawinan text-danger"></small>
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
                      <small class="create-pindahkeluar-error-pendidikan text-danger"></small>
                    </div>
                    <!-- Pekerjaan -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="pekerjaan">Pekerjaan</label>
                      <select id="create-pekerjaan" name="pekerjaan" class="form-control">
                        <option value="Belum/Tidak Bekerja">Belum/Tidak Bekerja</option>
                        <option value="Mengurus Rumah Tangga">Mengurus Rumah Tangga</option>
                        <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                        <option value="Pensiunan">Pensiunan</option>
                        <option value="Pegawai Negeri Sipil (PNS)">Pegawai Negeri Sipil (PNS)</option>

                        <option value="Tentara Nasional Indonesia">Tentara Nasional Indonesia</option>
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
                      <small class="create-pindahkeluar-error-pekerjaan text-danger"></small>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane" id="create-alamat-tinggal" role="tabpanel">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12"><br>
                    <!-- Alamat Sekarang -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="alamat_sekarang">Alamat Sekarang</label>
                      <textarea class="form-control" id="create-alamat-sekarang" name="alamat_sekarang" rows="5"></textarea>
                      <small class="create-pindahkeluar-error-alamat-sekarang text-danger"></small>
                    </div>
                    <!-- Alamat Tujuan -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="alamat_tujuan">Alamat Tujuan Pindah</label>
                      <textarea class="form-control" id="create-alamat-tujuan" name="alamat_tujuan" rows="5"></textarea>
                      <small class="create-pindahkeluar-error-alamat-tujuan text-danger"></small>
                    </div>
                    <!-- RT -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="rt">RT</label>
                      <input type="number" class="form-control" id="create-rt" name="rt" />
                      <small class="create-pindahkeluar-error-rt text-danger"></small>
                    </div>
                    <!-- RW -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="rw">RW</label>
                      <input type="number" class="form-control" id="create-rw" name="rw" />
                      <small class="create-pindahkeluar-error-rw text-danger"></small>
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
                      <small class="create-pindahkeluar-error-kelurahan text-danger"></small>
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

<!-- Pindah Keluar Show Modal -->
<div class="modal fade" id="pindahkeluar-show-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tampil Data Penduduk Pindah Keluar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="pindahkeluar-show-form" method="POST">
        <div class="modal-body">
          <!-- Tab Pindah Keluar -->
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
          <!-- Tab Panel Pindah Keluar -->
          <div class="tab-content">

            <div class="tab-pane active" id="show-identitas-diri" role="tabpanel">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12"><br>
                    <!-- Nomor KK -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="no_kk">Nomor Kartu Keluarga</label>
                      <input type="text" class="form-control" id="show-no-kk" name="no_kk" placeholder="Masukkan Nomor Kartu Keluarga" maxlength="16" readonly />
                    </div>
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
                      <input type="text" class="form-control" id="show-tanggal-lahir" name="tanggal_lahir" readonly />
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
                    <!-- Status Perkawinan -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="shdk">SHDK</label>
                      <select id="show-shdk" name="shdk" class="form-control" disabled>
                        <option value="Kepala Keluarga">Kepala Keluarga</option>
                        <option value="Suami">Suami</option>
                        <option value="Istri">Istri</option>
                        <option value="Anak">Anak</option>
                        <option value="Menantu">Menantu</option>
                        <option value="Cucu">Cucu</option>
                        <option value="Orangtua">Orangtua</option>
                        <option value="Mertua">Mertua</option>
                        <option value="Famili Lain">Famili Lain</option>
                        <option value="Pembantu">Pembantu</option>
                        <option value="Lainnya">Lainnya</option>
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
                        <option value="Mengurus Rumah Tangga">Mengurus Rumah Tangga</option>
                        <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                        <option value="Pensiunan">Pensiunan</option>
                        <option value="Pegawai Negeri Sipil (PNS)">Pegawai Negeri Sipil (PNS)</option>

                        <option value="Tentara Nasional Indonesia">Tentara Nasional Indonesia</option>
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
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane" id="show-alamat-tinggal" role="tabpanel">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12"><br>
                    <!-- Alamat Sekarang -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="alamat_sekarang">Alamat Sekarang</label>
                      <textarea class="form-control" id="show-alamat-sekarang" name="alamat_sekarang" rows="5" readonly></textarea>
                    </div>
                    <!-- Alamat Tujuan -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="alamat_tujuan">Alamat Tujuan Pindah</label>
                      <textarea class="form-control" id="show-alamat-tujuan" name="alamat_tujuan" rows="5" readonly></textarea>
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
          <button type="button" class="btn btn-info" data-dismiss="modal">Keluar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Pindah Keluar Edit Modal -->
<div class="modal fade" id="pindahkeluar-edit-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Entri Data Pemohon Pindah Keluar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="pindahkeluar-edit-form" method="POST">
        <div class="modal-body">
          <!-- Tab Pindah Keluar -->
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
          <!-- Tab Panel Pindah Keluar -->
          <div class="tab-content">

            <div class="tab-pane active" id="edit-identitas-diri" role="tabpanel">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12"><br>
                    <!-- ID -->
                    <input type="hidden" name="id" id="pindahkeluar-edit-id">
                    <!-- Nomor KK -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="no_kk">Nomor Kartu Keluarga</label>
                      <input type="text" class="form-control" id="edit-no-kk" name="no_kk" placeholder="Masukkan Nomor Kartu Keluarga" maxlength="16" />
                      <small class="edit-pindahkeluar-error-no-kk text-danger"></small>
                    </div>
                    <!-- NIK -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="nik">NIK</label>
                      <input type="text" class="form-control" id="edit-nik" name="nik" placeholder="Masukkan NIK" maxlength="16" />
                      <small class="edit-pindahkeluar-error-nik text-danger"></small>
                    </div>
                    <!-- Nama -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="nama">Nama</label>
                      <input type="text" class="form-control" id="edit-nama" name="nama" placeholder="Masukkan Nama" maxlength="50" />
                      <small class="edit-pindahkeluar-error-nama text-danger"></small>
                    </div>
                    <!-- Jenis Kelamin -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="jenis_kelamin">Jenis Kelamin</label>
                      <select id="edit-jenis-kelamin" name="jenis_kelamin" class="form-control">
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                      </select>
                      <small class="edit-pindahkeluar-error-jenis-kelamin text-danger"></small>
                    </div>
                    <!-- Tempat Lahir -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="tempat_lahir">Tempat Lahir</label>
                      <input type="text" class="form-control" id="edit-tempat-lahir" name="tempat_lahir" placeholder="Masukkan Tempat Lahir" maxlength="16" />
                      <small class="edit-pindahkeluar-error-tempat-lahir text-danger"></small>
                    </div>
                    <!-- Tanggal Lahir -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="tanggal_lahir">Tanggal Lahir</label>
                      <input type="text" class="form-control" id="edit-tanggal-lahir" name="tanggal_lahir" />
                      <small class="edit-pindahkeluar-error-tanggal-lahir text-danger"></small>
                    </div>
                    <!-- Kewarganegaraan -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="jenis_kelamin">Kewarganegaraan</label>
                      <select id="edit-kewarganegaraan" name="kewarganegaraan" class="form-control">
                        <option value="WNI">WNI</option>
                        <option value="WNA">WNA</option>
                      </select>
                      <small class="edit-pindahkeluar-error-kewarganegaraan text-danger"></small>
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
                      <small class="edit-pindahkeluar-error-golongan-darah text-danger"></small>
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
                      <small class="edit-pindahkeluar-error-agama text-danger"></small>
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
                      <small class="edit-pindahkeluar-error-status-perkawinan text-danger"></small>
                    </div>
                    <!-- Status Perkawinan -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="shdk">SHDK</label>
                      <select id="edit-shdk" name="shdk" class="form-control">
                        <option value="Kepala Keluarga">Kepala Keluarga</option>
                        <option value="Suami">Suami</option>
                        <option value="Istri">Istri</option>
                        <option value="Anak">Anak</option>
                        <option value="Menantu">Menantu</option>
                        <option value="Cucu">Cucu</option>
                        <option value="Orangtua">Orangtua</option>
                        <option value="Mertua">Mertua</option>
                        <option value="Famili Lain">Famili Lain</option>
                        <option value="Pembantu">Pembantu</option>
                        <option value="Lainnya">Lainnya</option>
                      </select>
                      <small class="edit-pindahkeluar-error-status-perkawinan text-danger"></small>
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
                      <small class="edit-pindahkeluar-error-pendidikan text-danger"></small>
                    </div>
                    <!-- Pekerjaan -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="pekerjaan">Pekerjaan</label>
                      <select id="edit-pekerjaan" name="pekerjaan" class="form-control">
                        <option value="Belum/Tidak Bekerja">Belum/Tidak Bekerja</option>
                        <option value="Mengurus Rumah Tangga">Mengurus Rumah Tangga</option>
                        <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                        <option value="Pensiunan">Pensiunan</option>
                        <option value="Pegawai Negeri Sipil (PNS)">Pegawai Negeri Sipil (PNS)</option>

                        <option value="Tentara Nasional Indonesia">Tentara Nasional Indonesia</option>
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
                      <small class="edit-pindahkeluar-error-pekerjaan text-danger"></small>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane" id="edit-alamat-tinggal" role="tabpanel">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12"><br>
                    <!-- Alamat Sekarang -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="alamat_sekarang">Alamat Sekarang</label>
                      <textarea class="form-control" id="edit-alamat-sekarang" name="alamat_sekarang" rows="5"></textarea>
                      <small class="edit-pindahkeluar-error-alamat-sekarang text-danger"></small>
                    </div>
                    <!-- Alamat Tujuan -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="alamat_tujuan">Alamat Tujuan Pindah</label>
                      <textarea class="form-control" id="edit-alamat-tujuan" name="alamat_tujuan" rows="5"></textarea>
                      <small class="edit-pindahkeluar-error-alamat-tujuan text-danger"></small>
                    </div>
                    <!-- RT -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="rt">RT</label>
                      <input type="number" class="form-control" id="edit-rt" name="rt" />
                      <small class="edit-pindahkeluar-error-rt text-danger"></small>
                    </div>
                    <!-- RW -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="rw">RW</label>
                      <input type="number" class="form-control" id="edit-rw" name="rw" />
                      <small class="edit-pindahkeluar-error-rw text-danger"></small>
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
                      <small class="edit-pindahkeluar-error-kelurahan text-danger"></small><br>
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