<div class="data_inv" id="data_inv">
    <h1>DATA INVENTARIS <?= strtoupper($_SESSION['fakultas']) ?></h1>
    <h3>Data Tools</h3>
    <form action="">
        Jenis Inventaris :
        <select name="jenis_inv" id="jenis_inv">
            <option value="">--- PILIH ---</option>
            <?php $sql_jenis = mysqli_query($con, "SELECT DISTINCT jenis FROM data_inv") or die(mysqli_error($con, ""));
            while ($data = mysqli_fetch_array($sql_jenis)) { ?>
                <option value="<?= $data['jenis'] ?>"><?= $data['jenis'] ?></option>
            <?php } ?>
        </select>
        <br>
        Kondisi :
        <select name="kondisi" id="kondisi">
            <option value="">--- PILIH ---</option>
            <?php $sql_jenis = mysqli_query($con, "SELECT DISTINCT kondisi FROM data_inv") or die(mysqli_error($con, ""));
            while ($data = mysqli_fetch_array($sql_jenis)) { ?>
                <option value="<?= $data['kondisi'] ?>"><?= $data['kondisi'] ?></option>
            <?php } ?>
        </select>
        <input type="button" value="Filter" id="filter" onclick="showData()">
    </form>

    <div id="data">
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
                $sql_mhs = mysqli_query($con, "SELECT kode_inv, jenis, nm_fakultas, barang, kondisi FROM data_inv JOIN fakultas ON data_inv.kode_fakultas=fakultas.kode_fakultas") or die(mysqli_error($con, ""));
            } else {
                $sql_mhs = mysqli_query($con, "SELECT kode_inv, jenis, nm_fakultas, barang, kondisi FROM data_inv JOIN fakultas ON data_inv.kode_fakultas=fakultas.kode_fakultas AND nm_fakultas='$fakultas'") or die(mysqli_error($con, ""));
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
    </div>
</div>