<?php 
include("heasy_mysql.php");

$obj = $_POST;

switch ($obj['action']) {
	case 'todos_los_datos':
		$r = query("SELECT * FROM estudiante");
		res($r);
		break;

	case '':
		break;
}

?>