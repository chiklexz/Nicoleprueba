<?php
	
	require('conexion.php');
	
	$id=$_GET['id'];
	
	$query="SELECT Nombre, Apellidos, Grupo, Grado FROM maestros WHERE id='$id'";
	
	$resultado=$mysqli->query($query);
	
	$row=$resultado->fetch_assoc();
	
?>

<html>
	<head>
		<title>Profesores</title>
	</head>
	<body>
		
		<center><h1>Modificar Profesor</h1></center>
		
		<form name="modificar_usuario" method="POST" action="mod_usuarioa.php">
			
			<table width="50%">
				<tr>
					<input type="hidden" name="id" value="<?php echo $id; ?>">
					<td width="20"><b>Profesor</b></td>
					<td width="30"><input type="text" name="Nombre" size="25" value="<?php echo $row['Nombre']; ?>" /></td>
				</tr>	
				<tr>
					<td><b>Apellidos</b></td>
					<td><input type="text" name="Apellidos" size="25" value="<?php echo $row['Apellidos']; ?>" /></td>
				</tr>
				<tr>
					<td><b>Grupo</b></td>
					<td><input type="text" name="Grupo" size="25" value="<?php echo $row['Grupo']; ?>" /></td>
				</tr>
				<tr>
<td><b>Grado</b></td>
					<td><input type="text" name="Grado" size="25" value="<?php echo $row['Grado']; ?>" /></td>
				</tr>
				<tr>
					<td colspan="2"><center><input type="submit" name="Guardar" value="Guardar" /></center></td>
				</tr>
			</table>
		</form>
	</body>
</html>	
