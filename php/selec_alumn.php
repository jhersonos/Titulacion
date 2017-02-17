<?php 
include('../conexion/conexion.php');
$code = $_POST['code'];

$sql = "select * from alumno where code='$code'";

$query = mysqli_query($con,$sql);

$array = mysqli_fetch_array($query);

 ?>
 
<form id="form-code">
	<div class="photo-alumn">
		<img src="" style="width: 100%;height: 100%;">		
	</div>
	<button class="massive ui button" type="submit">guardar</button>
</form>