<!DOCTYPE html>
<html>
	
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" id="applicationStylesheet" href="../css/login.css"/>
	<link rel="shortcut icon" type="imagen/x-ion" href="../img/ICONO.ico">
	
</head>
	
<body>
	<div id="Login" class="Login_Class">
		<svg data-type="Rectangle" data-name="Rectángulo 181" class="Rect_ngulo_181_c">
			<linearGradient id="Rect_ngulo_181_c" spreadMethod="pad" x1="1" x2="0" y1="0" y2="1">
				<stop offset="0" stop-color="#da532c" stop-opacity="1"></stop>
				<stop offset="1" stop-color="#6d2a16" stop-opacity="1"></stop>
			</linearGradient>
			<rect fill="url(#Rect_ngulo_181_c)" class="Rect_ngulo_181_c_Class" rx="0" ry="0" x="0" y="0" width="680" height="624">
			</rect>
		</svg>
	    <img src="../img/icon_white.png">
		
		
		<svg data-type="Rectangle" data-name="Rectángulo 182" class="Rect_ngulo_182">
			<rect fill="rgba(245,244,242,1)" class="Rect_ngulo_182_Class" rx="0" ry="0" x="0" y="0" width="680" height="624">
		</svg>
		
		<div data-type="Text" data-name="Logo" class="Logo_Class">
			<span>DB SIMPLE</span>
		</div>

		<div data-type="Text" data-name="¡Bienvenido otra vez! Por favor ingresa con tu cuenta." class="_Bienvenido_otra_vez__Por_favo_Class">
			<span>¡Bienvenido otra vez! Por favor ingresa con tu cuenta.</span>
		</div>

		<form class="Datos" action="../procedures/procedureLogin.php" method="post">
			<div class="cuadro1">Correo electronico<input id="Correo"type="email" name="Correo"><br></div>
			<div class="cuadro2">Contraseña<input id="Contraseña" type="password" name="Password"><br></div>
			<input id="Ingresar" type="submit" value="Ingresar">
			<div class="Registrarse"><a href="../vistas/registro.php">Registrarse</a></div>
		</form>
</div>
</body>
	
</html>
