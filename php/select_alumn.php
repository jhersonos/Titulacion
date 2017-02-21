<?php 
include('../conexion/conexion.php');
$code="";
//$code = $_POST['code'];
if(isset($_POST['code'])){
		$code=$_POST['code'];
	}elseif(isset($_REQUEST['code'])){
		$code=$_REQUEST['code'];
	}elseif(isset($_GET['code'])){
		$code=$_GET['code'];
	}else{
		$code="null";
	};
// echo $code."---s-s-s-s-s-s-";

$sql = "select * from alumno where codigo='$code'";

$query = mysqli_query($con,$sql);

$array = mysqli_fetch_array($query);

 ?>
 
<form id="form-code" class="ui form">
<div class="fields">
	<div class="field">
		<div class="photo-alumn">
			<img src="">		
		</div>
	</div>
	<div class="field">
		<label>Nombre: <span class="rg"><?php echo $array['nombre']; ?></span></label>
		<br>
		<label>Apellido: <span class="rg"><?php echo $array['apellidos']; ?></span></label>
		<br>
		<label>Carrera: <span class="rg"><?php echo $array['carrera']; ?></span></label>
	</div>
</div>
<div class="field">	
	<button class="big ui button" type="submit">Marcar</button>
	<button class="big red ui button" type="submit">Cancelar</button>
</div>
</form>