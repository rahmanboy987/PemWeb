<?php
class database
{
    var $host = "localhost";
    var $uname = "root";
    var $pass = "";
    var $db = "akademik";

    function __construct()
    {
        $this->con = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
        if (mysqli_connect_errno()) {
            echo mysqli_connect_error();
        }
    }

    function show()
    {
        $sql_mahasiswa = mysqli_query($this->con, "SELECT * FROM mahasiswa");
        while ($mahasiswa = mysqli_fetch_array($sql_mahasiswa)) {
            $hasil[] = $mahasiswa;
        }
        return $hasil;
    }

    function show_target($npm)
    {
        $sql_mahasiswa = mysqli_query($this->con, "SELECT * FROM mahasiswa WHERE npm = $npm");
        while ($mahasiswa = mysqli_fetch_array($sql_mahasiswa)) {
            $hasil[] = $mahasiswa;
        }
        return $hasil;
    }
    function show_matkul($npm)
    {
        $sql_mahasiswa = mysqli_query($this->con, "SELECT mahasiswa.npm, mahasiswa.nama, mahasiswa.prodi, mata_kuliah.nama_mk, nilai.nilai FROM mahasiswa, mata_kuliah, nilai WHERE mahasiswa.npm=nilai.npm AND mata_kuliah.kode_mk=nilai.kode_mk AND mahasiswa.npm='$npm'");
        while ($mahasiswa = mysqli_fetch_array($sql_mahasiswa)) {
            $hasil[] = $mahasiswa;
        }
        return $hasil;
    }
    function base_url($url = null)
    {
        $base_url = "http://localhost/pemweb/tugas7";
        if ($url != null) {
            return $base_url . "/" . $url;
        } else {
            return $base_url;
        }
    }
}
