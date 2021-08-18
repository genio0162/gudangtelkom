<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Material Gudang</h1>
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
                <h3 class="card-title">Data Material</h3>

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
                            <button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#modal-default">Tambah Tipe</button>
                        </div><br>

                        <?= $this->session->flashdata('message'); ?>

                        <div class="modal fade" id="modal-default">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Default Modal</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form id="quickForm" method="POST" action="<?= base_url('administrator/tipebaru') ?>">
                                        <div class="modal-body">
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="material" class="form-control" id="inputName" placeholder="Nama material"></input>
                                                    <small class="text-danger"><?= form_error('material'); ?></small>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Satuan</label>
                                                <div class="col-sm-6">
                                                    <select class="form-control select2" name="jenis">
                                                        <?php foreach ($type as $u) : ?>
                                                            <option><?= $u['tipe'] ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                    <small class="text-danger"><?= form_error('jenis'); ?></small>
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

                        <div class="col-md-10">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Data Material</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="width: 10px">No</th>
                                                <th>Kode Barang</th>
                                                <th>Nama</th>
                                                <th>Satuan</th>
                                                <th>Manage</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($material as $u) : ?>
                                                <tr>
                                                    <th scope="row"><?= $no++ ?></th>
                                                    <td><?= $u['id_barang']; ?></td>
                                                    <td><?= $u['nama']; ?></td>
                                                    <td><?= $u['jenis']; ?></td>
                                                    <td>
                                                        <a href="<?= base_url('administrator/edit1/' . $u['id']); ?>" class="btn btn-xs btn-success">Edit</a> &nbsp;
                                                        <!--a href="<?= base_url('administrator/hapus1/') . $u['id']; ?>" class="btn btn-xs btn-danger">Hapus</!--a-->
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer clearfix">
                                    <ul class="pagination pagination-sm m-0 float-right">
                                        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="modal-edit">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Edit Data</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form id="quickForm" method="POST" action="<?= base_url('management/update1') ?>">
                                        <div class="modal-body">
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-3 col-form-label">Id Barang</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="id_aterial" class="form-control" id="inputName" value="<?= $material['id_barang'] ?>" readonly></input>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-3 col-form-label">Nama</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="nama" class="form-control" id="inputName" value="<?= $material['nama'] ?>"></input>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-3 col-form-label">Jenis</label>
                                                <div class="col-sm-6">
                                                    <select class="form-control select2" name="jenis">
                                                        <?php foreach ($type as $u) : ?>
                                                            <option><?= $u['tipe'] ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
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

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>