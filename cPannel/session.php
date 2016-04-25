<?php
session_start();
if (!(isset($_SESSION['SES_ADMIN'])?$_SESSION['SES_ADMIN']:'')) {
echo "<div align=center><b> PERHATIAN!! </b><br>";
echo "UNTUK MENGAKSES Cpanel, kamu harus LOGIN dulu</div>";
include "login.php";
exit;
}
?>