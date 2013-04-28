<!doctype html>
<html>
<head>
	<title>TuTicket | Recuperar Password</title>
	<link rel="Shortcut Icon" href="favicon.ico"/>
	<link href="css/global.css" rel="stylesheet" type"text/css">
	<link href="css/recuperar_pass.css" rel="stylesheet" type"text/css">
</head>
<body>
	<?php
	include 'cabecera.php';
	?>
	<div id="recup_pass">
					<h1>Porfavor introduzca el usuario y el correo con el que se registr&oacute;</h1>
					<form>
						<table id="pass">
							<tr>
								<td>Usuario:</td>
								<td><input type="text" name="usuario" /></td>
							</tr>
							<tr>
								<td>Correo:</td>
								<td><input type="text" name="correo" /></td>
							</tr>
							<tr>
								<td></td>
								<td><input type="submit" value="Enviar"><input type="reset" value="Borrar"></td>
							</tr>
						</table>
					</form>
				</div>

	<?php
		include 'pie_pagina.php';
	?>
</body>
</html>