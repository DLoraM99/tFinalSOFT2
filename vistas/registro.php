<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registro</title>
<link rel="stylesheet" type="text/css" id="applicationStylesheet" href="../css/Registro.css">
<link rel="shortcut icon" type="imagen/x-ion" href="../img/ICONO.ico">
</head>

<body>
<div id="Registro" class="Registro_Class">
	
		
	<svg data-type="Rectangle" data-name="Rectángulo 180" class="Rect_ngulo_180">
		<rect fill="rgba(245,244,242,1)" class="Rect_ngulo_180_Class" rx="0" ry="0" x="0" y="0" width="680" height="624">
		</rect>
	</svg>
	<svg data-type="Rectangle" data-name="Rectángulo 6" class="Rect_ngulo_6_cb">
		<linearGradient id="Rect_ngulo_6_cb" spreadMethod="pad" x1="1" x2="0" y1="0" y2="1">
			<stop offset="0" stop-color="#da532c" stop-opacity="1"></stop>
			<stop offset="1" stop-color="#6d2a16" stop-opacity="1"></stop>
		</linearGradient>
		<rect fill="url(#Rect_ngulo_6_cb)" class="Rect_ngulo_6_cb_Class" rx="0" ry="0" x="0" y="0" width="680" height="624">
		</rect>
	</svg>
    <img src="../img/icon_white.png">
	<div data-type="Text" data-name="Logo" class="Logo_Class">
		<span>DB SIMPLE</span>
	</div>
    <div data-type="Text" data-name="Registro de nuevos usuarios" class="Registro_de_nuevos_usuarios_Class">
		<span>Registro de nuevos usuarios</span>
	</div>

	<form class="Registro" action="../procedures/procedureRegistro.php" method="post">
		<label for="cuadro1">Nombre<input id="Nombre" type="text" name="Nombre"></label> <label for="cuadro2">
			Apellido<input id="Apellido" type="text" name="Apellido"></label>
		<div class="cuadro3">Correo electronico<input id="Correo"type="email" name="Correo"><br></div>
		<div class="cuadro4">Contraseña<input id="Contraseña" type="password" name="Password"><br></div>
		<div class="cuadro5">Confirmar contraseña<input id="CContraseña"type="password" name="CContraseña"><br></div>
		<div class="cuadro6">Enfoque de su base de datos	
		<select id="Enfoque" name="BaseDatos">
		<option> </option>
		<option>Institución Educativa </option>
	</select></div><br>
    <div class="Condiciones"><input id="checkbox" type="Checkbox" >Estoy de acuerdo con los términos y condiciones</div>
	<input type="submit" id="B_Registrarse" value="Registrarse"><br>
	<div id="R_Usuario"><a href="../vistas/login.php">¿Ya tienes una cuenta? Inicia sesión</a></div>
</form>

</div>
</body>
</html>