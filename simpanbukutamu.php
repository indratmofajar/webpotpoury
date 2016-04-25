<?php
include "koneksi.php";
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];
$status = isset($_POST['status'])?$_POST['status']:'';
$tanggal= date('Y-m-d');
if (trim($nama) == "") {
	echo"<script>alert('Nama Belum di isi, tolong di isi!!')</script>";
	echo"<meta http-equiv='refresh' content='0;url=index.php?module=bukutamu'>";
}
else if (trim($email) == "") {
	echo"<script>alert('E-mail Belum di isi, tolong di isi!!')</script>";
	echo"<meta http-equiv='refresh' content='0;url=index.php?module=bukutamu'>";
}
else if (trim($pesan) == "") {
	echo"<script>alert('Komentar Belum di isi, tolong di isi!!')</script>";
	echo"<meta http-equiv='refresh' content='0;url=index.php?module=bukutamu'>";
}
else {
	$simpan = "INSERT INTO bukutamu SET
				nama='$nama',
				email='$email',
				pesan='$pesan',
				tanggal='$tanggal',
				status='$status'";
mysql_query($simpan) or die ("data gagal disimpan".mysql_error());
echo"<script>alert('Data komentar berhasil disimpan')</script>";
echo"<meta http-equiv='refresh' content='0;url=index.php?module=komentar'>";
}
?>