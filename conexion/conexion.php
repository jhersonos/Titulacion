<?php 
$host = "127.0.0.1";
$user ="root";
$pass ="kkan12345678";
$db = "asistenciadb";
$con = mysqli_connect($host,$user,$pass,$db)or die('No se pudo conectar: ' . mysqli_error());

// mysql_select_db($db) or die('No se pudo seleccionar la base de datos');

	mysqli_query($con,"set names 'utf8'");
	ini_set('display_errors','On');
	date_default_timezone_set("America/Lima");

 ?>