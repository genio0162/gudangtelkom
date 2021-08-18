<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Data</h1>
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
    <!-- /.content-header -->

    <div class="col-md-12">
        <div class="card card-danger card-outline">
            <div class="card-header p-2">
                <h3 class="card-title">Edit Material</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <?php foreach ($material as $u) { ?>
                <div class="card-body">
                    <div class="tab-content">
                        <form id="quickForm" method="POST" action="<?= base_url('administrator/update1'); ?>">
                            <div class="active tab-pane" id="activity">
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-3 col-form-label">Nama</label>
                                    <div class="col-sm-6">
                                        <input type="hidden" name="id_material" class="form-control" id="inputName" value="<?= $u['id'] ?>">
                                        <input type="text" name="nama" class="form-control" id="inputName" value="<?= $u['nama'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-3 col-form-label">Jenis</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="jenis" class="form-control" id="inputName" value="<?= $u['jenis'] ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-3 col-sm-6">
                                        <button type="submit" class="btn btn-success">Simpan</button>
                                        <form action="<?= base_url('administrator/data_material'); ?>">
                                            <button type="submit" class="btn btn-default">Kembali</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

</div>