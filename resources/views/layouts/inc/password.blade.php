<!-- Change Password Reports Modal -->
<div class="modal fade" id="change-password-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ganti Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	    <div class="modal-body">
	      <!-- Tab Change Password -->
	      <ul class="nav nav-tabs nav-tabs-line">
	        <li class="nav-item">
	          <a class="nav-link active" data-toggle="tab" href="#tab-change-password">Password</a>
	        </li>
	      </ul>
	      <!-- Tab Panel Change Password -->
	      <div class="tab-content">

	        <div class="tab-pane active" id="tab-change-password" role="tabpanel">
	          <div class="container">
	            <div class="row">
	              <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12"><br>
	              	<form id="form-change-password" method="POST">
              		{{ csrf_field() }}
              		<!-- Old Password -->
					<div class="form-group form-material">
						<input type="password" class="form-control" name="old_password" placeholder="Password Lama" autocomplete="off" />
						<small class="password-error-old text-danger"></small>
					</div>
	                <!-- New Password -->
					<div class="form-group form-material">
						<input type="password" class="form-control" name="new_password" placeholder="Password Baru" autocomplete="off" />
						<small class="password-error-new text-danger"></small>
					</div>
					<!-- New Password -->
					<div class="form-group form-material">
						<input type="password" class="form-control" name="new_password_confirmation" placeholder="Konfirmasi Password Baru" autocomplete="off" />
						<small class="password-error-confirm text-danger"></small>
					</div>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="modal-footer">
	    	<button type="submit" class="btn btn-success btn-submit-password">Ganti Password</button>
			<button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
	    </div>
        </form>
    </div>
  </div>
</div>

<!-- Rekapitulasi Reports Modal -->
<div class="modal fade" id="print-summary-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Print Rekapitulasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	    <div class="modal-body">
	      <!-- Tab Rekapitulasi -->
	      <ul class="nav nav-tabs nav-tabs-line">
	        <li class="nav-item">
	          <a class="nav-link active" data-toggle="tab" href="#tab-rekapitulasi-gender">Rekapitulasi Berdasarkan Jenis Kelamin</a>
	        </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tab-rekapitulasi-status">Rekapitulasi Berdasarkan Status</a>
          </li>
	      </ul>
	      <!-- Tab Panel Rekapitulasi -->
	      <div class="tab-content">

	        <div class="tab-pane active" id="tab-rekapitulasi-gender" role="tabpanel">
	          <div class="container">
	            <div class="row">
	              <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12"><br>
	              	<form target="_blank" action="{{ url('/dashboard/rekap/jeniskelamin') }}" method="GET">
                		{{ csrf_field() }}
                		<!-- Tanggal Dari -->
  	                <div class="form-group form-material">
  	                  <input type="text" class="form-control reports-dari" name="tanggal_dari" placeholder="Dari Tanggal" autocomplete="off" />
  	                </div>
  	                <!-- Tanggal Sampai -->
  	                <div class="form-group form-material">
  	                  <input type="text" class="form-control reports-sampai" name="tanggal_sampai" placeholder="Sampai Tanggal" autocomplete="off" />
  	                </div>
                    <button type="submit" class="btn btn-success">Print Rekapitulasi</button>
                  </form>
	              </div>
	            </div>
	          </div>
	        </div>

          <div class="tab-pane" id="tab-rekapitulasi-status" role="tabpanel">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12"><br>
                  <form target="_blank" action="{{ url('/dashboard/rekap/status') }}" method="GET">
                    {{ csrf_field() }}
                    <!-- Tanggal Dari -->
                    <div class="form-group form-material">
                      <input type="text" class="form-control reports-dari" name="tanggal_dari" placeholder="Dari Tanggal" autocomplete="off" />
                    </div>
                    <!-- Tanggal Sampai -->
                    <div class="form-group form-material">
                      <input type="text" class="form-control reports-sampai" name="tanggal_sampai" placeholder="Sampai Tanggal" autocomplete="off" />
                    </div>
                    <button type="submit" class="btn btn-success">Print Rekapitulasi</button>
                  </form>
                </div>
              </div>
            </div>

          </div>
	      </div>
	    </div>
	    <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
	    </div>
    </div>
  </div>
</div>

<!-- Archive Ktp Modal -->
<div class="modal fade" id="archive-ktp-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Buat Arsip Pemohon E-KTP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	    <div class="modal-body">
	      <!-- Tab Archive -->
	      <ul class="nav nav-tabs nav-tabs-line">
	        <li class="nav-item">
	          <a class="nav-link active" data-toggle="tab" href="#tab-archive">Arsip</a>
	        </li>
	      </ul>
	      <!-- Tab Panel Archive -->
	      <div class="tab-content">

	        <div class="tab-pane active" id="tab-archive" role="tabpanel">
	          <div class="container">
	            <div class="row">
	              <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12"><br>
	              	<form target="_blank" action="{{ url('/dashboard/archive/ktp/date') }}" method="GET">
              		{{ csrf_field() }}
              		<!-- Tanggal Dari -->
	                <div class="form-group form-material">
	                  <input type="text" class="form-control reports-dari" name="tanggal" placeholder="Dari Tanggal" autocomplete="off" />
	                </div>
	                <!-- Tanggal Sampai -->
	                {{-- <div class="form-group form-material">
	                  <input type="text" class="form-control reports-sampai" name="tanggal_sampai" placeholder="Sampai Tanggal" autocomplete="off" />
	                </div> --}}
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="modal-footer">
	    	<button type="submit" class="btn btn-success">Cetak Arsip</button>
			<button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
	    </div>
        </form>
    </div>
  </div>
</div>

<!-- Archive Kartu Keluarga Modal -->
<div class="modal fade" id="archive-kk-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Buat Arsip Pemohon Kartu Keluarga</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	    <div class="modal-body">
	      <!-- Tab Archive -->
	      <ul class="nav nav-tabs nav-tabs-line">
	        <li class="nav-item">
	          <a class="nav-link active" data-toggle="tab" href="#tab-archive">Arsip</a>
	        </li>
	      </ul>
	      <!-- Tab Panel Archive -->
	      <div class="tab-content">

	        <div class="tab-pane active" id="tab-archive" role="tabpanel">
	          <div class="container">
	            <div class="row">
	              <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12"><br>
	              	<form target="_blank" action="{{ url('/dashboard/archive/kk/date') }}" method="GET">
              		{{ csrf_field() }}
              		<!-- Tanggal Dari -->
	                <div class="form-group form-material">
	                  <input type="text" class="form-control reports-dari" name="tanggal" placeholder="Dari Tanggal" autocomplete="off" />
	                </div>
	                <!-- Tanggal Sampai -->
	                {{-- <div class="form-group form-material">
	                  <input type="text" class="form-control reports-sampai" name="tanggal_sampai" placeholder="Sampai Tanggal" autocomplete="off" />
	                </div> --}}
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="modal-footer">
	    	<button type="submit" class="btn btn-success">Cetak Arsip</button>
			<button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
	    </div>
        </form>
    </div>
  </div>
</div>

<!-- Archive Legalisir Modal -->
<div class="modal fade" id="archive-legalisir-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Buat Arsip Pemohon Legalisir</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	    <div class="modal-body">
	      <!-- Tab Archive -->
	      <ul class="nav nav-tabs nav-tabs-line">
	        <li class="nav-item">
	          <a class="nav-link active" data-toggle="tab" href="#tab-archive">Arsip</a>
	        </li>
	      </ul>
	      <!-- Tab Panel Archive -->
	      <div class="tab-content">

	        <div class="tab-pane active" id="tab-archive" role="tabpanel">
	          <div class="container">
	            <div class="row">
	              <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12"><br>
	              	<form target="_blank" action="{{ url('/dashboard/archive/legalisir/date') }}" method="GET">
              		{{ csrf_field() }}
              		<!-- Tanggal Dari -->
	                <div class="form-group form-material">
	                  <input type="text" class="form-control reports-dari" name="tanggal" placeholder="Dari Tanggal" autocomplete="off" />
	                </div>
	                <!-- Tanggal Sampai -->
	                {{-- <div class="form-group form-material">
	                  <input type="text" class="form-control reports-sampai" name="tanggal_sampai" placeholder="Sampai Tanggal" autocomplete="off" />
	                </div> --}}
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="modal-footer">
	    	<button type="submit" class="btn btn-success">Cetak Arsip</button>
			<button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
	    </div>
        </form>
    </div>
  </div>
</div>

<!-- Archive Pindah Datang Modal -->
<div class="modal fade" id="archive-pindahdatang-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Buat Arsip Pemohon Pindah Datang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	    <div class="modal-body">
	      <!-- Tab Archive -->
	      <ul class="nav nav-tabs nav-tabs-line">
	        <li class="nav-item">
	          <a class="nav-link active" data-toggle="tab" href="#tab-archive">Arsip</a>
	        </li>
	      </ul>
	      <!-- Tab Panel Archive -->
	      <div class="tab-content">

	        <div class="tab-pane active" id="tab-archive" role="tabpanel">
	          <div class="container">
	            <div class="row">
	              <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12"><br>
	              	<form target="_blank" action="{{ url('/dashboard/archive/pindahdatang/date') }}" method="GET">
              		{{ csrf_field() }}
              		<!-- Tanggal Dari -->
	                <div class="form-group form-material">
	                  <input type="text" class="form-control reports-dari" name="tanggal" placeholder="Dari Tanggal" autocomplete="off" />
	                </div>
	                <!-- Tanggal Sampai -->
	                {{-- <div class="form-group form-material">
	                  <input type="text" class="form-control reports-sampai" name="tanggal_sampai" placeholder="Sampai Tanggal" autocomplete="off" />
	                </div> --}}
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="modal-footer">
	    	<button type="submit" class="btn btn-success">Cetak Arsip</button>
			<button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
	    </div>
        </form>
    </div>
  </div>
</div>

<!-- Archive Pindah Keluar Modal -->
<div class="modal fade" id="archive-pindahkeluar-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Buat Arsip Pemohon Pindah Keluar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	    <div class="modal-body">
	      <!-- Tab Archive -->
	      <ul class="nav nav-tabs nav-tabs-line">
	        <li class="nav-item">
	          <a class="nav-link active" data-toggle="tab" href="#tab-archive">Arsip</a>
	        </li>
	      </ul>
	      <!-- Tab Panel Archive -->
	      <div class="tab-content">

	        <div class="tab-pane active" id="tab-archive" role="tabpanel">
	          <div class="container">
	            <div class="row">
	              <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12"><br>
	              	<form target="_blank" action="{{ url('/dashboard/archive/pindahkeluar/date') }}" method="GET">
              		{{ csrf_field() }}
              		<!-- Tanggal Dari -->
	                <div class="form-group form-material">
	                  <input type="text" class="form-control reports-dari" name="tanggal" placeholder="Dari Tanggal" autocomplete="off" />
	                </div>
	                <!-- Tanggal Sampai -->
	                {{-- <div class="form-group form-material">
	                  <input type="text" class="form-control reports-sampai" name="tanggal_sampai" placeholder="Sampai Tanggal" autocomplete="off" />
	                </div> --}}
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="modal-footer">
	    	<button type="submit" class="btn btn-success">Cetak Arsip</button>
			<button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
	    </div>
        </form>
    </div>
  </div>
</div>