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

<img style="height:  400px;" src="sporum.jpg">
<p>Süper Lig'in 9. haftasında Fenerbahçe, deplasmanda Trabzonspor'la karşılaşacak. Sarı-lacivertlilerde teknik direktör Vitor Pereira'nın bu maçta gizli silahı Ferdi Kadıoğlu olacak. Deneyimli hoca, 22 yaşındaki futbolcusundan topla içeri kat ederek savunmanın dengesini bozmasını istedi. Ayrıca Portekizli teknik direktör takımına verdiği direktifte karşılaşma süresince ön alan baskısından asla vazgeçilmemesi gerektiğini söyledi.</p>
<br><br>
<form id="form1" name="form1" method="post" action="annketoyla.php">

  <table width="322" border="0" align="left">

    <tr>

      <td colspan="2" align="left" style="color:red">&nbsp;&nbsp;&nbsp;&nbsp;Haberimizi nasıl buldunuz?</td>

    </tr>

    <tr>

      <td width="48" align="center"><input type="radio" name="anket" id="radio2" value="5" /></td>

      <td width="264">Kesinlikle doğru bir haber</td>

    </tr>

    <tr>

      <td align="center"><input type="radio" name="anket" id="radio3" value="4" /></td>

      <td>Büyük olasılıkla doğru bir haber</td>

    </tr>

    <tr>

      <td align="center"><input type="radio" name="anket" id="radio4" value="3" /></td>

      <td>Doğru olma ihtimali var</td>

    </tr>

    <tr>

      <td align="center"><input type="radio" name="anket" id="radio" value="2" /></td>

      <td>Doğru olma ihtimali çok düşük</td>

    </tr>

    <tr>

      <td align="center"><input type="radio" name="anket" id="radio5" value="1" /></td>

      <td>Kesinlikle doğru bir haber değil</td>

    </tr>

    <tr>

      <td>&nbsp;</td>

      <td><label for="anket">

        <input type="submit" name="button" id="button" value="Gönder" />

      </label></td>

    </tr>

  </table>

  <p>&nbsp;</p>

  <p>&nbsp;</p>

  <p>&nbsp;</p>

  <p>&nbsp;</p>

  <p>&nbsp;</p>

</form>
<form action='veriler1.php' method='post'>
       <textarea name='yorum'> </textarea><br><input type='submit' value='yorum yap'>
       </form>

       <?php 
 $sql = "SELECT yorum FROM haber where id=10";
$result = $baglantı->query($sql);


    // output data of each row
     echo "<p style='font-size:50px; color:blue;' >YORUMLAR </p>";
    while($row= $result->fetch_assoc()) {
        echo "<br>  ". $row["yorum"].  "<br>";
    
    }

$baglantı->close();
?>
