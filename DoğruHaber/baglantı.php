<?php
$servername = "localhost";
$username = "root";
$password = "12345";


// Create connection
$baglantı =   mysqli_connect("localhost","root",12345,"proje",3307);
// Check connection
if ($baglantı->connect_error) {
  die("Connection failed: " . $baglantı->connect_error);
  
}



?>