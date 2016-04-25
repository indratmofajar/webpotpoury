<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="?adminmodule=uploadproduk" method="post" enctype="multipart/form-data" name="FUpload" id="FUpload">
<table width="98%" border="0" cellspacing="1">
  <tr>
    <th colspan="2" scope="col">Input Produk</th>
  </tr>
  <tr>
    <td width="32%">Judul Gambar</td>
    <td width="68%"><input name="judul_gambar" type="text" id="judul_gambar" size="30" maxlength="30" /></td>
  </tr>
  <tr>
    <td>Kategori Gambar</td>
    <td><select name="kategori" id="select">
      <option value="Japan">Japan</option>
      <option value="Thailand">Thailand</option>
      <option value="Chinese">Chinese</option>
      <option value="Beverages">Beverages</option>
      <option value="Promo">Menu Bulan Ini</option>
    </select></td>
  </tr>
  <tr>
    <td>File Gambar</td>
    <td><input name="nama_file" type="file" id="nama_file" size="30" /></td>
  </tr>
  <tr>
    <td>Harga</td>
    <td><input type="text" name="harga_gambar" id="harga_gambar" /></td>
  </tr>
  <tr>
    <td><input type="submit" name="button" id="button" value="Simpan" /></td>
    <td>&nbsp;</td>
  </tr>
</table>
</form>
</body>
</html>
