<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<?= base_url('asset/dist/img/talogo.png'); ?>">
    </link>
    <title>Block Site</title>

    <link rel="stylesheet" href="https://fontawesome.com/icons?d=gallery&p=2&q=text">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>dist/css/adminlte.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>plugins/daterangepicker/daterangepicker.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <!-- BS Stepper -->
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>plugins/bs-stepper/css/bs-stepper.min.css">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>plugins/dropzone/min/dropzone.min.css">
</head>

<body class="sidebar-mini">
    <div class="content">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="error-page">
                <h2 class="headline text-warning"> 403</h2><br>

                <div class="error-content">
                    <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Access Forbidden.</h3>

                    <p>
                        We could not open the page you were looking for. <br>
                        <a href="<?= base_url('user'); ?>">&larr; Return to Dashboard</a> &nbsp; or &nbsp; <a href="<?= base_url('login/logout'); ?>">Logout</a>
                    </p>
                </div><br><br>
                <center>Copyright &copy; <?= date('Y'); ?> By. Ghifari Ilham</center>
                <!-- /.error-content -->
            </div>
            <!-- /.error-page -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="<?= base_url('asset/'); ?>plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('asset/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('asset/'); ?>dist/js/adminlte.min.js"></script>
    <!-- Select2 -->
    <script src="<?= base_url('asset/'); ?>plugins/select2/js/select2.full.min.js"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="<?= base_url('asset/'); ?>plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
    <!-- InputMask -->
    <script src="<?= base_url('asset/'); ?>plugins/moment/moment.min.js"></script>
    <script src="<?= base_url('asset/'); ?>plugins/inputmask/jquery.inputmask.min.js"></script>
    <!-- date-range-picker -->
    <script src="<?= base_url('asset/'); ?>plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="<?= base_url('asset/'); ?>plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?= base_url('asset/'); ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Bootstrap Switch -->
    <script src="<?= base_url('asset/'); ?>plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <!-- BS-Stepper -->
    <script src="<?= base_url('asset/'); ?>plugins/bs-stepper/js/bs-stepper.min.js"></script>
    <!-- dropzonejs -->
    <script src="<?= base_url('asset/'); ?>plugins/dropzone/min/dropzone.min.js"></script>
    <script>
        $(document).on('change', '.custom-file-input', function(event) {
            $(this).next('.custom-file-label').html(event.target.files[0].name);
        });
    </script>
    <script type='text/javascript'>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                    $('#imagePreview').hide();
                    $('#imagePreview').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUpload").change(function() {
            //input form image
            readURL(this);
            let fileName = $(this).val().split("\\").pop();
            $("#imageName").html(fileName);
        });
    </script>
</body>

</html>