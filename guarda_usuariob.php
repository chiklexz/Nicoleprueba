<?php 
	
	require('conexion.php');
	
	$IDMateria=$_POST['IDMateria'];
	$Nombre=$_POST['Nombre'];
$Grado=$_POST['Grado'];	
	
	$query="INSERT INTO materias (IDMateria, Nombre, Grado) VALUES ('$IDMateria','$Nombre','$Grado')";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Guardar Materia</title>
	</head>
	<body>
		<center>	
			
			<?php if($resultado>0){ ?>
				<h1>Materia Guardada</h1>
				<?php }else{ ?>
				<h1>Error al Guardar Materia</h1>		
			<?php	} ?>		
			
			<p></p>	
			
			<a href="indib.php">Regresar</a>
			
		</center>
	</body>
	</html>	
