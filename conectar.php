<?php
$mysqli= new mysqli("localhost", "root", "", "practica");

if ($mysqli->connect_errno) {
    echo "no soporto: (". $mysqli->connect_errno . ") " . $mysqli->connect_errno; 
}; 
?>