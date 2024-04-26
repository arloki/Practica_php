<?php

include_once 'conectar.php';
$id = $_POST['id'];

if (isset($_POST['update'])) {

    $id = $_POST['id'];

    $query = "UPDATE marca SET nombre='$_POST[nombre]',pais_origen='$_POST[pais_origen]',descripcion='$_POST[descripcion]' where id='$_POST[id]'";
    mysqli_query($mysqli, $query);
}


header ("location: ./marca2.php?insert=success"); 
