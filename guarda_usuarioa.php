<?php 
	
	require('conexion.php');
	
	$Nombre=$_POST['Nombre'];
	$Apellidos=$_POST['Apellidos'];
$Grado=$_POST['Grado'];	
$Grupo=$_POST['Grupo'];
	
	$query="INSERT INTO maestros (Nombre, Apellidos, Grupo, Grado) VALUES ('$Nombre','$Apellidos','$Grupo','$Grado')";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Guardar Maestro</title>
	</head>
	<body>
		<center>	
			
			<?php if($resultado>0){ ?>
				<h1>Profesor Guardado</h1>
				<?php }else{ ?>
				<h1>Error al Guardar Profesor</h1>		
			<?php	} ?>		
			
			<p></p>	
			
			<a href="india.php">Regresar</a>
			
		</center>
	</body>
	</html>	
