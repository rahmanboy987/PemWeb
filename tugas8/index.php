<?php
include "config.php";
if (isset($_SESSION['admin'])) {
    echo "<script>window.location='" . base_url() . "/dashboard.php';</script>";
} else {
    echo "<script>window.location='" . base_url() . "/login.php';</script>";
}
