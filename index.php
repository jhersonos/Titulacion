<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">		
	<link rel="stylesheet" type="text/css" href="components/semantic/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<title>tuto</title>
</head>
<body>
	<div class="index-all">
		<div class="body">
			<form id="login" class="ui form">
				<div class="field">
					<h1 class="inline left-50">AsisController</h1>
					<i class="green big checkmark box icon"></i>
				</div>
				<div class="field">
					<label>Usuario</label>
   					<input type="text" required="true" name="user" placeholder="Ingrese nombre de usuario">
				</div>
				<div class="field">
					<label>Contraseña</label>
   					<input type="password" required="true" name="pass" placeholder="Ingrese contraseña">
   					<h6 id="err" class="no-margin red none">Ingrese datos correctos por favor</h6>
				</div>
				<button class="ui button">
					Ingresar
				</button>
				<a class="ui button">
					Olvide mi contraseña
				</a>
			</form>
		</div>
		<div class="foot">
			<div class="ui card">
			  <div class="content">
			    <div class="header">¿Quienes somos?</div>
			    <div class="meta">
			      <span class="right floated time">2016</span>
			      <span class="category">Titulacion</span>
			    </div>
			    <div class="description">
			      <p>
			      	Grupo de titulacion de la promocion 2017, somos un equipo de 5 personas la cual desarrollamos este sistema de asistencias con el objetivo de ...
			      </p>
			    </div>
			  </div>
			  <div class="extra content">
			    <div class="right floated author">
			    	<button class="ui facebook button">
				 		<i class="facebook icon"></i>
				  		Facebook
					</button>
			    </div>
			  </div>
			</div>
			<div class="arrow">
				<i id="flecha" class="chevron right icon"></i>
			</div>
		</div>
	</div>

<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="components/semantic/semantic.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>