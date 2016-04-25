<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Tampil Berita</title>
</head>

<body>
<h2>SEMUA DATA BERITA</h2>
<table width="688" border="1">
  <tr>
    <th width="34" scope="col">No</th>
    <th width="95" scope="col">Judul</th>
    <th width="95" scope="col">headline</th>
	<th width="409" scope="col">Isi berita</th>
    <th width="95" scope="col">Pengirim</th>
	<th width="95" scope="col">Tanggal</th>
  </tr>
  <?
   include "../library/koneksi.php";
   $tampil=mysql_query("select*from  berita");
   while($data=mysql_fetch_array($tampil)){
  $no++
  ?>
  <tr>
    <td><? echo $no;?></td>
    <td><? echo $data['judul']?></td>
	<td><? echo $data['headline']?></td>
    <td><? echo $data['isi_berita']?></td>
	<td><? echo $data['pengirim']?></td>
	<td><? echo $data['tanggal']?></td>
	</tr>
	<? } ?>  
</table>

</body>
</html>
