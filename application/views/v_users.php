<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Users</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('user'); ?>">Home</a></li>
                        <li class="breadcrumb-item active"><?= date('D, d M Y H:i'); ?></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="container-fluid">
        <div class="row">
            <?php foreach ($info_user as $u) : ?>
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-danger card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src="<?= base_url('asset/dist/img/profile/') . $u['foto']; ?>" alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center"><?= $u['nama']; ?></h3>

                            <p class="text-muted text-center"><?= $u['nik']; ?></p>
                            <p class="text-muted text-center"><?= $u['wilayah']; ?></p>
                            <a href="#" type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#modal-sm<?php echo $u['id']; ?>"><b>Lihat Lengkap</b></a>
                        </div>
                        <!-- /.card-body -->
                        <div class="modal fade" id="modal-sm<?php echo $u['id']; ?>" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Profile Lengkap</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form role="form" action="<?= base_url('user/users'); ?>" method="get">
                                            <div class="card-header text-muted border-bottom-0">
                                                <?= $u['wilayah']; ?>
                                            </div>
                                            <div class="card-body pt-0">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <h2 class="lead"><b><?= $u['nama']; ?></b></h2>
                                                        <p class="text-muted text-sm"><b>E-mail: </b> <?= $u['emaill']; ?> </p>
                                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: <?= $u['alamat']; ?></li>
                                                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: <?= $u['telpon']; ?></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                    </div>

                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Kembali</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                    </div>
                    <!-- /.card -->

                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- /.content-header -->
</div>