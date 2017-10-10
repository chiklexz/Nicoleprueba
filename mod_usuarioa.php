<?php 
	
	require('conexion.php');
	
	$id=$_POST['id'];
	$Nombre=$_POST['Nombre'];
	$Apellidos=$_POST['Apellidos'];
	$Grupo=$_POST['Grupo'];
$Grado=$_POST['Grado'];
	
	$query="UPDATE maestros SET Nombre='$Nombre', Apellidos='$Apellidos', Grupo='$Grupo', Grado='$Grado' WHERE id='$id'";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Modificar Profesor</title>
	</head>
	
	<body>
		<center>
			
			<?php 
				if($resultado>0){
				?>
				
				<h1>Profesor Modificado</h1>
				
					<?php 	}else{ ?>
				
				<h1>Error al Modificar Profesor</h1>
				
			<?php	} ?>
			
			<p></p>	
			
			<a href="india.php">Regresar</a>
			
		</center>
	</body>
</html>
				
				
