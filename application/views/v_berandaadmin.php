<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Selamat Datang</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('user'); ?>">Home</a></li>
                        <li class="breadcrumb-item active"><?= date('D, d M Y H:i'); ?></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->

        <div class="card card-default col-sm-12">
            <div class="card-header">
                <h3 class="card-title"></h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <p>
                    Info penting hari ini, Mohon Dibaca :
                </p>

                <div class="col-md-12">
                    <table class="table table-borderless table-sm">
                        <thead>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($pengumuman as $u) : ?>

                                <tr>
                                    <td style="width: 10px" scope="row"><?= $no++ ?>.</td>
                                    <td><?= $u['pengumuman']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.card-body -->
        </div>

    </div>
    <!-- /.content-header -->
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->