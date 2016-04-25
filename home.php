<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$limit=3;
$start=$_GET['start'];
if (empty($start)){
	$posisi=0;
	$start=1;
}
else {
	$posisi=($start-1)*$limit;}
?>
<table width="100%" border="0" cellspacing="1">
  <tr>
    <th colspan="2" scope="col">Menu Promo bulan ini</th>
  </tr>
  <?php
   include "koneksi.php";
   $tampil=mysql_query("select*from berita order by id desc limit $posisi,$limit");
   while($rec=mysql_fetch_array($tampil)){
  $no++
  ?>
  <tr>
    <td colspan="2"><div align="center"><img src="images/pourry.jpg" width="317" height="134" /></div></td>
  </tr>
  <tr>
    <td width="82%"><?php echo $rec['judul']?></td>
    <td width="18%" rowspan="3"><?php echo '<img src="'.$rec->nama_file.'" width="100" />';?></td>
  </tr>
  <tr>
    <td>Mulai Promo pada tanggal <?php echo $rec['tanggal']?></td>
  </tr>
  <tr>
    <td><?php echo $rec['headline']?></td>
  </tr>
  <?php } ?>
</table>
</body>
</html>
