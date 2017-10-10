<?php 
	
	require('conexion.php');
	
$Matricula=$_POST['Matricula'];	
$Nombre=$_POST['Nombre'];
	$Apellidos=$_POST['Apellidos'];
$Grado=$_POST['Grado'];	
$Grupo=$_POST['Grupo'];
	
	$query="INSERT INTO usuarios (Matricula, Nombre, Apellidos, Grupo, Grado) VALUES ('$Matricula','$Nombre','$Apellidos','$Grupo','$Grado')";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Guardar Alumno</title>
	</head>
	<body>
		<center>	
			
			<?php if($resultado>0){ ?>
				<h1>Alumno Guardado</h1>
				<?php }else{ ?>
				<h1>Error al Guardar Profesor</h1>		
			<?php	} ?>		
			
			<p></p>	
			
			<a href="indi.php">Regresar</a>
			
		</center>
	</body>
	</html>	
