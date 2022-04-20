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
      <a class="nav-link active" href="#">Anasayfa</a>
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
      <a class="nav-link" href="#">Hakkımızda</a>
    </li>
  </ul>
</div>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div style="background-color:blue;" class="carousel-inner">
    <div class="carousel-item active">
      <img  style="height:300px;width:900;"src="ekonomi.jpg" alt="Los Angeles">
    </div>

    <div class="carousel-item">
    
    
      <img style="height:300px;width:900px;"  src="ekonomi1.jpg" alt="Chicago">
</div>
    <div class="carousel-item">
      <img  style ="height:300px;width:900px;" src="ekonomi2.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
<div class="container mt-3" >
      <div class="row">
    
          <div class="col-md-4">
            <div class="card">
              <img class="card-img-top"  src="spor.jfif" alt="image" style="width:300px;height:300;">
              <div class="card-body">
                <h4 class="card-title">Transfer Haberi</h4>
                <p class="card-text">Juventus kulübünden kaçan transfer haberinden büyük itiraf</p>
                <a href="anasayfadetay.php" class="btn btn-primary">Detaylı incele</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img class="card-img-top" src="bilim.jfif" alt="image" style="width:300px;height:300;">
              <div class="card-body">
                <h4 class="card-title">Uzayda yaşayan hayvan</h4>
                <p class="card-text">Bu hayvan uzaydada yaşıyor Bilim insanları hayretler içinde</p>
                <a href="anasayfadetay2.php" class="btn btn-primary">Detaylı incele</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card" >
              <img class="card-img-top" src="bilim1.jfif" alt="image" style="width:300px;height:300px;">
              <div class="card-body">
                <h4 class="card-title">Göktaşı dünyaya yaklaşıyor.</h4>
                <p class="card-text">Nasadan korkutan göktaşı açıklaması göktaşı dünyaya yaklaşıyor.</p>
                <a href="anasayfadetay3.php" class="btn btn-primary">Detaylı incele</a>
              </div>
            </div>
          </div>
    
      </div>


</body>
</html>
