<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<?= base_url('asset/dist/img/talogo.png'); ?>">
    <title>Login User</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page bg-danger">
    <div class="login-box">
        <div class="login-logo">
            <!--a href="<?= base_url('login/index') ?>">
                <p style="color: white;"><b>Sistem Informasi Gudang</b></p>
                <p style="color: white;">Witel Jember</p>
            </!--a-->
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <center>
                    <img src="<?= base_url(); ?>asset/dist/img/telkomaks.png" />
                </center><br>
                <!--p class="login-box-msg">Silahkan Login</!--p-->

                <?= $this->session->flashdata('message'); ?>

                <form action="<?= base_url('login/masuk') ?>" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="email" placeholder="E-mail" value="<?= set_value('email'); ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <small class="text-danger"><?= form_error('email'); ?></small>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <small class="text-danger"><?= form_error('password'); ?></small>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div><br><br>

                        <button type="submit" class="btn btn-block btn-danger">Masuk</button>
                        </a>
                    </div>
                    <div class="social-auth-links text-center mb-3">
                        <p>- Ghifari Ilham -</p>
                    </div>

                </form>

            </div>
        </div>
    </div>

    <script src="<?= base_url('asset/'); ?>plugins/jquery/jquery.min.js"></script>
    <script src="<?= base_url('asset/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('asset/'); ?>dist/js/adminlte.min.js"></script>
</body>

</html>