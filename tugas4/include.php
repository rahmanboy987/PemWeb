<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="content" content="path_ur">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/659604d02a.js"></script>
    <link rel="stylesheet" href="css/960_12_col.css">

    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <title>Porto Fathur!</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="color"></nav>
    <div class="box_spacing"></div>

    <div class="container_12 box_s profile">
        <br>
        <table border="1" align="center">
            <tr>
                <th>No.</th>
                <th>NPM</th>
                <th>Nama</th>
                <Th>Alamat</Th>
            </tr>
            <?php
            $item = array();
            for ($a = 1; $a <= $_POST["number"]; $a++) {
                if ($a < 10) {
                    $item[$a] = array("No" => "00$a", "NPM" => "0" . $_POST["number"] . "00$a", "Nama" => $_POST["name"] . " 00$a", "Alamat" => $_POST["address"] . " No.00$a");
                } else if ($a < 100) {
                    $item[$a] = array("No" => "0$a", "NPM" => "0" . $_POST["number"] . "0$a", "Nama" => $_POST["name"] . " 0$a", "Alamat" => $_POST["address"] . " No.0$a");
                } else {
                    $item[$a] = array("No" => "$a", "NPM" => "0" . $_POST["number"] . "$a", "Nama" => $_POST["name"] . " $a", "Alamat" => $_POST["address"] . " No.$a");
                }
            }

            if (empty($_POST['number'])) { ?>
                <tr>
                    <th colspan="4">DATA EMPTY!</th>
                </tr>
            <?php } else {
                foreach ($item as $array) {
                    echo "<tr>";
                    foreach ($array as $val) {
                        echo "<td>$val</td>";
                    }
                    echo "</tr>";
                }
            } ?>
        </table>
        <br>
    </div>

    <div class=" end_spacing"></div>
    <footer>
        <p>&copy; Copyright 2019 | Made With <i class="fas fa-heart"></i> by Moh. Fathur Rohman</a>
        </p>
    </footer>
</body>

</html>