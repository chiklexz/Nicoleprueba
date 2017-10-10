<html>
	<head>
		<title>Alumnos</title>
	</head>
	<body>
		
		<center><h1>Nuevo Alumno</h1></center>
		
		<form name="nuevo_usuario" method="POST" action="guarda_usuario.php">
			<table width="50%">
				<tr>
					<td width="20"><b>Matricula</b></td>
					<td width="30"><input type="varchar" name="Matricula" size="25" /></td>
				</tr>
				<tr>
					<td><b>Nombre</b></td>
					<td><input type="text" name="Nombre" size="25" /></td>
				</tr>
<tr>
					<td><b>Apellidos</b></td>
					<td><input type="text" name="Apellidos" size="25" /></td>
				</tr>
				<tr>
					<td><b>Grado</b></td>
					<td><input type="varchar" name="Grado" size="25" /></td>
				</tr>
				<tr>
	<td><b>Grupo</b></td>
					<td><input type="varchar" name="Grupo" size="25" /></td>
				</tr>
					<td colspan="2"><center><input type="submit" name="eviar" value="Registrar" /></center></td>
				</tr>
			</table>
		</form>
	</body>
</html>						
