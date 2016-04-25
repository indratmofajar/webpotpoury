<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {font-size: large}
-->
</style>
</head>

<body>
<?php
  $batas=4;
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
<table width="103%" border="0" cellspacing="1">
  <tr>
    <th colspan="7" scope="col" align="left"><div align="center" class="style1">Thailand Food</div></th>
  </tr>
  
  <tr bgcolor="#990000">
    <td width="20%"><strong>IMAGE</strong></td>
    <td width="2%">&nbsp;</td>
    <td width="44%"><strong>MENU</strong></td>
    <td width="2%">&nbsp;</td>
    <td width="32%"><strong>PRICE</strong></td>
  </tr>
  
  <tr>
  <?php
   include "koneksi.php";
   $tampil = mysql_query("select * from product where kategori='thailand'order by id desc limit $posisi,$batas") or die("Gagal :".mysql_error());
   while($data=mysql_fetch_array($tampil)){
   ?>   
   	<td><?php echo '<img src="'.$data['nama_file'].'" width="95" alt="'.$data['judul_gambar'].'" title="'.$data['judul_gambar'].'" />';?></td>
    <td>&nbsp;</td>
    <td><?php echo $data['judul_gambar']?></td>
    <td>&nbsp;</td>
    <td><?php echo $data['harga_gambar']?></td>
  </tr>
  <?php } ?>
</table>
<?php
  echo"<br>Prev :";
$tampil2="select*from product where kategori='thailand'";
$hasil2=mysql_query($tampil2);
$jmldata=mysql_num_rows($hasil2);
$jmlhalaman=ceil($jmldata/$batas);
for($i=1;$i<=$jmlhalaman;$i++)
if($i !=$halaman)
{
echo"<a href=?module=thailand&halaman=$i>$i</a>|";
}
else
{
echo"<b>$i</b>|";
}
?>
</body>
</html>
