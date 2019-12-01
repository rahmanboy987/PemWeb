<?php
include "../config.php";

unset($_SESSION['admin']);
echo "<script>window.location='" . base_url() . "';</script>";
