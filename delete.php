
<?php

include_once 'conectar.php'; 
$id = $_GET['rn']; 

$query= "DELETE FROM marca WHERE ID = '$id'";
$data = mysqli_query($mysqli, $query); 
header ("location: ./marca2.php?insert=success"); 

?>