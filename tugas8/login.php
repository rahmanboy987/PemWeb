<?php
include "config.php";
if (isset($_SESSION['admin'])) {
    echo "<script>window.location='" . base_url() . "';</script>";
} else { ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="author" content="Fahtur">
        <link rel="stylesheet/less" href="<?= base_url() ?>/less/style.less">
        <script type="text/javascript" src="<?= base_url() ?>/js/less.min.js"></script>
        <title>ini Login</title>
    </head>

    <div style="padding:50px;"></div>

    <body class="body_login">
        <form action="" method="post" class="login" align=center>
            <p>LOGIN!</p>
            <input type="email" name="user" placeholder="Masukkan email"><br>
            <input type="password" name="pass" id="pass" placeholder="Masukkan Password" pattern=".{5,}" title="Five or more characters"><br>
            <input type="submit" name="login" value="Sign in">
        </form>

        <?php if (isset($_POST['login'])) {
                $user = trim(mysqli_real_escape_string($con, $_POST['user']));
                $pass = trim(mysqli_real_escape_string($con, $_POST['pass']));
                $sql_login = mysqli_query($con, "SELECT data_user.nopeg, data_user.username, data_user.password, fakultas.nm_fakultas FROM data_user join fakultas on data_user.kode_fakultas=fakultas.kode_fakultas and username = '$user' AND password = '$pass'") or die(mysqli_error($con));
                if (mysqli_num_rows($sql_login) > 0) {
                    while ($data = mysqli_fetch_array($sql_login)) {
                        $_SESSION['admin'] = $data['nopeg'];
                        $_SESSION['fakultas'] = $data['nm_fakultas'];
                    }
                    echo "<script>window.location='" . base_url() . "';</script>";
                } else { ?>
                <div class="alert alert-danger alert-dismissible">
                    <strong>login gagal!</strong>
                </div>
        <?php };
            } ?>
    </body>

    </html>

<?php } ?>