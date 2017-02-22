<?php 
	include('../conexion/conexion.php');
	$idalu = "";
	$code = "";
	$carrera = "";
	$hoy = date('Ymd');
	$localtime = date("H:i:s");

	if(isset($_POST['idalu'])){ $idalu=$_POST['idalu'];}
	if(isset($_POST['code'])){ $code=$_POST['code'];}
	if(isset($_POST['carrera'])){ $carrera=$_POST['carrera'];}

	$sql = "insert into asistencia(idalumno,codigo_alumno,carrera,hora_entrada,estado,fecha) values('$idalu','$code','$carrera','$localtime','$on','$hoy')";

	mysqli_query($con,$sql) or die('La consulta fall&oacute;: ' . mysql_error());
	
 ?>