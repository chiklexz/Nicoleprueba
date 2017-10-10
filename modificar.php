<?php
	
	require('conexion.php');
	
	$id=$_GET['id'];
	
	$query="SELECT Matricula, Nombre, Apellidos, Grado, Grupo FROM usuarios WHERE id='$id'";
	
	$resultado=$mysqli->query($query);
	
	$row=$resultado->fetch_assoc();
	
?>

<html>
	<head>
		<title>Alumnos</title>
	</head>
	<body>
		
		<center><h1>Modificar Alumno</h1></center>
		
		<form name="modificar_usuario" method="POST" action="mod_usuario.php">
			
			<table width="50%">
				<tr>
					<input type="hidden" name="id" value="<?php echo $id; ?>">
					<td width="20"><b>Matricula</b></td>
					<td width="30"><input type="varchar" name="Matricula" size="25" value="<?php echo $row['Matricula']; ?>" /></td>
				</tr>	
				<tr>
					<td><b>Nombre</b></td>
					<td><input type="varchar" name="Nombre" size="25" value="<?php echo $row['Nombre']; ?>" /></td>
				</tr>
				<tr>
					<td><b>Apellidos</b></td>
					<td><input type="varchar" name="Apellidos" size="25" value="<?php echo $row['Apellidos']; ?>" /></td>
				</tr>
				<tr>
<td><b>Grado</b></td>
					<td><input type="varchar" name="Grado" size="25" value="<?php echo $row['Grado']; ?>" /></td>
				</tr>
<tr>
<td><b>Grupo</b></td>
					<td><input type="varchar" name="Grupo" size="25" value="<?php echo $row['Grupo']; ?>" /></td>
				</tr>
					<td colspan="2"><center><input type="submit" name="Guardar" value="Guardar" /></center></td>
				</tr>
			</table>
		</form>
	</body>
</html>	
