
<?php
$koneksi=mysql_connect("localhost","root","") or die("Gagal");
mysql_select_db("dbfajar")  or die("Gagal");
$passwdlama = $_POST['passwdlama'];
$passwdbaru = $_POST['passwdbaru'];
$ulang = $_POST['ulang'];

if (trim($passwdlama) == "") {
	echo "<b>Password Lama</b> belum diisi, tolong diisi";
	include "adminedit.php";
}
else if (strlen(trim($passwdbaru)) <= 2) {
	echo "<b>Password Baru</b> minimal 2 digit, tolong diperbaiki";
	include "adminedit.php";
}
else if (trim($passwdbaru) !=
trim($ulang)) {
	echo "<b>Password Baru</b> dan <b> Ketik Ulang</b> harus sama";
	include "adminedit.php";
}
else {
$sqlPeriksa = "select * from admin where userID='admin'
AND passID = '$passwdlama'";
$qryPeriksa = mysql_query($sqlPeriksa, $koneksi);
$hslPeriksa = mysql_num_rows($qryPeriksa);

if ($hslPeriksa >= 1 ) {
	$sqlUbah = "update admin set passID ='$passwdbaru' where userID ='admin'";
	mysql_query($sqlUbah, $koneksi)
	or die ("Gagal Perintah SQL".mysql_error());
	echo "Mengubah Password Dengan Yang Baru Berhasil";
	}
else {
	echo "<b>Password Lama</b> Tidak sesuai dengan DATABASE";
	include "adminedit.php";
	}
}
?>