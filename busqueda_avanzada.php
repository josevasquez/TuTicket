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
	
	<h1>B&uacutesqueda Avanzada</h1>
	<div id="contacto">
					<form action="eventos.php" method="get">
						<table>
							<tr>
								<td>Palabra clave:</td>
								<td><input  required type="text" name="" /></td>
							</tr>
							<tr>
								<td>Categor&iacutea </td>
								<td>
								<select>
									<option value="seleccione">Seleccione</option>
									<option value="01">Musica</option>
									<option value="01">Deportes</option>
									<option value="01">Teatro</option>
									<option value="01">Familia</option>
									<option value="01">Cultura</option>
								</select>
								</td>
							</tr>
							<tr>
								<td>Sub-Categor&iacutea </td>
								<td>
								<select>
									<option value="seleccione">Seleccione</option>
									<option value="01">Rock</option>
									<option value="01">Latin</option>
									<option value="01">Salsa</option>
									<option value="01">Pop</option>
									<option value="01">Electro</option>
								</select>
							</tr>
							<tr>
								<td>Local</td>
								<td>
								<select>
									<option value="seleccione">Seleccione</option>
									<option value="01">Teatro Nacional</option>
									<option value="02">Estadio Nacional</option>
									<option value="03">Jockey Club del Per&uacute</option>
								</select>
							</tr>
							<tr>
								<td>Ciudad</td>
								<td>
								<select>
									<option value="seleccione">Seleccione</option>
									<option value="01">Lima</option>
									<option value="02">Ancash</option>
									<option value="03">Apurimac</option>
									<option value="04">Arequipa</option>
									<option value="05">Ayacucho</option>
									<option value="06">Cajamarca</option>
									<option value="07">Prov. Const. Del Callao</option>
									<option value="08">Cusco</option>
									<option value="09">Huancavelica</option>
									<option value="10">Huanuco</option>
									<option value="11">Ica</option>
									<option value="12">Junin</option>
									<option value="13">La Libertad</option>
									<option value="14">Lambayeque</option>
									<option value="15">Loreto</option>
									<option value="16">Madre De Dios</option>
									<option value="17">Moquegua</option>
									<option value="18">Pasco</option>
									<option value="19">Piura</option>
									<option value="20">Puno</option>
									<option value="21">San Martin</option>
									<option value="22">Tacna</option>
									<option value="23">Tumbes</option>
									<option value="24">Ucayali</option>
									<option value="25">Amazonas</option>

								</select>
							</tr>
							<tr>
								<td></td>
								<td><input type="submit" value="Buscar" /></td>
							</tr>
						</table>	
					</form>
				</div>

	
	<?php
		include 'pie_pagina.php';
	?>
</body>
</html>