<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Stok Gudang</h1>
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
                <h3 class="card-title">Stok Gudang 1</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="active tab-pane" id="activity">

                        <div class="form-group row d-flex justify-content-between align-items-center">
                            <div class="card card-primary card-outline col-sm-5">
                                <div class="card-header">
                                    <h3 class="card-title">ONT</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body p-0">
                                    <table class="table table-primary table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Material</th>
                                                <th>Stok</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1.</td>
                                                <td>Update software</td>
                                                <td>100</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-header">
                                    <h3 class="card-title"></h3>
                                </div>
                                <!-- /.card-body -->
                            </div>

                            <div class="card card-primary card-outline col-sm-5">
                                <div class="card-header">
                                    <h3 class="card-title">STB</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body p-0">
                                    <table class="table table-primary table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Material</th>
                                                <th>Stok</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1.</td>
                                                <td>Update software</td>
                                                <td>100</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-header">
                                    <h3 class="card-title"></h3>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>

                        <div class="form-group row d-flex justify-content-between align-items-center">
                            <div class="card card-primary card-outline col-sm-5">
                                <div class="card-header">
                                    <h3 class="card-title">Aksesoris</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body p-0">
                                    <table class="table table-primary table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Material</th>
                                                <th>Stok</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1.</td>
                                                <td>Update software</td>
                                                <td>100</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-header">
                                    <h3 class="card-title"></h3>
                                </div>
                                <!-- /.card-body -->
                            </div>

                            <div class="card card-primary card-outline col-sm-5">
                                <div class="card-header">
                                    <h3 class="card-title">Kabel Udara</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body p-0">
                                    <table class="table table-primary table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Material</th>
                                                <th>Stok</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1.</td>
                                                <td>Update software</td>
                                                <td>100</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-header">
                                    <h3 class="card-title"></h3>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="card card-danger card-outline">
            <div class="card-header p-2">
                <h3 class="card-title">Stok Gudang Witel</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">

                <div class="card-header">
                    <h3 class="card-title"></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table table-danger table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nama Material</th>
                                <th>Gudang Pusat</th>
                                <th>Gudang Cabang 1</th>
                                <th>Gudang Cabang 2</th>
                                <th>Gudang Cabang 3</th>
                                <!--th>Total Stok</!--th-->
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($material as $u) : ?>
                                <tr>
                                    <td><?= $u['nama']; ?></td>
                                    <td></td>
                                    <td>100</td>
                                    <td>250</td>
                                    <td>500</td>
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