<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Update Buku Tamu</title>
</head>

<body>
<?php
$koneksi=mysql_connect("localhost","root","") or die("Gagal");
mysql_select_db("dbfajar")  or die("Gagal");
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];
$tanggal = $_POST['tanggal'];
$status =$_POST['status'];

$sqlSimpan = "UPDATE bukutamu SET
				nama='$nama',
				email='$email',
				pesan='$pesan',
				tanggal='$tanggal',
				status='$status' where id='$id'";
mysql_query($sqlSimpan, $koneksi) or die ("Gagal Perintah SQL".mysql_error());
echo"<script>alert('Data berhasil disimpan!!')</script>";
// echo"<meta http-equiv='refresh' content='0;url=index.php?adminmodule=edittamu'>";
?></body>
</html>
