<?php 
$host = "localhost";
$user ="root";
$pass ="kkan12345678";
$db = "asistenciadb";
$con = mysql_connect($host,$user,$pass)or die('No se pudo conectar: ' . mysql_error());

mysql_select_db($db) or die('No se pudo seleccionar la base de datos');

	mysql_query("set names 'utf8'");
	ini_set('display_errors','On');
	date_default_timezone_set("America/Lima");

 ?>