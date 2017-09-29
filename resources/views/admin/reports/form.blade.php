<!-- Ktp Reports Modal -->
<div class="modal fade" id="reports-ktp-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cetak Laporan Pemohon E-KTP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	    <div class="modal-body">
	      <!-- Tab Ktp Reports -->
	      <ul class="nav nav-tabs nav-tabs-line">
	        <li class="nav-item">
	          <a class="nav-link active" data-toggle="tab" href="#create-reports-ktp-date">By Date</a>
	        </li>
	        <li class="nav-item">
	        	<a class="nav-link" data-toggle="tab" href="#create-reports-ktp-kelurahan">By Kelurahan</a>
	        </li>
	      </ul>
	      <!-- Tab Panel Ktp Reports -->
	      <div class="tab-content">

	        <div class="tab-pane active" id="create-reports-ktp-date" role="tabpanel">
	          <div class="container">
	            <div class="row">
	              <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12"><br>
	              	<form target="_blank" action="{{ url('/dashboard/reports/ktp/date') }}" method="POST">
	              		{{ csrf_field() }}
	              		<!-- Tanggal Mulai -->
		                <div class="form-group form-material">
		                  <input type="text" class="form-control reports-dari" name="tanggal_dari" placeholder="Dari" autocomplete="off" />
		                </div>
		                <!-- Tanggal Sampai -->
			              <div class="form-group form-material">
			                <input type="text" class="form-control reports-sampai" name="tanggal_sampai" placeholder="Sampai" autocomplete="off" />
			              </div>
		                <button type="submit" class="btn btn-success btn-sm">Cetak Report</button>
	                </form>
	              </div>
	            </div>
	          </div>
	        </div>

	        <div class="tab-pane" id="create-reports-ktp-kelurahan" role="tabpanel">
	          <div class="container">
	            <div class="row">
	              <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12"><br>
	                <form target="_blank" action="{{ url('/dashboard/reports/ktp/kelurahan') }}" method="POST">
                	<!-- Kelurahan -->
                	{{ csrf_field() }}
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="kelurahan">Kelurahan</label>
                      <select name="kelurahan" class="form-control">
                        <option value="Cipaganti">Cipaganti</option>
                        <option value="Dago">Dago</option>
                        <option value="Lebak Gede">Lebak Gede</option>
                        <option value="Lebak Siliwangi">Lebak Siliwangi</option>
                        <option value="Sekeloa">Sekeloa</option>
                        <option value="Sadang Serang">Sadang Serang</option>
                      </select>
                    </div>
	                	<button type="submit" class="btn btn-success btn-sm">Cetak Report</button>
	                </form>
	              </div>
	            </div>
	          </div>
	        </div>

	      </div>
	    </div>
	    <div class="modal-footer">
	      <button type="button" class="btn btn-info" data-dismiss="modal">Keluar</button>
	    </div>
    </div>
  </div>
</div>

<!-- Kartu Keluarga Reports Modal -->
<div class="modal fade" id="reports-kk-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cetak Laporan Pemohon Kartu Keluarga</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	    <div class="modal-body">
	      <!-- Tab Kartu Keluarga Reports -->
	      <ul class="nav nav-tabs nav-tabs-line">
	        <li class="nav-item">
	          <a class="nav-link active" data-toggle="tab" href="#create-reports-kk-date">By Date</a>
	        </li>
	        <li class="nav-item">
	        	<a class="nav-link" data-toggle="tab" href="#create-reports-kk-kelurahan">By Kelurahan</a>
	        </li>
	      </ul>
	      <!-- Tab Panel Kartu Keluarga Reports -->
	      <div class="tab-content">

	        <div class="tab-pane active" id="create-reports-kk-date" role="tabpanel">
	          <div class="container">
	            <div class="row">
	              <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12"><br>
	              	<form target="_blank" action="{{ url('/dashboard/reports/kk/date') }}" method="POST">
	              		{{ csrf_field() }}
	              		<!-- Tanggal Mulai -->
		                <div class="form-group form-material">
		                  <input type="text" class="form-control reports-dari" name="tanggal_dari" placeholder="Dari" autocomplete="off" />
		                </div>
		                <!-- Tanggal Sampai -->
			              <div class="form-group form-material">
			                <input type="text" class="form-control reports-sampai" name="tanggal_sampai" placeholder="Sampai" autocomplete="off" />
			              </div>
		                <button type="submit" class="btn btn-success btn-sm">Cetak Report</button>
	                </form>
	              </div>
	            </div>
	          </div>
	        </div>

	        <div class="tab-pane" id="create-reports-kk-kelurahan" role="tabpanel">
	          <div class="container">
	            <div class="row">
	              <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12"><br>
	                <form target="_blank" action="{{ url('/dashboard/reports/kk/kelurahan') }}" method="POST">
                	<!-- Kelurahan -->
                	{{ csrf_field() }}
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="kelurahan">Kelurahan</label>
                      <select name="kelurahan" class="form-control">
                        <option value="Cipaganti">Cipaganti</option>
                        <option value="Dago">Dago</option>
                        <option value="Lebak Gede">Lebak Gede</option>
                        <option value="Lebak Siliwangi">Lebak Siliwangi</option>
                        <option value="Sekeloa">Sekeloa</option>
                        <option value="Sadang Serang">Sadang Serang</option>
                      </select>
                    </div>
	                	<button type="submit" class="btn btn-success btn-sm">Cetak Report</button>
	                </form>
	              </div>
	            </div>
	          </div>
	        </div>

	      </div>
	    </div>
	    <div class="modal-footer">
	      <button type="button" class="btn btn-info" data-dismiss="modal">Keluar</button>
	    </div>
    </div>
  </div>
</div>

<!-- Legalisir Reports Modal -->
<div class="modal fade" id="reports-legalisir-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cetak Laporan Pemohon Legalisir</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	    <div class="modal-body">
	      <!-- Tab Legalisir Reports -->
	      <ul class="nav nav-tabs nav-tabs-line">
	        <li class="nav-item">
	          <a class="nav-link active" data-toggle="tab" href="#create-reports-legalisir-date">By Date</a>
	        </li>
	        <li class="nav-item">
	        	<a class="nav-link" data-toggle="tab" href="#create-reports-legalisir-kelurahan">By Kelurahan</a>
	        </li>
	      </ul>
	      <!-- Tab Panel Legalisir Reports -->
	      <div class="tab-content">

	        <div class="tab-pane active" id="create-reports-legalisir-date" role="tabpanel">
	          <div class="container">
	            <div class="row">
	              <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12"><br>
	              	<form target="_blank" action="{{ url('/dashboard/reports/legalisir/date') }}" method="POST">
	              		{{ csrf_field() }}
	              		<!-- Tanggal Mulai -->
		                <div class="form-group form-material">
		                  <input type="text" class="form-control reports-dari" name="tanggal_dari" placeholder="Dari" autocomplete="off" />
		                </div>
		                <!-- Tanggal Sampai -->
			              <div class="form-group form-material">
			                <input type="text" class="form-control reports-sampai" name="tanggal_sampai" placeholder="Sampai" autocomplete="off" />
			              </div>
		                <button type="submit" class="btn btn-success btn-sm">Cetak Report</button>
	                </form>
	              </div>
	            </div>
	          </div>
	        </div>

	        <div class="tab-pane" id="create-reports-legalisir-kelurahan" role="tabpanel">
	          <div class="container">
	            <div class="row">
	              <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12"><br>
	                <form target="_blank" action="{{ url('/dashboard/reports/legalisir/kelurahan') }}" method="POST">
                	<!-- Kelurahan -->
                	{{ csrf_field() }}
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="kelurahan">Kelurahan</label>
                      <select name="kelurahan" class="form-control">
                        <option value="Cipaganti">Cipaganti</option>
                        <option value="Dago">Dago</option>
                        <option value="Lebak Gede">Lebak Gede</option>
                        <option value="Lebak Siliwangi">Lebak Siliwangi</option>
                        <option value="Sekeloa">Sekeloa</option>
                        <option value="Sadang Serang">Sadang Serang</option>
                      </select>
                    </div>
	                	<button type="submit" class="btn btn-success btn-sm">Cetak Report</button>
	                </form>
	              </div>
	            </div>
	          </div>
	        </div>

	      </div>
	    </div>
	    <div class="modal-footer">
	      <button type="button" class="btn btn-info" data-dismiss="modal">Keluar</button>
	    </div>
    </div>
  </div>
</div>

<!-- Pindah Datang Reports Modal -->
<div class="modal fade" id="reports-pindahdatang-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cetak Laporan Pemohon Pindah Datang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	    <div class="modal-body">
	      <!-- Tab Pindah Datang Reports -->
	      <ul class="nav nav-tabs nav-tabs-line">
	        <li class="nav-item">
	          <a class="nav-link active" data-toggle="tab" href="#create-reports-pindahdatang-date">By Date</a>
	        </li>
	        <li class="nav-item">
	        	<a class="nav-link" data-toggle="tab" href="#create-reports-pindahdatang-kelurahan">By Kelurahan</a>
	        </li>
	      </ul>
	      <!-- Tab Panel Pindah Datang Reports -->
	      <div class="tab-content">

	        <div class="tab-pane active" id="create-reports-pindahdatang-date" role="tabpanel">
	          <div class="container">
	            <div class="row">
	              <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12"><br>
	              	<form target="_blank" action="{{ url('/dashboard/reports/pindahdatang/date') }}" method="POST">
	              		{{ csrf_field() }}
	              		<!-- Tanggal Mulai -->
		                <div class="form-group form-material">
		                  <input type="text" class="form-control reports-dari" name="tanggal_dari" placeholder="Dari" autocomplete="off" />
		                </div>
		                <!-- Tanggal Sampai -->
			              <div class="form-group form-material">
			                <input type="text" class="form-control reports-sampai" name="tanggal_sampai" placeholder="Sampai" autocomplete="off" />
			              </div>
		                <button type="submit" class="btn btn-success btn-sm">Cetak Report</button>
	                </form>
	              </div>
	            </div>
	          </div>
	        </div>

	        <div class="tab-pane" id="create-reports-pindahdatang-kelurahan" role="tabpanel">
	          <div class="container">
	            <div class="row">
	              <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12"><br>
	                <form target="_blank" action="{{ url('/dashboard/reports/pindahdatang/kelurahan') }}" method="POST">
                	<!-- Kelurahan -->
                	{{ csrf_field() }}
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="kelurahan">Kelurahan</label>
                      <select name="kelurahan" class="form-control">
                        <option value="Cipaganti">Cipaganti</option>
                        <option value="Dago">Dago</option>
                        <option value="Lebak Gede">Lebak Gede</option>
                        <option value="Lebak Siliwangi">Lebak Siliwangi</option>
                        <option value="Sekeloa">Sekeloa</option>
                        <option value="Sadang Serang">Sadang Serang</option>
                      </select>
                    </div>
	                	<button type="submit" class="btn btn-success btn-sm">Cetak Report</button>
	                </form>
	              </div>
	            </div>
	          </div>
	        </div>

	      </div>
	    </div>
	    <div class="modal-footer">
	      <button type="button" class="btn btn-info" data-dismiss="modal">Keluar</button>
	    </div>
    </div>
  </div>
</div>

<!-- Pindah Keluar Reports Modal -->
<div class="modal fade" id="reports-pindahkeluar-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cetak Laporan Pemohon Pindah Keluar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	    <div class="modal-body">
	      <!-- Tab Pindah Keluar Reports -->
	      <ul class="nav nav-tabs nav-tabs-line">
	        <li class="nav-item">
	          <a class="nav-link active" data-toggle="tab" href="#create-reports-pindahkeluar-date">By Date</a>
	        </li>
	        <li class="nav-item">
	        	<a class="nav-link" data-toggle="tab" href="#create-reports-pindahkeluar-kelurahan">By Kelurahan</a>
	        </li>
	      </ul>
	      <!-- Tab Panel Pindah Keluar Reports -->
	      <div class="tab-content">

	        <div class="tab-pane active" id="create-reports-pindahkeluar-date" role="tabpanel">
	          <div class="container">
	            <div class="row">
	              <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12"><br>
	              	<form target="_blank" action="{{ url('/dashboard/reports/pindahkeluar/date') }}" method="POST">
	              		{{ csrf_field() }}
	              		<!-- Tanggal Mulai -->
		                <div class="form-group form-material">
		                  <input type="text" class="form-control reports-dari" name="tanggal_dari" placeholder="Dari" autocomplete="off" />
		                </div>
		                <!-- Tanggal Sampai -->
			              <div class="form-group form-material">
			                <input type="text" class="form-control reports-sampai" name="tanggal_sampai" placeholder="Sampai" autocomplete="off" />
			              </div>
		                <button type="submit" class="btn btn-success btn-sm">Cetak Report</button>
	                </form>
	              </div>
	            </div>
	          </div>
	        </div>

	        <div class="tab-pane" id="create-reports-pindahkeluar-kelurahan" role="tabpanel">
	          <div class="container">
	            <div class="row">
	              <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12"><br>
	                <form target="_blank" action="{{ url('/dashboard/reports/pindahkeluar/kelurahan') }}" method="POST">
                	<!-- Kelurahan -->
                	{{ csrf_field() }}
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="kelurahan">Kelurahan</label>
                      <select name="kelurahan" class="form-control">
                        <option value="Cipaganti">Cipaganti</option>
                        <option value="Dago">Dago</option>
                        <option value="Lebak Gede">Lebak Gede</option>
                        <option value="Lebak Siliwangi">Lebak Siliwangi</option>
                        <option value="Sekeloa">Sekeloa</option>
                        <option value="Sadang Serang">Sadang Serang</option>
                      </select>
                    </div>
	                	<button type="submit" class="btn btn-success btn-sm">Cetak Report</button>
	                </form>
	              </div>
	            </div>
	          </div>
	        </div>

	      </div>
	    </div>
	    <div class="modal-footer">
	      <button type="button" class="btn btn-info" data-dismiss="modal">Keluar</button>
	    </div>
    </div>
  </div>
</div>