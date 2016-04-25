<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Input Berita</title>
</head>

<body>
<form action="?adminmodule=uploadberita" method="post" enctype="multipart/form-data" name="FUpload" id="FUpload">
  <table width="458" border="1">
    <tr>
      <th colspan="2" scope="col">Input Berita</th>
    </tr>
    <tr>
      <td width="163">Judul</td>
      <td width="279"><input type="text" name="judul" id "judul" value="" /></td>
    </tr>
    <tr>
		<td>Headline</td>
		<td><label>
		<textarea name="headline"></textarea>
		</label></td></tr>
		<tr>
      <td>Isi Berita </td>
      <td><textarea name="isi_berita" cols="30" rows="3" id="isi_berita"></textarea></td>
    </tr>
		<tr>
		  <td>Gambar</td>
		  <td><input name="nama_file" type="file" id="nama_file" size="30" /></td>
    </tr>
    <tr>
		<td>Pengirim</td>
		<td><input name="pengirim" type="text" /></td>
		</tr>
	<tr>
      <td colspan="2"><div align="center">
        <input name="simpan" type="submit" value="Simpan" />
        <input name="batal" type="reset" id="batal" value="Batal" />
      </div></td>
    </tr>
  </table>
</form>
<a href="?adminmodule=beritatampil">lihat data berita</a></body>
</html>
