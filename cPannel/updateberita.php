<?php
$koneksi=mysql_connect("localhost","root","") or die("Gagal");
mysql_select_db("dbfajar")  or die("Gagal");
$id = $_POST['id'];
$judul = $_POST['judul'];
$headline = $_POST['headline'];
$isi_berita = $_POST['isi_berita'];
$pengirim = $_POST['pengirim'];

$tanggal = date('Y-m-d');
$sqlSimpan = "UPDATE berita SET
				judul='$judul',
				headline='$headline',
				isi_berita='$isi_berita',
				pengirim='$pengirim',
				tanggal='$tanggal' where id='$id'";
mysql_query($sqlSimpan, $koneksi) or die ("Gagal Perintah SQL".mysql_error());
 echo"<script>alert('Data berhasil disimpan!!')</script>";
// echo"<meta http-equiv='refresh' content='0;url=index.php?adminmodule=editberita'>";
?>