<?php
$conn = new mysqli("localhost", "root", "", "bd_pasantes");
  
  if ($conn->connect_error) {
    die("ERROR: No se puede conectar al servidor: " . $conn->connect_error);
  } 
?>