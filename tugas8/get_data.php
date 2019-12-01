<?php include "config.php";

$jenis = $_GET['jenis_inv'];
$kondisi = $_GET['kondisi'];

$fakultas = $_SESSION['fakultas'];
?>

<table>
    <tr>
        <th>kode_inv</th>
        <th>jenis</th>
        <th>kode_fakultas</th>
        <th>barang</th>
        <th>kondisi</th>
    </tr>

    <?php
    if ($fakultas == "All Fakultas") {
        $sql_mhs = mysqli_query($con, "SELECT kode_inv, jenis, nm_fakultas, barang, kondisi FROM data_inv JOIN fakultas ON data_inv.kode_fakultas=fakultas.kode_fakultas AND jenis='$jenis' AND kondisi='$kondisi'") or die(mysqli_error($con, ""));
    } else {
        $sql_mhs = mysqli_query($con, "SELECT kode_inv, jenis, nm_fakultas, barang, kondisi FROM data_inv JOIN fakultas ON data_inv.kode_fakultas=fakultas.kode_fakultas AND nm_fakultas='$fakultas' AND jenis='$jenis' AND kondisi='$kondisi'") or die(mysqli_error($con, ""));
    }

    if (mysqli_num_rows($sql_mhs) > 0) {
        while ($data = mysqli_fetch_array($sql_mhs)) { ?>
            <tr>
                <td><?= $data['kode_inv'] ?></td>
                <td><?= $data['jenis'] ?></td>
                <td><?= $data['nm_fakultas'] ?></td>
                <td><?= $data['barang'] ?></td>
                <td><?= $data['kondisi'] ?></td>
            </tr>
    <?php };
    } ?>
</table>