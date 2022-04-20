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
<body style="background-color:white;">


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

<img style="height:  400px;" src="spor.jfif">
<p style="color:red;" class="card-text">Juventus kulübünden kaçan transfer haberinden büyük itiraf</p>
<textarea name='yorum'> </textarea><br><input type='submit'  value='yorum yap'><br><br>
       

  <table width="322" border="0" align="left">

    <tr>

      <td colspan="2" align="left" style="color:red">&nbsp;&nbsp;&nbsp;&nbsp;Haberimizi nasıl buldunuz?</td>

    </tr>
   <form method="post" action="anketoyla.php">
    <tr>

      <td width="48" align="center"><input type="submit" name="anket" id="1" value="oy kullan" /></td>            

      <td width="264">Kesinlikle doğru bir haber</td>

    </tr>
</form>
<form method="post" action="anketoyla1.php">
    <tr>

      <td align="center"><input type="submit" name="anket" id="2" value="oy kullan" /></td>                            

      <td>Büyük olasılıkla doğru bir haber</td>

    </tr>
</form>
<form method="post" action="anketoyla2.php">

    <tr>

      <td align="center"><input type="submit" name="anket" id="3" value="oy kullan" /></td>

      <td>Doğru olma ihtimali var</td>

    </tr>
</form>
<form method="post" action="anketoyla3.php">
    <tr>

      <td align="center"><input type="submit" name="anket" id="4" value="oy kullan" /></td>

      <td>Doğru olma ihtimali çok düşük</td>

    </tr>
</form>
<form method="post" action="anketoyla4.php">
    <tr>

      <td align="center"><input type="submit" name="anket" id="5" value="oy kullan" /></td>

      <td>Kesinlikle doğru bir haber değil</td>

    </tr>
</form>
    <tr>

      <td>&nbsp;</td>

    

    </tr>
    <!--<form method="post" action="anketimoyla.php"> <table>
  <h6 style="color:blue; border-style:dotted;">Bu haber sizin için önemli mi?</h6>
<tr><td width="48"><input type="submit" name="anket" id="1" value="oy kullan"  /> Evet önemli bir haber.</form><form method="post" action="anketimoyla1.php">
<input type="submit" name="anket" id="1" value="oy kullan" /> Hayır önemli bir haber değil.</td></tr>
</form> -->
</table>

</form>
  </table>

  <p>&nbsp;</p>

  <p>&nbsp;</p>

  <p>&nbsp;</p>

  <p>&nbsp;</p>

  <p>&nbsp;</p>


      
<form action='veriler1.php' method='POST'>
       
 </form>
 <?php 
 $sql = "SELECT yorum FROM haber where id=1";
$result = $baglantı->query($sql);


    // output data of each row
     echo "<p style='font-size:50px; color:blue; border:double;' >YORUMLAR </p>";
    while($row= $result->fetch_assoc()) {
        echo "<br>  ". $row["yorum"].  "<br>";
    
    }

$baglantı->close();
?>



  




