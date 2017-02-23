<?php 
	include('/titulacion/conexion/conexion.php');
	$start  ="";
	$name	="";
	if (isset($_POST['start'])) {
		$start 	= $_POST['start'];
	}
	if (isset($_POST['name'])) {
		$name   	= $_POST['name'];
	}
	if ($start=="" && $name =="") {
		$sql = "select * from asistencia where estado='1'";
	}elseif ($start != "" && $name=="") {		
		$sql = "select * from asistencia where fecha='$start' and estado='1'";
	}elseif($start==""&&$name!=""){
		$sql = "select * from asistencia where idalumno='$name' and estado='1'";
	}

	$result = mysqli_query($con,$sql);

 ?>
 <table>
 	<tr>
 		<th>idalumno</th>
 		<th>carrera</th>
 		<th>hora entrada</th>
 		<th>fecha</th>
 	</tr>
 	<?php 
 		while($array = mysqli_fetch_array($result)){?>
 		<tr>
 			<td><?php echo $array['idalumno']; ?></td>
 			<td><?php echo $array['carrera']; ?></td>
 			<td><?php echo $array['hora_entrada']; ?></td>
 			<td><?php echo $array['fecha']; ?></td>
 		</tr>
 	<?php	}	
 	 ?>
 </table>
 <script type="text/javascript">
 	$('#report-list').load('/titulacion/php/reporte.php');
 </script>