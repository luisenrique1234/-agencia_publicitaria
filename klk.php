<?php
$servername = "localhost";
$database = "programacioniiibd";
$username = "root";
// Create connection
$conn = mysqli_connect($servername, $username, "", $database);
// Check connection
if (!$conn) {
      die("Connection fallo: " . mysqli_connect_error());
}
 
echo "Conecion Exitoso/";

$Nombre=$_POST['Nombre'];
$Telefono=$_POST['Telefono'];
$Email=$_POST['Email'];
$Ciudad=$_POST['Ciudad'];
$Massage=$_POST['Massage'];
//hacemos la sentencia de sql
$sql="INSERT INTO ppro VALUES('$Nombre',
                               '$Telefono',
                               '$Email',
                                '$Ciudad',
                                '$Massage')";

if (mysqli_query($conn, $sql)) {
    echo "Nuevo registro creado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);                                
 
?>