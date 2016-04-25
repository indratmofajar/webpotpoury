<table width="85%" border="0">
   <?
   include "../library/koneksi.php";
   $tampil=mysql_query("select*from  berita");
   while($data=mysql_fetch_array($tampil)){
  $no++
  ?>
  <tr>
  <td>Info Terkini</td>
  </tr>
  <tr>
    <td><? echo $data['judul']?></td>
  </tr>
  <tr>
    <td>Posting tanggal :<? echo $data['tanggal']?></td>
  </tr>
  <tr>
    <td><? echo $data['isi_berita']?></td>
  </tr>
<? } ?>
</table>