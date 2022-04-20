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
  <p style="color:purple;">Türkiyede bir ilk saygıdeğer vatandaşlarımız artık haberlerin güvenilirliği ölçülelebilecek.Hangi haber daha güvenli siz karar verebileceksiniz.</p>
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
  <div class="container mt-3" >
      <div class="row">
    
          <div class="col-md-4">
            <div class="card">
              <img class="card-img-top"  src="teknoloji1.jpg" alt="image" style="width:300px;height:300;">
              <div class="card-body">
                <h4 class="card-title">Batarya sorununa çare bulundu</h4>
                <p class="card-text">Türk bilim adamları batarya sorununa çare buldular.Bitmeyen batarya buldular.</p>
                <a href="Teknolojidetay.php" class="btn btn-primary">Detaylı incele</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img class="card-img-top" src="teknoloji2.jpg" alt="image" style="width:350px;height:300;">
              <div class="card-body">
                <h4 class="card-title">Uzayda yaşayan hayvan</h4>
                <p class="card-text">Bu hayvan uzaydada yaşıyor Bilim insanları hayretler içinde</p>
                <a href="teknolojidetay2.php" class="btn btn-primary">Detaylı incele</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card" >
              <img class="card-img-top" src="bilim1.jfif" alt="image" style="width:300px;height:300px;">
              <div class="card-body">
                <h4 class="card-title">Göktaşı dünyaya yaklaşıyor.</h4>
                <p class="card-text">Nasadan korkutan göktaşı açıklaması göktaşı dünyaya yaklaşıyor.</p>
                <a href="teknolojidetay3.php" class="btn btn-primary">Detaylı incele</a>
              </div>
            </div>
          </div>
    
      </div>