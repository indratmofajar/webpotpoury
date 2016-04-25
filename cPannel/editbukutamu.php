<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Edit Buku Tamu</title>
</head>

<body>
<form action="?adminmodule=updatebukutamu" method="post">
<?php
include"../library/koneksi.php";
$tampil=mysql_query("select * from bukutamu where id='$_GET[id]'");
while($data=mysql_fetch_array($tampil))
{
?>
<table width="341" border="1">
  <tr>
    <th colspan="2" scope="col">Edit Buku Tamu</th>
  </tr>
  <tr>
    <td width="95">Nama</td>
    <td width="230"><input type="text" name="nama" value="<?php echo $data['nama']?>" />
      <input type="hidden" name="id" id="hiddenField" value="<?php echo $data['id']?>"/></td>
  </tr>
  <tr>
  <td>E-mail</td>
  <td><input type="text" name="email" id="textfield" value="<?php echo $data['email']?>" /></td>
  <tr>
    <td valign="top">Pesan</td>
    <td><textarea name="pesan" cols="30" rows="3"> <?php echo $data['pesan']?> </textarea></td>
  </tr>
  <tr>
  	<td>Tanggal</td>
  	<td>
  	  <input type="text" name="tanggal" value="<?php echo $data['tanggal']?>" />  	</td>
  <tr>
    <td>Status</td>
    <td><select name="status">
    <option value="Y">Aktif</option>
    <option value="N">Nonaktif</option></select></td>
  <tr>
    <td colspan="2">
	<div align="center">
      <input type="submit" name="simpan" value="Update" />
      <input type="reset" name="batal" value="Batal" />
    </div></td>
  </tr>
</table>
<?php } ?>
</form>
</body>
</html>
