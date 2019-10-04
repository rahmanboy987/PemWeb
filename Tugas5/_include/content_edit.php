<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Tabel Mahasiswa</h1>
    <p class="mb-4">Tabel ini berisi data sample, disini anda dapat menambah data, mengedit dan mendelete data dengan fungsi paling mudah.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Data</h6>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="form-row">
                    <div class="col">
                        <input type="text" name="npm" class="form-control" placeholder="Masukkan NPM" required>
                    </div>
                    <div class="col">
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required>
                    </div>
                    <div class="col">
                        <input type="text" name="fakultas" class="form-control" placeholder="Masukkan Fakultas" required>
                    </div>
                    <div class="col">
                        <input type="text" name="jurusan" class="form-control" placeholder="Masukkan Jurusan" required>
                    </div>
                </div>
                <br>
                <input type="submit" name="update" class="btn btn-primary" value="Add Data">
            </form>
        </div>
    </div>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Npm</th>
                            <th>Nama</th>
                            <th>Fakultas</th>
                            <th>Jurusan</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Npm</th>
                            <th>Nama</th>
                            <th>Fakultas</th>
                            <th>Jurusan</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $no = 1;
                        $sql_mhs = mysqli_query($con, "SELECT * FROM mahasiswa") or die(mysqli_error($con, ""));
                        if (mysqli_num_rows($sql_mhs) > 0) {
                            while ($data = mysqli_fetch_array($sql_mhs)) {
                                if ($data['Npm'] == $_GET['npm']) {
                                    echo "<tr style='background-color: #ddd;'>";
                                } else {
                                    echo "<tr>";
                                } ?>
                                <td><?= $no++ ?></td>
                                <td><?= $data['Npm'] ?></td>
                                <td><?= $data['Nama'] ?></td>
                                <td><?= $data['Fakultas'] ?></td>
                                <td><?= $data['Jurusan'] ?></td>
                                </tr>
                        <?php };
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>