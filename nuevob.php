<html>
	<head>
		<title>Materias</title>
	</head>
	<body>
		
		<center><h1>Nueva Materia</h1></center>
		
		<form name="nuevo_usuario" method="POST" action="guarda_usuariob.php">
			<table width="50%">
				<tr>
					<td width="20"><b>IDMateria</b></td>
					<td width="30"><input type="varchar" name="IDMateria" size="25" /></td>
				</tr>

				<tr>
	<td><b>Nombre</b></td>
					<td><input type="varchar" name="Nombre" size="25" /></td>
				</tr>
<tr>
	<td><b>Grado</b></td>
					<td><input type="varchar" name="Grado" size="25" /></td>
				</tr>
					<td colspan="2"><center><input type="submit" name="eviar" value="Registrar" /></center></td>
				</tr>
			</table>
		</form>
	</body>
</html>						
