<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Pengumuman</h1>
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

    <div class="col-md-12">
        <div class="card card-danger card-outline">
            <div class="card-header p-2">
                <h3 class="card-title"></h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="active tab-pane" id="activity">

                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#modal-default">Pengumuman Baru</button>
                        </div><br>

                        <?= $this->session->flashdata('message'); ?>

                        <div class="modal fade" id="modal-default">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Pengumuman Baru</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form id="quickForm" method="POST" action="<?= base_url('administrator/input_pengumuman') ?>">
                                        <div class="modal-body">
                                            <div class="form-group row">
                                                <div class="col-sm-8">
                                                    <input type="text" name="pengumuman" class="form-control" id="inputName" placeholder="Tulis sesuatu .&nbsp;.&nbsp;."></input>
                                                    <small class="text-danger"><?= form_error('material'); ?></small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary">Tambah</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Tabel Pengumuman</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="width: 10px">No</th>
                                                <th>Nama</th>
                                                <th>Manage</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($pengumuman as $u) : ?>
                                                <tr>
                                                    <th scope="row"><?= $no++ ?></th>
                                                    <td><?= $u['pengumuman']; ?></td>
                                                    <td>
                                                        <a href="<?= base_url('administrator/hapus2/') . $u['id']; ?>" class="btn btn-xs btn-danger">Hapus</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>