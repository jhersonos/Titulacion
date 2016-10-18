<?php 
include('../conexion/conexion.php');
	
	$nombre 		= $_POST['first-name'];		//nombre alumno
	$apellido 		= $_POST['last-name'];		//apellido alumno
	$dni 			= $_POST['dni-alumno'];		//dni alumno
	$carrera 		= $_POST['carrera'];		//carrera alumno
	$inicio_carrera = $_POST['start-carrera'];	//inicio de la carrera
	//$codigocarrera  = $_POST['codigo-carrera'];	//codigo carrera <-> aun por ver
	$codigo_barra	= $_POST['codigo'];			//codigo de barra
	$hoy = date("Ymd");							//obtener fecha actual

	//armar consulta de insercion a la base de datos - tabla : alumnos
	$sql = "insert into alumno(nombre,apellidos,f_inicio,carrera,codigo,estado,fecha) values ('$nombre','$apellido','$inicio_carrera','$carrera','$codigo_barra','1','$hoy')"; 

	//ejecucion de la consulta
	$result = mysql_query($sql,$con);

	//debugear resultado - consulta mysql
	//echo $sql;
 ?>
