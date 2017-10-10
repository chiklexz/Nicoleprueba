<?php
	require('conexion.php');
	
	$query="SELECT id, Matricula, Nombre, Apellidos, Grado, Grupo FROM usuarios";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Alumnos</title>
	</head>
	<body>
		
		<center><h1>Alumnos</h1></center>
		
		<a href="nuevo.php">Nuevo Alumnos</a>
                <a href="Index.html">Regresar al inicio</a>
		<p></p>
		
		<table border=1 width="80%">
			<thead>
				<tr>
					<td><b>Matricula</b></td>
					<td><b>Nombre</b></td>
<td><b>Apellidos</b></td>
<td><b>Grado</b></td>
<td><b>Grupo</b></td>
					<td></td>
					<td></td>
				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>
						<tr>
							<td><?php echo $row['Matricula'];?>
							</td>
							<td>
								<?php echo $row['Nombre'];?>
							</td>
<td>
								<?php echo $row['Apellidos'];?>
							</td>
<td>
								<?php echo $row['Grado'];?>
							</td>
<td>
								<?php echo $row['Grupo'];?>
							</td>
							<td>
								<a href="modificar.php?id=<?php echo $row['id'];?>">Modificar</a>
							</td>
							<td>
								<a href="eliminar.php?id=<?php echo $row['id'];?>">Eliminar</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</body>
	</html>	
	
