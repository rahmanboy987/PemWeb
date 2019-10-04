<?php
include "../config.php";

unset($_SESSION['user']);
echo "<script>window.location='" . base_url() . "';</script>";
