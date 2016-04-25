<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Edit Produk</title>
</head>

<body>
<form action="?adminmodule=updateproduk" method="post">
<?php
$koneksi=mysql_connect("localhost","root","") or die("Gagal");
mysql_select_db("dbfajar")  or die("Gagal");
$tampil=mysql_query("select*from product where id='$_GET[id]'");
while($data=mysql_fetch_array($tampil))
{
?>
<table width="396" border="1" align="center">
  <tr>
    <th colspan="2" scope="col">Edit Produk</th>
  </tr><tr>
    <td width="134" valign="top">Nama Produk</td>
    <td width="246"><input type="text" name="judul_gambar" value="<?php echo $data['judul_gambar'];?>" /><input name="id" type="hidden" value="<?php echo $data['id']?>" /></td>
  </tr>
  <tr>
    <td>Kategori</td>
    <td><select name="kategori" id="select">
    	<option value="japan">Japan</option>
        <option value="thailand">Thailand</option>
        <option value="chinese">Chinese</option>
        <option value="beverages">Beverages</option>
        <option value="promo">Menu Bulan Ini</option></select>    </td>
  <tr>
    <td>Harga</td>
  	<td><label>
  	  <input type="text" name="harga_gambar" value="<?php echo $data['harga_gambar']?>" />
  	</label></td>
  <tr>
    <td>Nama File</td>
    <td><input type="text" name="nama_file" id="textfield" value="<?php echo $data['nama_file']?>"/></td>
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

