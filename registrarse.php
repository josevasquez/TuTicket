<!doctype html>
<html>
<head>
	<title>TuTicket | Registrarse</title>
	<link rel="Shortcut Icon" href="favicon.ico"/>
	<link href="css/global.css" rel="stylesheet" type"text/css">
	<link href="css/registrarse.css" rel="stylesheet" type"text/css">
</head>
<body>
	<?php
	include 'cabecera.php';
	?>
<div id="form_registrar">
		<h1>Reg&iacute;strese</h1>
			<form>
				<table>
					<tr>
						<td>Usuario:</td>
						<td><input type="text" name="usuario"/></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="password1"/></td>
					</tr>
					<tr>
						<td>Confirmar Password</td>
						<td><input type="password" name="password2"/></td>
					</tr>
					<tr>
						<td>Nombre Completo:</td>
						<td><input type="text" name="nombre"/></td>
					</tr>
					<tr>
						<td>Apellido Completo:</td>
						<td><input type="text" name="apellido"/></td>
					</tr>
					<tr>
						<td>Sexo:</td>
						<td><input type="radio" name="sexo" value="M"/>M<input type="radio" name="sexo" value="F">F </td>
					</tr>
					<tr>
						<td>DNI:</td>
						<td><input type="text"/></td>
					</tr>
					<tr>
						<td>Direcci&oacute;n:</td>
						<td><input type="text"/></td>
					</tr>
					<tr>
						<td>Correo:</td>
						<td><input type="text"/></td>
					</tr>
					<tr>
						<td>Fecha de nacimiento:</td>
						<td>
						<select>
							<?php
								for($i=1;$i<32;$i++)
								{?>
									<option value="<?php echo $i ?>"> <?php echo $i ?> </option>
								<?php }
								?>
						</select>
						<select>
							<?php
								for($i=1;$i<13;$i++)
								{?>
									<option value="<?php echo $i ?>"> <?php echo $i ?> </option>
								<?php }
								?>
						</select>
						<select>
							<?php
								$anio=date("Y");
								
								for($i=$anio-18;$i>$anio-80;$i--)
								{?>
									<option value="<?php echo $i ?>"> <?php echo $i ?> </option>
								<?php }
								?>
						</select><td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" value="Registrar">
						<input type="reset" value="Borrar"></td>
					</tr>	
					</table>
				</form>
			</div>				

	<?php
		include 'pie_pagina.php';
	?>
</body>
</html>