<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Laporan Transaksi</h1>
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
                <h3 class="card-title">Tabel Pengadaan</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="active tab-pane" id="activity">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Data Pengadaan</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="width: 10px">No</th>
                                                <th>Tanggal</th>
                                                <th>Kode Barang</th>
                                                <th>Nama</th>
                                                <th>Satuan</th>
                                                <th>Pengirim</th>
                                                <th>Jumlah</th>
                                                <th>Keterangan</th>
                                                <th>Cetak</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($barang_baru as $u) : ?>
                                                <tr>
                                                    <th scope="row"><?= $no++ ?></th>
                                                    <td><?= $u['tanggal']; ?></td>
                                                    <td><?= $u['id_barang']; ?></td>
                                                    <td><?= $u['nama']; ?></td>
                                                    <td><?= $u['jenis']; ?></td>
                                                    <td><?= $u['pengirim']; ?></td>
                                                    <td><?= $u['jumlah']; ?></td>
                                                    <td><?= $u['keterangan']; ?></td>
                                                    <td><a href="<?= base_url('cetak/p_pengadaan/' . $u['id']); ?>" class="btn btn-xs btn-success"><i class="fa fa-print"></i></a></td>
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

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="card card-danger card-outline">
            <div class="card-header p-2">
                <h3 class="card-title">Tabel Permintaan</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="active tab-pane" id="activity">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Data Permintaan</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="width: 10px">No</th>
                                                <th>Tanggal</th>
                                                <th>Kode Barang</th>
                                                <th>Nama</th>
                                                <th>Satuan</th>
                                                <th>Jumlah</th>
                                                <th>Tujuan</th>
                                                <th>Keterangan</th>
                                                <th>Cetak</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($barang_keluar as $u) : ?>
                                                <tr>
                                                    <th scope="row"><?= $no++ ?></th>
                                                    <td><?= $u['tanggal']; ?></td>
                                                    <td><?= $u['id_barang']; ?></td>
                                                    <td><?= $u['nama']; ?></td>
                                                    <td><?= $u['jenis']; ?></td>
                                                    <td><?= $u['jumlah']; ?></td>
                                                    <td><?= $u['tujuan']; ?></td>
                                                    <td><?= $u['keterangan']; ?></td>
                                                    <td><a href="<?= base_url('cetak/p_ba_permintaan/' . $u['id']); ?>" class="btn btn-xs btn-success"><i class="fa fa-print"></i></a></td>
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

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->