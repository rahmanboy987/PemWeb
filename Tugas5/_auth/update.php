<?php
$npm = trim(mysqli_real_escape_string($con, $_POST['npm']));
$nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
$fakultas = trim(mysqli_real_escape_string($con, $_POST['fakultas']));
$jurusan = trim(mysqli_real_escape_string($con, $_POST['jurusan']));
$sql_add = mysqli_query($con, "UPDATE mahasiswa SET Npm='$npm', Nama='$nama', Fakultas='$fakultas', Jurusan='$jurusan' WHERE Npm = '$_GET[npm]'");
