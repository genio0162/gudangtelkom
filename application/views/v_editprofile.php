<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>My Profile</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('user'); ?>">Home</a></li>
                        <li class="breadcrumb-item active"><?= date('D, d M Y H:i'); ?></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-danger card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src="<?= base_url('asset/dist/img/profile/') . $info_user['foto']; ?>" alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center"><?= $info_user['nama']; ?></h3>

                            <p class="text-muted text-center"><?= $info_user['nik']; ?></p>
                            <p class="text-muted text-center"><?= $info_user['wilayah']; ?></p>

                            <!-- /.modal -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card card-danger card-outline">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Tentang</a></li>
                                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Edit Profile</a></li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity">
                                    <?= $this->session->flashdata('message'); ?>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Alamat</label>
                                        <div class="col-sm-10 col-form-label">
                                            : <?= $info_user['alamat']; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">E-mail</label>
                                        <div class="col-sm-10 col-form-label">
                                            : <?= $info_user['emaill']; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">No Telepon</label>
                                        <div class="col-sm-10 col-form-label">
                                            : <?= $info_user['telpon']; ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="settings">
                                    <!--?php foreach ($info_user as $u) { ?-->
                                    <!--form class="form-horizontal" action="<?php base_url() . 'user/update'; ?>" method="post" -->
                                    <?= form_open_multipart('user/edit'); ?>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Id Admin</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="iduser" class="form-control" id="inputName" value="<?= $info_user['iduser']; ?>" readonly></input>
                                            <small class="text-danger"><?= form_error('iduser'); ?></small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="nama" class="form-control" id="inputName" value="<?= $info_user['nama']; ?>"></input>
                                            <small class="text-danger"><?= form_error('nama'); ?></small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-2 col-form-label">Alamat</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="alamat" class="form-control" id="inputEmail" value="<?= $info_user['alamat']; ?>"></input>
                                            <small class="text-danger"><?= form_error('alamat'); ?></small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-2 col-form-label">NIP/NIK</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="nik" class="form-control" id="inputEmail" value="<?= $info_user['nik']; ?>"></input>
                                            <small class="text-danger"><?= form_error('nik'); ?></small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName2" class="col-sm-2 col-form-label">E-mail</label>
                                        <div class="col-sm-10">
                                            <input type="email" name="email" class="form-control" id="inputName2" value="<?= $info_user['emaill']; ?>"></input>
                                            <small class="text-danger"><?= form_error('email'); ?></small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputExperience" class="col-sm-2 col-form-label">Telepon</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="telepon" class="form-control" id="inputExperience" value="<?= $info_user['telpon']; ?>"></input>
                                            <small class="text-danger"><?= form_error('telepon'); ?></small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputSkills" class="col-sm-2 col-form-label">Posisi</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="wilayah" class="form-control" id="inputSkills" value="<?= $info_user['wilayah']; ?>"></input>
                                            <small class="text-danger"><?= form_error('wilayah'); ?></small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="modal-body row">
                                            <label for="inputSkills" class="col-sm-2 col-form-label">Foto</label>
                                            <div class="col-sm-3">
                                                <img src="<?= base_url('asset/dist/img/profile/') . $info_user['foto']; ?>" class="img-thumbnail">
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="costom-files">
                                                    <input type="file" class="custom-file-input" id="image" name="image">
                                                    <label class="custom-file-label" for="image">Choose file</label>
                                                </div>
                                                <small class="text-danger"><?= form_error('image'); ?></small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger">Submit</button>
                                        </div>
                                    </div>
                                    </form>
                                    <!--?php } ?-->
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>