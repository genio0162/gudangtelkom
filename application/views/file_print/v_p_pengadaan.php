<html lang="en" moznomarginboxes mozdisallowselectionprint>

<head>
    <title><?= $title ?></title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="<?= base_url('asset/dist/img/talogo.png'); ?>" />
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>asset/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?= base_url(); ?>asset/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url(); ?>asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= base_url(); ?>asset/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url(); ?>asset/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url(); ?>asset/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url(); ?>asset/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url(); ?>asset/plugins/summernote/summernote-bs4.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url(); ?>asset/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>asset/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>asset/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>

<body onload="window.print()" id="page-top">
    <div class="container">
        <div class="row align-items-center container">
            <table class="table table-borderless">
                <tr>
                    <td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
                    <td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
                    <td>
                        <center>
                            <img src="<?= base_url(); ?>asset/dist/img/telkomaks.png" />
                        </center>
                    </td>
                </tr>
            </table>
        </div>
        <div class="row container">
            <table class="table table-borderless table-sm">
                <tr>
                    <td>
                        <center>
                            <h5>
                                <p style="font-family: Arial;"><b>FORM PENGADAAN BARANG</b></p>
                            </h5>
                        </center>
                    </td>
                </tr>
            </table>
        </div>

        <?php foreach ($barang_baru as $u) { ?>
            <div class="row align-items-center container">
                <table class="table table-borderless table-sm">
                    <tbody>
                        <tr>
                            <td style="font-family: Arial; font-size: small;">Nomer*)</td>
                            <td style="font-family: Arial; font-size: small;">:</td>
                            <td rowspan="7">
                                <br>
                                <center>
                                    <!--img src="<?= base_url(); ?>asset/dist/img/ikonp.png" /-->
                                </center>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td style="font-family: Arial; font-size: small;">Pengirim</td>
                            <td style="font-family: Arial; font-size: small;">: <?= $u['pengirim'] ?></td>
                        </tr>
                        <tr>
                            <td style="font-family: Arial; font-size: small;">Hari & Tanggal</td>
                            <td style="font-family: Arial; font-size: small;">: <?= date('D, d M Y'); ?></td>
                        </tr>
                        <tr>
                            <td style="font-family: Arial; font-size: small;">Time</td>
                            <td style="font-family: Arial; font-size: small;">: <?= date('H:i'); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="row align-items-center container">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="text-align:center;">NO</th>
                            <th style="text-align:center;">NAMA BARANG</th>
                            <th style="text-align:center;">JENIS</th>
                            <th style="text-align:center;">JUMLAH</th>
                            <th style="text-align:center;">KETERANGAN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><?= $u['nama'] ?></td>
                            <td><?= $u['jenis'] ?></td>
                            <td><?= $u['jumlah'] ?></td>
                            <td><?= $u['keterangan'] ?></td>
                        </tr>
                    </tbody>
                </table>
            </div><br>
        <?php } ?>


        <table class="table table-borderless table-default">
            <thead>
                <tr>
                    <th style="text-align:center;">Mengetahui / Menyetujui<br>TL. WH INV JEMBER</th>
                    <th></th>
                    <th style="text-align:center;">Penerima<br>Petugas Gudang</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="text-align:center;"><br><br><br></td>
                    <td style="text-align:center;"><br><br><br></td>
                    <td style="text-align:center;"><br><br><br></td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td style="text-align:center;"><u><b>M. REZA ARDIWINATA</b></u><br>NIP/NIK : 18930388</td>
                    <td style="text-align:center;"></td>
                    <td style="text-align:center;"><u><b>......................................</b></u><br>NIP/NIK : ..................</td>
                </tr>
            </tfoot>
        </table>

    </div>
</body>

</html>