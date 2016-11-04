<?php include('../conexion/conexion.php'); 
	$sql = "select * from carrera where estado='1'";
	$res=mysql_query($sql,$con);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Libertador</title>
	<link rel="stylesheet" type="text/css" href="../components/semantic/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="../js/registro.js"></script>

</head>
<body>
<div class="container">
	<div class="registro">
		<form class="ui form" id="save-alumno">
				<div class="field">
					<h1>Registro Alumno</h1>
				</div>
				<div class="field">
					<h3><span class="red">*</span>Datos personales</h3>
				</div>
				<div class="field">
				    <label>Nombre Alumno:</label>
				    <div class="two fields">
					    <div class="field">
				        	<input type="text" name="first-name" placeholder="Nombre">
			      		</div>
			      		<div class="field">
					        <input type="text" name="last-name" placeholder="Apellido">
					      </div>
		      		</div>
		      	</div>
				<div class="field">
					<label>Fecha inicio:</label>
					<input type="date" name="start-carrera" id="calendario">
				</div>
				<div class="field">
					<h3><span class="red">*</span>Datos Academico</h3>
				</div>
				<div class="field">
					<label>Carrera</label>
					<select name="carrera">
							<option value="">-- Seleccione carrera --</option>
						<?php while ($file=mysql_fetch_array($res)) {	?>
							<option value="<?php echo $file['idcarrera'] ?>"><?php echo $file["name_carrera"]; ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="field">
					<label>Codigo</label>					
					<input type="text" id="codigo" name="codigo">
				</div>
				<div class="field">
      					<label>
      						<input type="checkbox" tabindex="0" name="cod" id="cod">
      						Generar Codigo Automatico 
      					</label>
				</div>
				<div class="field">
					<button class="ui black button" type="submit">Registrar</button>
				</div>
		</form>
	</div>
	<div class="container-carnet" id="container-carnet">
		<div class="carnet">
			<div class="head-carnet">
				<h2>
					<span class="title-codeb">Codigo Generado</span>
				</h2>
			</div>
			<div class="body-carnet" id="body-carnet">
				
			</div>
			<div class="foot-carnet">
				<form id="form-create-carnet" method="POST" action="../php/savecode.php">
					<button type="submit" class="ui blue button" id="save-code">Guardar codigo</button>
					<input type="hidden" id="source" name="source"></input>
				</form>
			</div>
			<div class="none" id="save-img"> 
				
			</div>
			<!--<img id="front" src="img/front.png">
			<img id="back" src="img/back.png">-->
		</div>
	</div>
</div>
</body>
</html>