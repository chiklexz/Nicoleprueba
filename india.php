<?php
	require('conexion.php');
	
	$query="SELECT id, Nombre, Apellidos, Grupo, Grado FROM maestros";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Profesor</title>
	</head>
	<body>
		
		<center><h1>Profesor</h1></center>
		
		<a href="nuevoa.php">Nuevo profesor</a>
                <a href="Index.html">Regresar al inicio</a>
		<p></p>
		
		<table border=1 width="80%">
			<thead>
				<tr>
					<td><b>Nombre</b></td>
					<td><b>Apellidos</b></td>
<td><b>Grupo</b></td>
<td><b>Grado</b></td>
					<td></td>
					<td></td>
				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>
						<tr>
							<td><?php echo $row['Nombre'];?>
							</td>
							<td>
								<?php echo $row['Apellidos'];?>
							</td>
							<td>
	<?php echo $row['Grupo'];?>
							</td>
<td>
								<?php echo $row['Grado'];?>
							</td>
							<td>
								<a href="modificara.php?id=<?php echo $row['id'];?>">Modificar</a>
							</td>
							<td>
								<a href="eliminara.php?id=<?php echo $row['id'];?>">Eliminar</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</body>
	</html>	
	
