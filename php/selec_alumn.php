<?php 
include('../conexion/conexion.php');
$code = $_POST['code'];

$sql = "select * from alumno where code='$code'";

$query = mysqli_query($con,$sql);

$array = mysqli_fetch_array($query);

 ?>

<form id="form-code">
	<button class="massive ui button" type="submit">guardar</button>
</form>