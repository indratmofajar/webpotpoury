<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$folder="cpannel/images/"; //tempat menyimpan file
$koneksi=mysql_connect("localhost","root","") or die("Gagal");
mysql_select_db("dbfajar")  or die("Gagal");
if (!empty($_FILES["nama_file"]["tmp_name"]))
{
    $tanggal= date('Y-m-d');
	$jenis_gambar=$_FILES['nama_file']['type'];
   	$judul=$_POST['judul'];
	$headline=$_POST['headline'];
	$isi_berita=$_POST['isi_berita'];
	$pengirim=$_POST['pengirim'];
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png")
    {           
        $gambar = $folder . basename($_FILES['nama_file']['name']);     
        if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)) {
            echo "Gambar berhasil dikirim ".$gambar;
            $tanggal= date('Y-m-d');
			$simpan="insert into berita(judul,headline,isi_berita,pengirim,tanggal,nama_file)
			values('$judul','$headline','$isi_berita','$pengirim','$tanggal','$gambar')";
			mysql_query($simpan);
        } else {
           echo "Gambar gagal dikirim";
        }
   } else {
        echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
   }
} else {
    echo "Anda belum memilih gambar";
}
?>
<br /><a href="?adminmodule=inputberita">input lagi?<br></a><a href="?adminmodule=beritatampil">tampil berita</a>
</body>
</html>
