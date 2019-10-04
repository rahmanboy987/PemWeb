<?php
include "config.php";
if (!isset($_SESSION['user'])) {
    echo "<script>window.location='" . base_url() . "';</script>";
} else {
    if (isset($_POST['add'])) {
        include "_auth/add.php";
        echo "<script>window.location='" . base_url() . "';</script>";
    } ?>

    <!DOCTYPE html>
    <html lang="en" id="home">

    <head>
        <meta charset="UTF-8">
        <meta name="content" content="path_ur">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://kit.fontawesome.com/659604d02a.js"></script>
        <link rel="stylesheet" href="css/960_12_col.css">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
        <title>Porto Fathur!</title>
    </head>

    <body>
        <nav>
            <ul>
                <li><a href="<?= base_url() ?>">Kembali</a></li>
            </ul>
        </nav>

        <nav class="color"></nav>
        <div class="box_spacing"></div>

        <div class="container_12 box_s profile">
            <img src="img/photo.jpg" alt="">
            <div class="p_text">
                <?php
                    $no = 1;
                    $sql_mhs = mysqli_query($con, "SELECT * FROM mahasiswa") or die(mysqli_error($con, ""));
                    if (mysqli_num_rows($sql_mhs) > 0) {
                        while ($data = mysqli_fetch_array($sql_mhs)) {
                            if ($data['Npm'] == $_GET['npm']) { ?>
                            <h2><?= $data['Nama'] ?></h2>
                            <h3><?= $data['Npm'] ?></h3>
                            <div class="p_desc">
                                <p>No. Table : <?= $no++ ?></p>
                                <p>Nama : <?= $data['Npm'] ?></p>
                                <p>Fakultas : <?= $data['Fakultas'] ?></p>
                                <p>Jurusan : <?= $data['Jurusan'] ?></p>
                            <?php } else {
                                            $no++;
                                        } ?>
                    <?php };
                        } ?>

                            </div>
            </div>
        </div>

        <div class="box_spacing"></div>

        <footer>
            <p>&copy; Copyright 2019 | Made With <i class="fas fa-heart"></i> by Moh. Fathur Rohman</a>
            </p>
        </footer>
    </body>

    </html>
<?php } ?>