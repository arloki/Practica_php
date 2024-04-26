<?php
include 'conectar.php'; 

$nombre= $_POST['nombre'];
$pais_origen= $_POST['pais_origen'];
$descripcion= $_POST['descripcion']; 

$sqlinsert = "INSERT into marca VALUES (0,'$nombre', '$pais_origen', '$descripcion');"; 

mysqli_query($mysqli, $sqlinsert); 

header("location:./marca2.php?insert=success"); 

?>