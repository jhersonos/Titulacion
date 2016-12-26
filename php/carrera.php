<?php 
	include('../conexion/conexion.php');

	$carrera=$_POST['name-carrera'];
	$cod=$_POST['cod-carrera'];
	$hoy = date("Ymd");

	$sql = "insert into carrera(name_carrera,codigo_carrera,estado,fecha) values ('$carrera','$cod','1','$hoy')";

	$result = mysqli_query($con,$sql);
 ?>