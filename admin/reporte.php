<?php 
	include('../conexion/conexion.php');
	
	$csql = "select * from alumno where estado='1'";
	$cresult = mysqli_query($con,$csql);

	$start  ="";
	$name	="";
	$sql = "select * from asistencia where estado='1'";

	if (isset($_POST['start'])) {
		$start 	= $_POST['start'];
	}
	if (isset($_POST['name'])) {
		$name   = $_POST['name'];
	}
	if ($start=="" && $name =="") {
		$sql = "select a.*, b.nombre,b.apellidos from asistencia a inner join alumno b on a.idalumno=b.idalumno where a.estado='1'";
	}elseif ($start != "" && $name=="") {		
		$sql = "select a.*, b.nombre,b.apellidos from asistencia a inner join alumno b on a.idalumno=b.idalumno where a.fecha='$start' and a.estado='1'";
	}elseif($start==""&&$name!=""){
		$sql = "select a.*, b.nombre,b.apellidos from asistencia a inner join alumno b on a.idalumno=b.idalumno where a.idalumno='$name' and a.estado='1'";
	}
	$result = mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">		
	<link rel="stylesheet" type="text/css" href="../components/semantic/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
	<title>Asistencia</title>
</head>
<body>
	<header class="head">
		<div class="ui padded grid">
			<div class="two column row">
				<div class="left floated column">
					<h3>IS Libertador</h3>
				</div>
				<div class="rigth floated column">
					<h3 class="derecha">Asistencia <span class="white left-20">|</span> <a class="white left-20"> Salir </a></h3> 
				</div>
			</div>
		</div>		
	</header>
	<div class="menu one wide column">
		<div class="ui relaxed divided list padding-t-0">
			<div class="item newitem active" id="carrera-box" data-position="right center" data-content="Agregue nuevas carreras">
				<a class="red" href="carrera.html">
					<i class="large write outline middle aligned icon"></i>
				</a>
			</div>
			<div class="item newitem" id="alumno-box" data-position="right center" data-content="Agregue nuevo estudiante">
				<a class="red" href="alumnos.php">
					<i class="large add user icon"></i>
				</a>
			</div>
			<div class="item newitem" id="reporte-box" data-position="right center" data-content="Reporte de asistencias">
				<a class="red" href="reporte.php">
					<i class="large file text icon"></i>
				</a>
			</div>
		</div>
	</div>
	<section id="contenedor-box">
		<div class="ui grid">
			<div class="sixteen wide column">
				<form class="ui form" id="report">
					<div class="fields">
						<!--<div class="field">
							<div class="fields">
								<div class="field">
									<label>Fecha </label>
								</div>
								<div class="field">
									<input type="date" name="start" placeholder="Fecha inicio"></input>
								</div>
							</div>
						</div>-->
						<div class="field">
							<div class="fields">
								<div class="field">
									<label>Nombre </label>
								</div>
								<div class="field">
									<select class="ui search selection dropdown" id="search-select">
										<option value="">nombre</option>
										<?php while ($file = mysqli_fetch_array($cresult)) { ?>
										<option value="<?php echo $file['idalumno'] ?>"><?php echo $file['nombre']." ".$file['apellidos']; ?></option>
									<?php	} ?>	
									</select>
								</div>
							</div>
						</div>
						<div class="field">
							<button class="ui button">Generar reportes</button>
						</div>
					</div>
				</form>
			</div>
			<div class="sixteen wide column" id="report-list">
				<table class="ui celled striped table">
				 	<tr>
				 		<th>idalumno</th>
				 		<th>Nombres</th>
				 		<th>carrera</th>
				 		<th>hora entrada</th>
				 		<th>fecha</th>
				 	</tr>
				 	<?php 
				 		while($array = mysqli_fetch_array($result)){?>
				 		<tr>
				 			<td><?php echo $array['idalumno']; ?></td>
				 			<td><?php echo $array['nombre']." ".$array['apellidos']; ?></td>
				 			<td><?php echo $array['carrera']; ?></td>
				 			<td><?php echo $array['hora_entrada']; ?></td>
				 			<td><?php echo $array['fecha']; ?></td>
				 		</tr>
				 	<?php	}	
				 	 ?>
				</table>
			</div>
		</div>
	</section>

<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="../components/semantic/semantic.min.js"></script>
<script type="text/javascript" src="../js/main.js"></script>
</body>
</html>