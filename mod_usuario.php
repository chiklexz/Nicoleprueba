<?php 
	
	require('conexion.php');
	
	$id=$_POST['id'];
	$matricula=$_POST['Matricula'];
	$Nombre=$_POST['Nombre'];
	$Apellidos=$_POST['Apellidos'];
$Grado=$_POST['Grado'];
$Grupo=$_POST['Grupo'];
	
	$query="UPDATE usuarios SET Matricula='$matricula', Nombre='$Nombre', Apellidos='$Apellidos', Grado='$Grado', Grupo='$Grupo', WHERE id='$id'";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Modificar Alumno</title>
	</head>
	
	<body>
		<center>
			
			<?php 
				if($resultado>0){
				?>
				
				<h1>Alumno Modificado</h1>
				
					<?php 	}else{ ?>
				
				<h1>Error al Modificar Alumno</h1>
				
			<?php	} ?>
			
			<p></p>	
			
			<a href="indi.php">Regresar</a>
			
		</center>
	</body>
</html>
				
				
