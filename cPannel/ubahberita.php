
<strong>DATA BERITA</strong>
<?php
  include"../koneksi.php";
  $batas=10;
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
<table width="520" border="1">
  <tr>
    <th width="30" scope="col">No</th>
    <th width="218" scope="col">Judul</th>
	<th width="134" scope="col">Pengirim</th>
	<th width="110" scope="col">Aksi</th>
  </tr>
  <?php
   include"../koneksi.php";
   $no =0;
   $tampil=mysql_query("select*from  berita order by id desc limit $posisi,$batas");
   while($data=mysql_fetch_array($tampil)){
   $no++;
  ?>
   
  <tr>
    <td><?php echo $no;?></td>
    <td><?php echo $data['judul']?></td>
	<td><?php echo $data['pengirim']?></td>
	<td><div align="center"><a href="?adminmodule=ubahberita&id=<?php echo $data['id'];?>">Edit</a>  |  <a href="hapusberita.php?id=<?php echo $data['id'];?>">Hapus</a>
      </div>	</tr>
	<?php } ?>  
</table>
<?php
  echo"<br>Halaman :";
$tampil2="select*from berita";
$hasil2=mysql_query($tampil2);
$jmldata=mysql_num_rows($hasil2);
$jmlhalaman=ceil($jmldata/$batas);
for($i=1;$i<=$jmlhalaman;$i++)
if($i !=$halaman)
{
echo"<a href=?adminmodule=editberita&halaman=$i>$i</a>|";
}
else
{
echo"<b>$i</b>|";
}
?>