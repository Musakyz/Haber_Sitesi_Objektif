<?php
include("baglantı.php");
?>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>


  <div class="container">
  <h2>OBJEKTİF HABERE HOŞGELDİNİZ</h2> <img src= "objektif.png">
  <p style="color:purple;">Objektif haber Türkiyede haberciliğe bir ilk getiren halktan yana olan halkın sesi olan bir haber sitesidir.</p>
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" href="Objektif haber.php">Anasayfa</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="Teknoloji.php">Teknoloji</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="bilim.php">Bilim</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="ekonomi.php">Ekonomi</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="spor.php">Spor</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="Hakkımızda.php">Hakkımızda</a>
    </li>
  </ul>
</div>

<img style="height:  400px;" src="bilim.jfif">
<p>Bu hayvan uzaydada yaşıyor Bilim insanları hayretler içinde</p>
<br><br>


  <table width="322" border="0" align="left">

    <tr>

      <td colspan="2" align="left" style="color:red">&nbsp;&nbsp;&nbsp;&nbsp;Haberimizi nasıl buldunuz?</td>

    </tr>
     <form method="post" action="anketoyla5">
    <tr>

      <td width="48" align="center"><input type="button" name="anket" id="radio2" value="oy kullan" /></td>

      <td width="264">Kesinlikle doğru bir haber</td>

    </tr>
</form>
<form method="post" action="anketoyla6">
    <tr>

      <td align="center"><input type="button" name="anket" id="radio3" value="oy kullan" /></td>

      <td>Büyük olasılıkla doğru bir haber</td>

    </tr>
</form>
<form method="post" action="anketoyla7">
    <tr>

      <td align="center"><input type="button" name="anket" id="radio4" value="oy kullan" /></td>

      <td>Doğru olma ihtimali var</td>

    </tr>
</form>
<form method="post" action="anketoyla8">
    <tr>

      <td align="center"><input type="button" name="anket" id="radio" value="oy kullan" /></td>

      <td>Doğru olma ihtimali çok düşük</td>

    </tr>
</form>
<form method="post" action="anketoyla9">
    <tr>

      <td align="center"><input type="button" name="anket" id="radio5" value="oy kullan" /></td>

      <td>Kesinlikle doğru bir haber değil</td>

    </tr>
</form>


  </table>

  <p>&nbsp;</p>

  <p>&nbsp;</p>

  <p>&nbsp;</p>

  <p>&nbsp;</p>

  <p>&nbsp;</p>

</form>
<form action='veriler2.php' method='post'>
       <textarea name='yorum'> </textarea><br><input type='submit' value='yorum yap'>
       </form>
       <?php 
 $sql = "SELECT yorum FROM haber where id=2";
$result = $baglantı->query($sql);


    // output data of each row
     echo "<p style='font-size:50px; color:blue;' >YORUMLAR </p>";
    while($row= $result->fetch_assoc()) {
        echo "<br>  ". $row["yorum"].  "<br>";
    
    }

$baglantı->close();
?>