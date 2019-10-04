<?php
include "config.php";
if (isset($_SESSION['user'])) {
    echo "<script>window.location='" . base_url() . "/dashboard.php';</script>";
} else {
    echo "<script>window.location='" . base_url() . "/login.php';</script>";
}
