<?php 
	include('../conexion/conexion.php'); 
	$sql = "select * from carrera where estado='1'";
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
		<div id="carrera">
			<form class="ui form" id="save-alumno">
			  <h2 class="ui dividing header">Registrar Alumnos</h2>
			  	<div class="field">
				    <label>Nombres</label>
				    <div class="two fields">
				      <div class="field">
				        <input type="text" name="nombre" placeholder="Name">
				      </div>
				      <div class="field">
				        <input type="text" name="apellido" placeholder="lastname">
				      </div>
				    </div>
			   	</div>
			  	<div class="field">
				    <label>Fecha Inicio</label>
				    <div class="two fields">
				      <div class="field">
				        <input type="date" name="f_ini">
				      </div>
				    </div>
			   	</div>
			   	<div class="field">
				    <label>Carrera / Codigo</label>
				    <div class="two fields">
				      <div class="field">
				        <select name="alu-carrera">
				        	<option>-- Seleccione carrera --</option>
				        	<?php while ($row=mysqli_fetch_array($result)) {?>
				        		<option id="<?php echo $row['idcarrera']; ?>"><?php echo $row['name_carrera']; ?></option>
				        	<?php } ?>
				        </select>
				      </div>
				      <div class="field">
				    		<input type="text" name="cod" placeholder="Ingrese codigo"></input>
				      </div>
				    </div>
			   	</div>
			   	<div class="field">
			   		<div class="ui checkbox">			   			
		   				<input type="checkbox" name="auto-cod">
			   				<label>	
			   					Generar codigo automatico
			   				</label>
			   			</input>
			   		</div>
			   	</div>
			   	<div class="field">
				    <div class="two fields">
						<div class="field">
							<button type="submit" class="ui red button">Agregar Alumno</button>	
<!-- 							<button type="submit" class="ui red button">Eliminar Alumno</button> -->
						</div>		      
				    </div>
			   	</div>   	
			</form>
		</div>
	</section>

<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="../components/semantic/semantic.min.js"></script>
<script type="text/javascript" src="../js/main.js"></script>
</body>
</html>