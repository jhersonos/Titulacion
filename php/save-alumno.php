<?php 
include('../conexion/conexion.php');
	
	$nombre 		= $_POST['nombre'];		//nombre alumno
	$apellido 		= $_POST['apellido'];		//apellido alumno
	$apellido 		= $_POST['f_ini'];		//Fecha inicio
	$dni 			= $_POST['dni-alumno'];		//dni alumno
	$carrera 		= $_POST['carrera'];		//carrera alumno
	$inicio_carrera = $_POST['start-carrera'];	//inicio de la carrera
	$autogenerate = $_POST['cod'];
	if (isset($autogenerate)) {					// valida si el check de codigo autogenerado esta marcado
		$codigo_barra 	= substr($nombre, 2); 	// crear codigo de barra
	}else{
		$codigo_barra	= $_POST['codigo'];		//codigo de barra manual
	}

	$hoy = date("Ymd");							//obtener fecha actual

	//armar consulta de insercion a la base de datos - tabla : alumnos
	$sql = "insert into alumno(nombre,apellidos,f_inicio,carrera,codigo,estado,fecha) values ('$nombre','$apellido','$inicio_carrera','$carrera','$codigo_barra','1','$hoy')"; 

	//ejecucion de la consulta
	$result = mysql_query($sql,$con);

	//debugear resultado - consulta mysql
	//echo $sql;
 ?>
