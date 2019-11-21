<html>
<head>
	<title>Agron</title>
</head>
<body>
	<?php
	$conexion=mysqli_connect("fdb18.awardspace.net","3128185_base","Admin1234","3128185_base") or die ("Problemas con la conexion");
	$registros=mysqli_query($conexion,"select Id, Nombre, Celular, Direccion from alumnos") or die("Problemas en el select:".mysqli_error($conexion));
		while ($reg=mysqli_fetch_array($registros)) 
		{
		echo "Id:".$reg['Id']."<br>";
		echo "Nombre:".$reg['Nombre']."<br>";
		echo "Celular:".$reg['Celular']."<br>";
		echo "Direccion:".$reg['Direccion']."<br>";
		echo "<hr>";	
		}
		echo "<br>";
		
		mysqli_close($conexion);
	?>
</body>
</html>