<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Hapus Berita</title>
</head>

<body>
<?php
$koneksi=mysql_connect("localhost","root","") or die("Gagal");
mysql_select_db("dbfajar")  or die("Gagal");
if (trim($_GET['id']) =="") {
	echo "Tidak ada materi yang dihapus";
	}
else {
	$hapus="delete from berita where id='$_GET[id]'";
	mysql_query($hapus, $koneksi) or die ("Gagal Perintah SQL".mysql_error());
	echo"<script>alert('Data Berita berhasil dihapus!!')</script>";
	echo"<meta http-equiv='refresh' content='0;url=index.php?adminmodule=editberita'>";
}
	
?>
</body>
</html>
