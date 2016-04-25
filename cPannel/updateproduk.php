<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Update Produk</title>
</head>

<body>
<?php
$koneksi=mysql_connect("localhost","root","") or die("Gagal");
mysql_select_db("dbfajar")  or die("Gagal");
$id = $_POST['id'];
$nama_produk = $_POST['judul_gambar'];
$kategori = $_POST['kategori'];
$harga_gambar =$_POST['harga_gambar'];
$nama_file =$_POST['nama_file'];
// print_r($nama_file);exit;

$sqlSimpan = "UPDATE product SET
				judul_gambar='$nama_produk',
				harga_gambar='$harga_gambar',
				kategori='$kategori',
				nama_file='$nama_file' where id='$id'";
mysql_query($sqlSimpan, $koneksi) or die ("Gagal Perintah SQL".mysql_error());
 echo"<script>alert('Data berhasil disimpan!!')</script>";
?>

</body>
</html>