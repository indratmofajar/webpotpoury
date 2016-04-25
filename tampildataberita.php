<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
  // include"../koneksi.php";
  $batas=1;
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
<table width="101%" border="0">
  <tr>
    <td colspan="2"><div align="center"><img src="images/pourry.jpg" width="334" height="145" /></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
  <td width="88%"><strong>What's New in Potpourri Restaurant</strong></td>
  <td width="12%">&nbsp;</td>
  </tr>
<?php
include "koneksi.php";
$tampil=mysql_query("select*from berita order by id desc limit $posisi,$batas");
while($data=mysql_fetch_array($tampil)){
?>
  <tr>
    <td><strong><?php echo $data['judul']?></strong></td>
    <td rowspan="6"><?php echo '<img src="'.$data['nama_file'].'" width="100" />';?></td>
  </tr>
  
  <tr>
    <td>Posting date :<?php echo $data['tanggal']?></td>
  </tr>
  <tr>
    <td><?php echo $data['headline']?> ....<a href="?module=lengkap&id=<?php echo $data['id'];?>">Read more</a></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  
<?php } ?>
</table>
<?php
  echo"<br>Prev :";
$tampil2="select*from berita";
$hasil2=mysql_query($tampil2);
$jmldata=mysql_num_rows($hasil2);
$jmlhalaman=ceil($jmldata/$batas);
for($i=1;$i<=$jmlhalaman;$i++)
if($i !=$halaman)
{
echo"<a href=?module=home&halaman=$i>$i</a>|";
}
else
{
echo"<b>$i</b>|";
}
?>
</body>
</html>
