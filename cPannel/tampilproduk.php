<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
.style2 {
	font-size: 24px;
	font-weight: bold;
}
</style>
</head>

<body>
<?php
  include"../koneksi.php";
  $batas=5;
  $halaman=isset($_GET['halaman'])?$_GET['halaman']:'';
  if(empty($halaman))
  {
	$posisi=0;
	$halaman=1;
  }
  else
  {
	$posisi=($halaman-1)*$batas;
  }
?>
<span class="style2">Data Produk</span>
<table width="91%" border="1" cellspacing="1">
  
  <tr>
    <td width="9%"><strong>No.</strong></td>
    <td width="30%"><strong>Nama Produk</strong></td>
    <td width="24%"><strong>Kategori</strong></td>
    <td width="17%"><strong>Harga</strong></td>
    <td colspan="2"><strong>Aksi</strong><strong></strong></td>
  </tr>
  <tr>
     <?php
       $no = 0;
       include "../library/koneksi.php";
       $tampil=mysql_query("select*from product order by id desc limit $posisi,$batas");
       while($data=mysql_fetch_array($tampil)){
       $no++
    ?>
    <td><?php echo $no;?></td>
    <td><?php echo $data['judul_gambar']?></td>
    <td><?php echo $data['kategori']?></td>
    <td><?php echo $data['harga_gambar']?></td>
    <td width="11%"><a href="?adminmodule=hapusproduk&id=<?php echo $data['id'];?>">Hapus</a><td width="9%"><a href="?adminmodule=editproduk&id=<?php echo $data['id'];?>">Edit</a></td>
  </tr>
<?php } ?>
</table>
<?php
  echo"<br>Halaman :";
$tampil2="select*from product";
$hasil2=mysql_query($tampil2);
$jmldata=mysql_num_rows($hasil2);
$jmlhalaman=ceil($jmldata/$batas);
for($i=1;$i<=$jmlhalaman;$i++)
if($i !=$halaman)
{
echo"<a href=?adminmodule=tampilproduk&halaman=$i>$i</a>|";
}
else
{
echo"<b>$i</b>|";
}
?>
</body>
</html>
