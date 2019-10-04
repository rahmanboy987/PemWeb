<?php
include "../config.php";

mysqli_query($con, "DELETE FROM mahasiswa WHERE Npm = '$_GET[npm]'") or die(mysqli_error($con));

echo "<script>window.location='" . base_url() . "';</script>";
