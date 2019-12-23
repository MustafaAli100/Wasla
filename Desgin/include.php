<?php


// include "connect.php";

$css= "template/";
$js= "template/";
$lang= "lang/";
$menu="template/";

include  $lang."English.php";

include $css."head.php";




if (!isset($nomenu)) {

	include $menu."menu.php";
	# code...
}


?>