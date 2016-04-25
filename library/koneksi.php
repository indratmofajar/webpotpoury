<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>koneksi</title>
</head>

<body>
<?
$my['host'] = "localhost";
$my['user'] = "root";
$my['pass'] = "";
$my['dbs'] = "dbfajar";

$koneksi = mysql_connect($my ['host'],$my ['user'],$my ['pass']);
if (! $koneksi) {
	echo "Koneksi gagal";
	mysql_error();
	}
mysql_select_db($my ['dbs'])
	or die ("Database tidak ada".mysql_error());
?>
</body>
</html>
