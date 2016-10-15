<?php 
$host = "";
$user ="";
$pass ="";
$db = "";
$con = mysql_connect($host,$user,$pass)or die('No se pudo conectar: ' . mysql_error());

mysql_select_db($db) or die('No se pudo seleccionar la base de datos');

 ?>