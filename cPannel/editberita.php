
<form action="?adminmodule=updateberita" method="post">
<?php
include"../library/koneksi.php";
$tampil=mysql_query("select*from berita where id='$_GET[id]'");
while($data=mysql_fetch_array($tampil))
{
?>
<table width="341" border="1">
  <tr>
    <th colspan="2" scope="col">Edit Berita </th>
  </tr>
  <tr>
    <td width="95">Judul</td>
    <td width="230"><input type="text" name="judul" value="<?php echo $data['judul']?>" />
	<input name="id" type="hidden" value="<?php echo $data['id']?>"/></td>
  </tr>
  <tr><td>Headline</td>
  <td><textarea name="headline"> <?php echo $data['headline']?> </textarea></td><tr>
    <td valign="top">Isi Berita </td>
    <td><textarea name="isi_berita" cols="30" rows="3"> <?php echo $data['isi_berita']?> </textarea></td>
  </tr>
  <tr><td>Pengirim</td>
  	<td><label>
  	  <input type="text" name="pengirim" value="<?php echo $data['pengirim']?>" />
  	</label></td>
  <tr>
    <td>Tanggal</td>
    <td><?php echo $data['tanggal']?></td>
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