<?php 
include('../conexion/conexion.php');
	
	$nombre 		= $_POST['nombre'];			//nombre alumno
	$apellido 		= $_POST['apellido'];		//apellido alumno
	$idcarrera 		= $_POST['alu-carrera'];	//carrera alumno
	$inicio_carrera = $_POST['f_ini'];			//inicio de la carrera
	$codigo 		= $_POST['cod'];			//codigo de barra
	$dni			= $_POST['dni'];			//get dni		
	// $auto = $_POST['auto-cod']; 				// Verificar codigo automatico 

	$hoy = date("Ymd");							//obtener fecha actual

	//armar consulta de insercion a la base de datos - tabla : alumnos
	$sql = "insert into alumno(nombre,apellidos,dni,f_inicio,carrera,codigo,estado,fecha) values ('$nombre','$apellido','$dni','$inicio_carrera','$idcarrera','$codigo','1','$hoy')"; 

	//ejecucion de la consulta
	$result = mysqli_query($con,$sql);

	//debugear resultado - consulta mysql
	// echo $sql;
 ?>
