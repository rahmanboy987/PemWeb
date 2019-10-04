<?php
include "config.php";
if (isset($_SESSION['user'])) {
    echo "<script>window.location='" . base_url() . "';</script>";
} else {
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Login</title>
        <script src="https://kit.fontawesome.com/659604d02a.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="<?= base_url() ?>/css/sb-admin-2.min.css" rel="stylesheet">
    </head>

    <body class="bg-gradient-primary">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12 col-md-9">
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">LOGIN</h1>
                                        </div>
                                        <form action="" method="post" class="user">
                                            <div class="form-group">
                                                <input type="text" name="user" class="form-control form-control-user" placeholder="Enter Username..." required>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="pass" class="form-control form-control-user" placeholder="Password" required>
                                            </div>
                                            <input type="submit" name="login" class="btn btn-primary btn-user btn-block" value="Login">
                                            <hr>
                                            <strong>Hint user sama password adalah kode gta SA untuk darah dan uang (huruf kecil)!</strong>
                                            <?php if (isset($_POST['login'])) {
                                                    $user = trim(mysqli_real_escape_string($con, $_POST['user']));
                                                    $pass = sha1(trim(mysqli_real_escape_string($con, $_POST['pass'])));
                                                    $sql_login = mysqli_query($con, "SELECT * FROM ini_admin WHERE username = '$user' AND password = '$pass'") or die(mysqli_error($con, ""));
                                                    if (mysqli_num_rows($sql_login) > 0) {
                                                        $_SESSION['user'] = $user;
                                                        echo "<script>window.location='" . base_url() . "';</script>";
                                                    } else { ?>
                                                    <div class="alert alert-danger alert-dismissible">
                                                        <strong>login gagal!</strong>
                                                    </div>
                                            <?php };
                                                } ?>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="<?= base_url() ?>/js/jquery.min.js"></script>
        <script src="<?= base_url() ?>/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url() ?>/js/jquery.easing.min.js"></script>
        <script src="<?= base_url() ?>/js/sb-admin-2.min.js"></script>
    </body>

    </html>
<?php } ?>