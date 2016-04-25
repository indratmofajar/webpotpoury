<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
<table width="83%" border="0" cellspacing="1">
  <tr>
    <th scope="col"><div align="left">Comments</div></th>
  </tr>
  <tr>
    <th scope="col">&nbsp;</th>
  </tr>
  <tr>
<?php
include "koneksi.php";
$tampil=mysql_query("select*from bukutamu where status='Y' order by id desc limit $posisi,$batas");
while($data=mysql_fetch_array($tampil)){
?>
<td>Comment : <?php echo $data['pesan']?><br />by <?php echo $data['nama']?> on <?php echo $data['tanggal']?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <?php } ?>
</table>
<?php
  echo"<br>Prev :";
$tampil2="select*from bukutamu";
$hasil2=mysql_query($tampil2);
$jmldata=mysql_num_rows($hasil2);
$jmlhalaman=ceil($jmldata/$batas);
for($i=1;$i<=$jmlhalaman;$i++)
if($i !=$halaman)
{
echo"<a href=?module=komentar&halaman=$i>$i</a>|";
}
else
{
echo"<b>$i</b>|";
}
?>
<br /><a href="?module=bukutamu"><< Back</a>
</body>
</html>
