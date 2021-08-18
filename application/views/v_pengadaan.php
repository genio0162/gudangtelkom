<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Pengadaan</h1>
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
                <h3 class="card-title">Barang Masuk</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="col-md-4 col-md-offset-4">
                        <?= $this->session->flashdata('message'); ?>
                        <form id="quickForm" method="POST" action="<?= base_url('transaksi/proccess_in') ?>">
                            <div class="form-group">
                                <label>Tanggal *</label>
                                <input type="date" name="date" value="<?= date('Y-m-d'); ?>" class="form-control" required>
                            </div>
                            <div>
                                <label>Id Material *</label>
                            </div>
                            <div class="form-group input-group">
                                <input type="hidden" name="item_id" id="item_id">
                                <input type="text" name="id_barang" id="id_barang" class="form-control" required autofocus>
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-info btn-flat" data-toggle="modal" data-target="#modal-item">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <div class="form-group">
                                <label>Nama Material</label>
                                <input type="text" name="nama" id="nama" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-8">
                                        <label for="unit_name">Satuan</label>
                                        <input type="text" name="jenis" id="jenis" value="-" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="stok">Sisa Stock</label>
                                        <input type="text" name="jumlah" id="jumlah" value="-" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Pengirim *</label>
                                <input type="text" name="pengirim" id="item_name" class="form-control" placeholder="Keterangan" required>
                            </div>
                            <div class="form-group">
                                <label>Detail *</label>
                                <input type="text" name="item_name" id="item_name" class="form-control" placeholder="Keterangan" required>
                            </div>
                            <div class="form-group">
                                <label>Jumlah *</label>
                                <input type="number" name="qty" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="tambah" class="btn btn-success btn-flat">
                                    <i class="fa fa-paper-plane"></i>&nbsp;Save
                                </button>
                                <button type="reset" class="btn btn-default btn-flat">Reset</button>
                            </div>
                        </form>

                        <div class="modal fade" id="modal-item">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Tabel Barang</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="card p-4">
                                        <div class="card-header">
                                            <h3 class="card-title"></h3>
                                            <div class="card-tools">
                                                <div class="input-group input-group-sm" style="width: 150px;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-body table-responsive">
                                            <table class="table table-hover table-bordered text-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>Id Barang</th>
                                                        <th>Nama</th>
                                                        <th>Satuan</th>
                                                        <th>Stok</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($stok_tampil1 as $a) : ?>
                                                        <tr>
                                                            <td><?= $a['id_barang']; ?></td>
                                                            <td><?= $a['nama']; ?></td>
                                                            <td><?= $a['jenis']; ?></td>
                                                            <td><?= $a['jumlah']; ?></td>
                                                            <td>
                                                                <button class="btn btn-x btn-info" id="select" data-id_barang="<?= $a['id_barang'] ?>" data-nama="<?= $a['nama'] ?>" data-jenis="<?= $a['jenis'] ?>" data-jumlah="<?= $a['jumlah'] ?>">
                                                                    <i class="fa fa-check"></i> Select
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
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

    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->