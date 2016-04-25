<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<h2>DAFTAR SEMUA PESAN BUKU TAMU</h2>
<?php
  include"../koneksi.php";
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
<table width="511" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <td width="31"><strong>No.</strong></td>
    <td width="97"><strong>Pengirim</strong></td>
    <td width="97"><strong>E-mail</strong></td>
    <td width="142"><strong>Pesan Lengkap</strong></td>
    <td width="97"><strong>Menu</strong></td>
  </tr>
  <?php
   include "../library/koneksi.php";
   $no =0;
   $tampil=mysql_query("select*from bukutamu order by id desc limit $posisi,$batas");
   while($data=mysql_fetch_array($tampil)){
   $no++;
  ?>
   
  <tr>
    <td><?php echo $no;?></td>
    <td><?php echo $data['nama']?></td>
	<td><?php echo $data['email']?></td>
    <td><?php echo $data['pesan']?></td>
	<td><div align="left"><a href="hapusbukutamu.php?id=<?php echo $data['id'];?>">Hapus</a> | <a href="?adminmodule=editbukutamu&id=<?php echo $data['id'];?>">Edit</a></div>	
	</tr>
	<?php } ?>  
</table>
<?php
  echo"<br>Halaman :";
$tampil2="select*from bukutamu";
$hasil2=mysql_query($tampil2);
$jmldata=mysql_num_rows($hasil2);
$jmlhalaman=ceil($jmldata/$batas);
for($i=1;$i<=$jmlhalaman;$i++)
if($i !=$halaman)
{
echo"<a href=?adminmodule=edittamu&halaman=$i>$i</a>|";
}
else
{
echo"<b>$i</b>|";
}
?>
</body>
</html>
