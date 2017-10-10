<?php
	require('conexion.php');
	
	$query="SELECT id, IDMateria, Nombre,  Grado FROM Materias";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Materias</title>
	</head>
	<body>
		
		<center><h1>Materias</h1></center>
		
		<a href="nuevob.php">Nueva Materia</a>
                <a href="Index.html">Regresar al inicio</a>
		<p></p>
		
		<table border=1 width="80%">
			<thead>
				<tr>
					<td><b>IDMateria</b></td>
					<td><b>Nombre</b></td>
<td><b>Grado</b></td>
					<td></td>
					<td></td>
				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>
						<tr>
							<td><?php echo $row['IDMateria'];?>
							</td>
							<td>
								<?php echo $row['Nombre'];?>
							</td>
				
<td>
								<?php echo $row['Grado'];?>
							</td>
							<td>
								<a href="modificarb.php?id=<?php echo $row['id'];?>">Modificar</a>
							</td>
							<td>
								<a href="eliminarb.php?id=<?php echo $row['id'];?>">Eliminar</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</body>
	</html>	
	
