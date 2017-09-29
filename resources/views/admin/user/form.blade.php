<!-- User Create Modal -->
<div class="modal fade" id="user-create-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Entri Data User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="user-create-form" method="POST">
        <div class="modal-body">
          <!-- Tab User -->
          <ul class="nav nav-tabs nav-tabs-line">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#create-identitas-user">Identitas user</a>
            </li>
          </ul>
          <!-- Tab Panel User -->
          <div class="tab-content">

            <div class="tab-pane active" id="create-identitas-user" role="tabpanel">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12"><br>
                    <!-- Nama Lengkap -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="name">Nama Lengkap</label>
                      <input type="text" class="form-control" id="create-name" name="name" placeholder="Masukkan Nama Lengkap" maxlength="16" />
                      <small class="create-user-error-name text-danger"></small>
                    </div>
                    <!-- Username -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="username">Username</label>
                      <input type="text" class="form-control" id="create-username" name="username" placeholder="Username" />
                      <small class="create-user-error-username text-danger"></small>
                    </div>
                    <!-- Email -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="email">Email</label>
                      <input type="email" class="form-control" id="create-email" name="email" placeholder="email" />
                      <small class="create-user-error-email text-danger"></small>
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

<!-- User Create Modal -->
<div class="modal fade" id="user-show-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tampil Data User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="user-show-form" method="POST">
        <div class="modal-body">
          <!-- Tab User -->
          <ul class="nav nav-tabs nav-tabs-line">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#show-identitas-user">Identitas user</a>
            </li>
          </ul>
          <!-- Tab Panel User -->
          <div class="tab-content">

            <div class="tab-pane active" id="show-identitas-user" role="tabpanel">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12"><br>
                    <!-- Nama Lengkap -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="name">Nama Lengkap</label>
                      <input type="text" class="form-control" id="show-name" name="name" readonly />
                    </div>
                    <!-- Username -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="username">Username</label>
                      <input type="text" class="form-control" id="show-username" name="username" readonly />
                    </div>
                    <!-- Email -->
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="email">Email</label>
                      <input type="email" class="form-control" id="show-email" name="email" readonly />
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Keluar</button>
        </div>
      </form>
    </div>
  </div>
</div>