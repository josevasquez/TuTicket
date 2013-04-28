<!doctype html>
<html>
<head>
	<title>TuTicket | Carrito</title>
	<link rel="Shortcut Icon" href="favicon.ico"/>
	<link href="css/global.css" rel="stylesheet" type"text/css">
	<link href="css/carrito.css" rel="stylesheet" type"text/css">
</head>
<body>
	<?php
	include 'cabecera.php';
	?>
	<div id="tabla_compras">
			<h1>Carrito de Compras</h1>
			<table>
				<tr>
					<th>Evento</th>
					<th>Precio</th>
					<th>Cantidad</th>
					<th>Total</th>
				</tr>
				<tr>
					<td>Evento</td>
					<td>Precio</td>
					<td>Cantidad</td>
					<td>Total</td>
				</tr>
				<tr>
					<td>Evento</td>
					<td>Precio</td>
					<td>Cantidad</td>
					<td>Total</td>
				</tr>
			</table>
		</div>
		<div id="form_ingresar">
			<h1>Ingresa a tu cuenta</h1>
			<form>
				<table>
					<tr>
						<td><label for="usuario">Usuario</label></td>
						<td><input type="text"name="usuario" /></td>
					</tr>
					<tr>
						<td><label for="password">Password</label></td>
						<td><input type="password" name="password" /></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" value="Ingresar" />
						<input type="reset" value="Borrar" /></td>
					</tr>
				</table>
				<p><a href="registrarse.php">&iquest; No tienes cuenta &#63;. Reg&iacute;strate</a><br/>
				<a href="recuperar_pass.php">&iquest;Olvidaste tu contrase&ntilde;a &#63;</a></p>
			</form>
		</div>	

	<?php
		include 'pie_pagina.php';
	?>
</body>
</html>