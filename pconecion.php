<?php
$servername = "localhost";
$database = "programacioniiibd";
$username = "root";
// Create connection con la base de datos
$conn = mysqli_connect($servername, $username, "", $database);
// Check connection
if (!$conn) {
      die("Connection fallo: " . mysqli_connect_error());
}
 
echo "Connected exitoso";
 
$sql = "INSERT INTO datos (name, lastname, email) VALUES ('Thom', 'Vial', 'thom.v@some.com')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>