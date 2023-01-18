<?php
	//conectamos Con el servidor
	$servername = "localhost";
$database = "programacioniiibd";
$username = "root";

// Create connection
$conn = mysqli_connect($servername, $username, "", $database);
// Check connection
if (!$conn) {
      die("Connection fallo: " . mysqli_connect_error());
}
echo "Connected exitoso";

	//recuperar las variables
	$nombre=$_POST['nombre'];
	$correo=$_POST['correo'];
	$Telefono=$_POST['Telefono'];
    $Ciudad=$_POST['Ciudad'];
	//hacemos la sentencia de sql
	$sql="INSERT INTO datos VALUES('$nombre',
								   '$correo',
								   '$Telefono',
                                    '$Ciuda')";
	//ejecutamos la sentencia de sql
	$ejecutar=mysql_query($sql);
	//verificamos la ejecucion
	if(!$ejecutar){
		echo"Hubo Algun Error";
	}else{
		echo"Datos Guardados Correctamente <br><a href='index.ejs'>Volver</a>";
	}
?>