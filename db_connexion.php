<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "enregistrement";

// Creation de la connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// vÉrification de la connexion
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());} 
  
 
