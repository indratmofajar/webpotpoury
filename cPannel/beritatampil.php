
<?php
$limit=3;
$start=isset($_GET['start'])?$_GET['start']:'';
if (empty($start)){
	$posisi=0;
	$start=1;
}
else {
	$posisi=($start-1)*$limit;
}
?>
<?php
   include "koneksi.php";
   $tampil= mysql_query("select * from berita order by id desc limit $posisi, $limit") or die("Gagal :".mysql_error());
   
   echo '<table width="400" align="left" border="0">';   
   while ($rec=mysql_fetch_object($tampil))  {      
     echo '<tr>';
	 echo '<td>'.$rec->judul.'</td>'; 
	 echo '</tr>';
	 echo '<tr>';
	 echo '<td>'.$rec->tanggal.'</td>'; 
	 echo '</tr>';
	 echo '<tr>';     
     echo '<td>';
	 echo '<img src="'.$rec->nama_file.'" alt="'.$rec->nama_file.'" width="100" />';
     echo '</td>';
	 echo '</tr>';
	 echo '<tr>';
	 echo '<td>'.$rec->headline.'</td>'; 
	 echo '</tr>';
	 echo '<tr>';
	 echo '<td>'.$rec->pengirim.'</td>';     
     echo '</tr>';  
   } 
   echo '</table>';
   mysql_close();//tutup koneksi database    
?>
<a href="?adminmodule=inputberita">Kembali</a>