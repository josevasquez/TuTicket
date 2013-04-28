<!doctype html>
<html>
<head>
	<title>TuTicket | Cont&aacutectenos</title>
	<link rel="Shortcut Icon" href="favicon.ico"/>
	<link href="css/global.css" rel="stylesheet" type"text/css">
	<link href="css/contactenos.css" rel="stylesheet" type"text/css">
</head>
<body>
	<?php
	include 'cabecera.php';
	?>
	
	<h1>Cont&aacutectenos</h1>
	<div id="contacto">
					<form>
						<table>
							<tr>
								<td>Asunto:</td>
								<td>
								<select>
									<option>Seleccione</option>
									<option>Queja</option>
									<option>Sugerencia</option>
									<option>Consulta</option>
								</select>
							</td>
							</tr>
							<tr>
								<td>Nombre:</td>
								<td><input  required type="text" name="" /></td>
							</tr>
							<tr>
								<td>Correo:</td>
								<td><input  required type="text" name="" /></td>
							</tr>
							<tr>
								<td>Mensaje:</td>
								<td><textarea style="width:250px; height:150px;" required name="" > </textarea></td>
							</tr>
							<tr>
								<td></td>
								<td><input type="submit" value="Enviar" />
								<input type="reset" value="Borrar" /></td>
							</tr>
						</table>	
					</form>
				</div>
	
	<?php
		include 'pie_pagina.php';
	?>
</body>
</html>