<?php
session_start();
isset($_SESSION["SES_ADMIN"])?$_SESSION["SES_ADMIN"]:'';
echo "<meta http-equiv='refresh' content='0; url=index.php'>";
exit;
?>