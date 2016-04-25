<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include "koneksi.php";
if(isset($_GET["adminmodule"])){
	
	if ($_GET["adminmodule"]=='inputproduk'){
		include "inputproduk.php";
		}
	else if ($_GET["adminmodule"]=='editproduk'){
		include "editproduk.php";
		}
	else if($_GET["adminmodule"]=='uploadproduk'){
		include "uploadproduk.php";
		}
	else if ($_GET["adminmodule"]=='updatebukutamu'){
		include "updatebukutamu.php";
		}
	else if ($_GET["adminmodule"]=='updateproduk'){
		include "updateproduk.php";
		}
	else if ($_GET["adminmodule"]=='editbukutamu'){
		include "editbukutamu.php";
		}
	else if($_GET["adminmodule"]=='inputpolling'){
		include "inputpolling.php";
		}
	else if($_GET["adminmodule"]=='editpolling'){
		include "editpolling.php";
		}
	else if($_GET["adminmodule"]=='inputberita'){
		include "inputberita.php";
		}
	else if($_GET["adminmodule"]=='uploadberita'){
		include "uploadberita.php";
		}
	else if($_GET["adminmodule"]=='updateberita'){
		include "updateberita.php";
		}
	else if($_GET["adminmodule"]=='beritatampil'){
		include "beritatampil.php";
		}
	else if($_GET["adminmodule"]=='editberita'){
		include "ubahberita.php";
		}
	else if($_GET["adminmodule"]=='editpass'){
		include "adminedit.php";
		}
	else if($_GET["adminmodule"]=='ubahpolling'){
		include "ubahpolling.php";
		}
	else if($_GET["adminmodule"]=='admineditsim'){
		include "admineditsim.php";
		}
	else if($_GET["adminmodule"]=='tampilproduk'){
		include "tampilproduk.php";
		}
	else if($_GET["adminmodule"]=='hapusproduk'){
		include "hapusproduk.php";
		}
	else if($_GET["adminmodule"]=='edittamu'){
		include "tampilbukutamu.php";
		}
	else if($_GET["adminmodule"]=='updatepolling'){
		include "updatepolling.php";
		}
	else if($_GET["adminmodule"]=='simpanpolling'){
		include "simpanpolling.php";
		}
	else if($_GET["adminmodule"]=='ubahberita'){
		include "editberita.php";
		}	
	else {
		echo "Silahkan Pilih Menu Disamping!";
		}
}
?>
</body>
</html>
