<html>
<body>
<?php
$conexion=mysqli_connect("fdb18.awardspace.net","3128185_base","Admin1234","3128185_base") or die ("Problemas con la conexion");
mysqli_query($conexion,"insert into alumnos (Nombre,Celular,Direccion) values ('$_REQUEST[Nombre]','$_REQUEST[Celular]','$_REQUEST[Direccion]')") or die ("Problemas en el select:".mysqli_error($conexion));
mysqli_close($conexion);
echo "Se insertaron correctamente los datos";
?>
</body>
</html>