<?php

include("baglantı.php");
$yorum=$_POST["yorum"];

$ekleme="INSERT INTO haber(id,yorum) VALUES(14, '$yorum')";
$baglantı->query($ekleme);


echo ("yorumunuz için çok teşekkür ederiz");

?>
<html>
  <head>
    <meta http-equiv="refresh" content="3; URL=http://localhost/DOĞRUHABER/teknolojidetay2.php">
  </head>

<head>
</html>