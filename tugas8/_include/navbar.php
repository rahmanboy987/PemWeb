<nav>
    <ul>
        <li><a href="<?= base_url() ?>">Home</a></li>
        <?php if ($_SESSION['admin'] == "0") { ?>
            <li><a href="#data_user">Data User</a></li>
        <?php } ?>
        <li><a href="#data_inv">Data Inventaris</a></li>
        <li><a href="<?= base_url() ?>/_auth/logout.php">Log Out</a></li>
    </ul>
</nav>