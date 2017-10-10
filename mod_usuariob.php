<?php 
	
	require('conexion.php');
	
	$id=$_POST['id'];
	$IDMateria=$_POST['IDMateria'];
	$Nombre=$_POST['Nombre'];
$Grado=$_POST['Grado'];
	
	$query="UPDATE Materias SET IDMateria='$IDMateria', Nombre='$Nombre', Grado='$Grado' WHERE id='$id'";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Modificar Materia</title>
	</head>
	
	<body>
		<center>
			
			<?php 
				if($resultado>0){
				?>
				
				<h1>Materia Modificada</h1>
				
					<?php 	}else{ ?>
				
				<h1>Error al Modificar Profesor</h1>
				
			<?php	} ?>
			
			<p></p>	
			
			<a href="indib.php">Regresar</a>
			
		</center>
	</body>
</html>
				
				
