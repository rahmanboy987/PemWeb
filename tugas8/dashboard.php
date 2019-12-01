<?php
include "config.php";
if (!isset($_SESSION['admin'])) {
    echo "<script>window.location='" . base_url() . "/login.php';</script>";
} else {
    $fakultas = $_SESSION['fakultas'];
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="author" content="Fahtur">
        <link rel="stylesheet/less" href="<?= base_url() ?>/less/style.less">
        <script type="text/javascript" src="<?= base_url() ?>/js/less.min.js"></script>
        <title>Ini dashboard</title>
    </head>

    <body id="home">
        <?php
            include "_include/navbar.php";

            if ($_SESSION['admin'] == "0") {
                include "_include/data_user.php";
            }
            include "_include/data_inv.php";
            ?>
        <div style="padding:30px;"></div>

        <script>
            function showData() {
                var jenis_inv = document.getElementById("jenis_inv");
                var kondisi = document.getElementById("kondisi");

                if (jenis_inv.value == "" || kondisi.value == "") {
                    document.getElementById("data").innerHTML = "";
                    return;
                } else {
                    if (window.XMLHttpRequest) {
                        xmlhttp = new XMLHttpRequest();
                    } else {
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("data").innerHTML = this.responseText;
                        }
                    };
                    xmlhttp.open("GET", "<?= base_url() ?>/get_data.php?jenis_inv=" + jenis_inv.value + "&kondisi=" + kondisi.value, true);
                    xmlhttp.send();
                }
            }
        </script>
    </body>

    </html>

<?php } ?>