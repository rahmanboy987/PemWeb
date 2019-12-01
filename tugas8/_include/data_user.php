<div class="content">
    <div class="data_user" id="data_user">
        <h1>DATA USER</h1>
        <table>
            <tr>
                <th>NoPeg</th>
                <th>Nama</th>
                <Th>Fakultas</Th>
                <th>Username/Email</th>
                <th>Password</th>
            </tr>
            <?php
            $sql_mhs = mysqli_query($con, "SELECT nopeg, nama, nm_fakultas, username, password FROM `data_user` JOIN fakultas ON data_user.kode_fakultas=fakultas.kode_fakultas") or die(mysqli_error($con, ""));
            if (mysqli_num_rows($sql_mhs) > 0) {
                while ($data = mysqli_fetch_array($sql_mhs)) { ?>
                    <tr>
                        <td><?= $data['nopeg'] ?></td>
                        <td><?= $data['nama'] ?></td>
                        <td><?= $data['nm_fakultas'] ?></td>
                        <td><?= $data['username'] ?></td>
                        <td><?= $data['password'] ?></td>
                    </tr>
            <?php };
            } ?>
        </table>
    </div>