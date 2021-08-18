<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data User</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('user'); ?>">Home</a></li>
            <li class="breadcrumb-item active"><?= date('D, d M Y H:i'); ?></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div><br>

  <div class="col-sm-10">
    <button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#modal-default">Tambah User</button>
  </div><br>


  <div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content bg-default">
        <div class="modal-header">
          <h4 class="modal-title">Tambah User</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="quickForm" method="POST" action="<?= base_url('administrator/akunbaru') ?>">
          <div class="modal-body">
            <div class="form-group row">
              <label for="inputName" class="col-sm-3 col-form-label">Username</label>
              <div class="col-sm-9">
                <input type="email" name="idadmin" class="form-control" id="Id Admin" placeholder="Masukkan Username" value="<?= set_value('idadmin'); ?>" required>
                <small class="text-danger"><?= form_error('idadmin'); ?></small>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password1" class="form-control" id="password1" placeholder="Masukkan Password" required>

              </div>
              <div class="col">
                <label for="exampleInputPassword1">Masukkan ulang password</label>
                <input type="password" name="password2" class="form-control" id="password2" placeholder="Masukkan Password" required>

              </div>
            </div><br>
            <div class="form-group row">
              <label for="inputName" class="col-sm-3 col-form-label">Nama Admin</label>
              <div class="col-sm-9">
                <input type="text" name="namaadmin" class="form-control" id="namaadmin" placeholder="Masukkan Nama" value="<?= set_value('namaadmin'); ?>" required>
                <small class=" text-danger"><?= form_error('namaadmin'); ?></small>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputName" class="col-sm-3 col-form-label">Alamat</label>
              <div class="col-sm-9">
                <input type="text" name="alamatt" class="form-control" id="alamatt" placeholder="Masukkan Alamat" value="<?= set_value('alamatt'); ?>" required>
                <small class=" text-danger"><?= form_error('alamatt'); ?></small>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputName" class="col-sm-3 col-form-label">NIK/NIP</label>
              <div class="col-sm-9">
                <input type="text" name="nik" class="form-control" id="nik" placeholder="Masukkan Alamat" value="<?= set_value('nik'); ?>" required>
                <small class=" text-danger"><?= form_error('nik'); ?></small>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputName" class="col-sm-3 col-form-label">Alamat Email</label>
              <div class="col-sm-9">
                <input type="email" name="emailbaru" class="form-control" id="emailbaru" placeholder="Masukkan Email" value="<?= set_value('emailbaru'); ?>" required>
                <small class=" text-danger"><?= form_error('emailbaru'); ?></small>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputName" class="col-sm-3 col-form-label">No Telpon</label>
              <div class="col-sm-9">
                <input type="text" name="telpon" class="form-control" id="telpon" placeholder="Masukkan Nomor" value="<?= set_value('telpon'); ?>" required>
                <small class=" text-danger"><?= form_error('telpon'); ?></small>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputName" class="col-sm-3 col-form-label">Area</label>
              <div class="col-sm-9">
                <input type="text" name="wilayah" class="form-control" id="wilayah" placeholder="Masukkan Wilayah" value="<?= set_value('wilayah'); ?>" required>
                <small class=" text-danger"><?= form_error('wilayah'); ?></small>
              </div>
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-success">Simpan</button>
          </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->


  <div class="col-12">
    <div class="card card-red">
      <div class="card-header">
        <h3 class="card-title">Tabel User</h3>

        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

            <div class="input-group-append">
              <button type="submit" class="btn btn-default">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-4">
        <?= $this->session->flashdata('message'); ?>
        <table class="table table-hover text-nowrap">
          <thead>
            <tr>
              <th>No</th>
              <th>E-mail User</th>
              <th>Nama User</th>
              <th>Password</th>
              <th>Status User</th>
              <th>Manage</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($info_user as $u) : ?>
              <tr>
                <th scope="row"><?= $no++ ?></th>
                <td><?= $u['iduser']; ?></td>
                <td><?= $u['nama']; ?></td>
                <td><?= $u['password2']; ?></td>
                <td>
                  <div class="bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-focused bootstrap-switch-animate bootstrap-switch-on" style="width: 88px;">
                    <div class="bootstrap-switch-container" style="width: 129px; margin-left: 0px;">
                      <span class="bootstrap-switch-handle-on bootstrap-switch-success" style="width: 43px;">ON</span>
                      <span class="bootstrap-switch-label" style="width: 43px;">&nbsp;</span>
                      <span class="bootstrap-switch-handle-off bootstrap-switch-danger" style="width: 43px;">OFF</span>
                      <input type="checkbox" name="my-checkbox" checked="" data-bootstrap-switch="" data-off-color="danger" data-on-color="success">
                    </div>
                  </div>
                </td>
                <td><a href="<?= base_url('administrator/hapus/') . $u['id']; ?>" class="btn btn-xs btn-danger">Hapus</a></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>