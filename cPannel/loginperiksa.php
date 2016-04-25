<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
include "koneksi.php";
$user = $_POST['user'];
$passwd = $_POST['passwd'];
if (trim($user) == "") {
	echo "<b>User ID</b> belum diisi, tolong diisi";
	include "login.php";
}
else if (strlen(trim($passwd)) <= 2 ) {
	echo "<b>Password</b> minimal 3 digit, tolong diperbaiki";
	include "login.php";
}
else {
	$sqlPeriksa = "SELECT * FROM admin WHERE userID='$user'
	AND passID ='$passwd'";
	$qryPeriksa = mysql_query($sqlPeriksa);
	$hslPeriksa = mysql_num_rows($qryPeriksa);
	if ($hslPeriksa >= 1) {
		$SES_ADMIN = $user;
		isset($_SESSION["SES_ADMIN"])?$_SESSION["SES_ADMIN"]:'';
		echo "Berhasil Melakukan LOGIN";
		echo "<meta http-equiv='refresh' content='0; url=template.php'>";
		exit;
		}
	else {
		echo "<b>LOGIN dan PASSWORD</b> tidak dikenali";
		include "login.php";
		}
	}
?>
</body>
</html>
