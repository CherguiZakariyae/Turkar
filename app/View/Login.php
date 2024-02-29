<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Turkar | <?= _Login; ?> </title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="public/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="public/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page dark-mode" style="background-image: url('Public/dist/img/background.jpg') !important;">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="index.php" class="h1"><b>Turkar</b></a>
            </div>
            <div class="card-body">
                <p class="login-box-msg"><?= _StartYourSession; ?></p>
                <form action="index.php" method="post">
                    <input type="hidden" class="form-control" name="action" value="login" ?>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="<?= _Email; ?>" name="email" id="email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="<?= _Password; ?>" name="password" id="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <p class="text-danger">
                                <?php
                                if (isset($_GET['action'])) {
                                    if ($_GET['action'] == "loginFailed") {
                                        echo _IncorrectMailOrPassword;
                                    }
                                }
                                ?></p>
                        </div>
                        <!-- /.col -->
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    <?= _RememberMe; ?>
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block"><?= _SignIn; ?></button>
                            <input type="hidden" class="form-control" name="action" value="login">
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <div class="social-auth-links text-center mt-2 mb-3">
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook-f mr-2"></i><?= _FaceebookSignIn; ?>
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google mr-2"></i><?= _GoogleSignIn; ?>
                    </a>
                </div>
                <!-- /.social-auth-links -->

                <p class="mb-1">
                    <a href="forgot-password.html"><?= _ForgotPassword; ?></a>
                </p>
                <p class="mb-0">
                    <a href="index.php?action=registerPage" class="text-center"><?= _NewMembership; ?></a>
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="public/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="public/dist/js/adminlte.min.js"></script>
</body>

</html>