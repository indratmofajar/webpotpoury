<?php
$koneksi=mysql_connect("localhost","root","") or die("Gagal");
mysql_select_db("dbfajar")  or die("Gagal");
if (trim($_GET['id']) =="") {
	echo "Tidak ada materi yang dihapus";
	}
else {
	$hapus="delete from bukutamu where id='$_GET[id]'";
	mysql_query($hapus, $koneksi) or die ("Gagal Perintah SQL".mysql_error());
	echo"<script>alert('Data Tamu berhasil dihapus!!')</script>";
	include "tampilbukutamu.php";
}
	
?>