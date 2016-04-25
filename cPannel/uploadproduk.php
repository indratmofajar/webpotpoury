<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$namafolder="cpannel/images/"; //tempat menyimpan file
$koneksi=mysql_connect("localhost","root","") or die("Gagal");
mysql_select_db("dbfajar")  or die("Gagal");
if (!empty($_FILES["nama_file"]["tmp_name"]))
{
    $jenis_gambar=$_FILES['nama_file']['type'];
    $judul_gambar=$_POST['judul_gambar'];
	$harga_gambar=$_POST['harga_gambar'];
	$kategori=$_POST['kategori'];
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png" || $jenis_gambar=="image/png")
    {           
        $gambar = $namafolder . basename($_FILES['nama_file']['name']);
        // print_r($gambar);exit;       
        if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)) {
            $simpan="insert into product (judul_gambar,harga_gambar,kategori,nama_file) values ('$judul_gambar','$harga_gambar','$kategori','$gambar')";
            mysql_query($simpan);
            echo"<script>alert('Gambar berhasil disimpan')</script> ";
            // echo"<meta http-equiv='refresh' content='0;url=index.php?adminmodule=inputproduk'>";
        } else {
           echo"<script>alert('Gambar gagal dikirim')</script>";
        }
   } else {
        echo"<script>alert('Jenis gambar yang anda kirim salah. Harus .jpg .gif .png')</script>";
   }
} else {
    echo"<script>alert('Anda belum memilih gambar!!')</script>";
}
?>
</body>
</html>
