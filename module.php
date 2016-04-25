<?php
include "koneksi.php";
if (isset($_GET["module"])){
	if($_GET["module"]=='home'){
		include "tampildataberita.php";
	}
	else if($_GET["module"]=='product'){
		include "product.php";
	}
	else if($_GET["module"]=='japan'){
		include "japan.php";
	}
	else if($_GET["module"]=='thailand'){
		include "thailand.php";
	}
	else if($_GET["module"]=='chinese'){
		include "chinese.php";
	}
	else if($_GET["module"]=='beverages'){
		include "beverages.php";
	}
	else if($_GET["module"]=='promo'){
		include "promo.php";
	}
	else if($_GET["module"]=='about'){
		include "aboutus.php";
	}
	else if($_GET["module"]=='contact'){
		include "contact.php";
	}
	else if($_GET["module"]=='bukutamu'){
		include "bukutamu.php";
	}
	else if($_GET["module"]=='komentar'){
		include "tampilkomentar.php";
	}
	else if($_GET["module"]=='galleri'){
		include "galleri.php";
	}
	else if($_GET["module"]=='lengkap'){
		include "beritalengkap.php";
	}
	/*else 
	{
		include "tampildataberita.php";
	}*/
}else{
	include "tampildataberita.php";
}
?>