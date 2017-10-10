<?php 
	
	require('conexion.php');
	
	$id=$_GET['id'];
	
	$query="DELETE FROM usuarios WHERE id='$id'";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Eliminar Alumno</title>
	</head>
	
	<body>
		<center>
			<?php 
				if($resultado>0){
				?>
				
				<h1>Alumno Eliminado</h1>
				
				<?php 	}else{ ?>
				
				<h1>Error al Eliminar Alumno</h1>
				
			<?php	} ?>
			<p></p>		
			
			<a href="indi.php">Regresar</a>
			
		</center>
	</body>
</html>
