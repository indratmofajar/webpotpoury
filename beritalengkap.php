<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title></head>

<body>
<table width="99%" border="0">
  <tr>
  <td width="87%"><strong>Complete News</strong></td>
  </tr>
  <tr>
    <?php
   include "koneksi.php";
   $tampil=mysql_query("select*from berita where id=".$_GET['id']."");
   $data=mysql_fetch_array($tampil);
  ?>
  <td><strong><?php echo $data['judul']?>
      <input type="hidden" name="id" id="hiddenField" value="<?php echo $data['id']?>"/>
    </strong></td>
  </tr>
  
  <tr>
    <td>Posting date :<?php echo $data['tanggal']?></td>
  </tr>
  <tr>
    <td><?php echo $data['isi_berita']?></td>
  </tr>
  <tr>
    <td><div align="center"><?php echo '<img src="'.$data['nama_file'].'" width="300"/>';?></div></td>
  </tr>
  <tr>
    <td><a href="?module=home">Back</a></td>
  </tr>
</table>
</body>
</html>
