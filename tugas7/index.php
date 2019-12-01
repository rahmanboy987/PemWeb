<?php
include 'database.php';
$db = new database();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Fathur">
  <title>Dashboard</title>
  <script src="https://kit.fontawesome.com/659604d02a.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">
    <?php include "_include/sidebar.php" ?>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
        <?php include "_include/navbar.php" ?>
        <!-- Begin Page Content -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">TRANSKRIP NILAI</h6>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <table>
                    <tr>
                      <td width="200px;">
                        <p>NPM</p>
                        <p>Nama</p>
                        <p>Program Studi</p>
                        <p>Fakultas</p>
                      </td>

                      <td>
                        <?php

                        $npm = (isset($_GET["npm"])) ? $_GET["npm"] : 17081010048;
                        foreach ($db->show_target($npm) as $data_target) {
                          ?>
                      <td>
                        <p>: <?= $data_target['npm'] ?></p>
                        <p>: <?= $data_target['nama'] ?></p>
                        <p>: <?= $data_target['prodi'] ?></p>
                        <p>: <?= $data_target['fakultas'] ?></p>
                      </td>
                    <?php } ?>
                    </tr>
                  </table>

                  <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>NPM</th>
                          <th>Nama</th>
                          <th>Prodi</th>
                          <th>Mata Kuliah</th>
                          <th>Nilai</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $data_nilai = 0;
                        foreach ($db->show_matkul($npm) as $data_mhs) { ?>
                          <tr>
                            <td><?= $data_mhs['npm'] ?></td>
                            <td><?= $data_mhs['nama'] ?></td>
                            <td><?= $data_mhs['prodi'] ?></td>
                            <td><?= $data_mhs['nama_mk'] ?></td>
                            <td><?= $data_mhs['nilai'] ?></td>
                          </tr>

                        <?php
                          if ($data_mhs['nilai'] == 'A') {
                            $data_nilai = $data_nilai + 4;
                          } else if ($data_mhs['nilai'] == 'B') {
                            $data_nilai = $data_nilai + 3;
                          } else if ($data_mhs['nilai'] == 'C') {
                            $data_nilai = $data_nilai + 2;
                          } else if ($data_mhs['nilai'] == 'D') {
                            $data_nilai = $data_nilai + 1;
                          } else if ($data_mhs['nilai'] == 'E') {
                            $data_nilai = $data_nilai + 0;
                          }
                        }
                        $data_nilai = $data_nilai / 5; ?>
                        <p>IPK : <b><?= $data_nilai ?></b> </p>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
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
                      <th>Npm</th>
                      <th>Nama</th>
                      <th>Fakultas</th>
                      <th>Jurusan</th>
                      <th>Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($db->show() as $data) { ?>
                      <tr>
                        <td><?php echo $data['npm']; ?></td>
                        <td><?php echo $data['nama']; ?></td>
                        <td><?php echo $data['fakultas']; ?></td>
                        <td><?php echo $data['prodi']; ?></td>
                        <td>
                          <a href="?npm=<?php echo $data['npm']; ?>">show</a>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
        <!-- /.container-fluid -->
      </div>
      <!-- Footer -->
      <?php include "_include/footer.php" ?>
    </div>
  </div>

  <?php include "js/addjs.php" ?>
</body>

</html>