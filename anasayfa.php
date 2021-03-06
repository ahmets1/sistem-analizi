<!DOCTYPE html>
<html lang="en">
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
   
    .row.content {height: 550px}
    
    
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
        
    @media screen and (max-width: 767px) {
      .row.content {height: auto;}
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Anasayfa</a></li>
        <li><a href="dokumanlar.php">Dosyalar</a></li>
        <li><a href="dosya_ekle.php">Dosya Ekle</a></li>
        
        <li><a href="dosya_ara.php">Dosya Arama</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
     
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Anasayfa</a></li>
        <li><a href="dokumanlar.php">Dosyalar</a></li>
        <li><a href="dosya_ekle.php">Dosya Ekle</a></li>
        
        <li><a href="dosya_ara.php">Dosya Arama</a></li>
      </ul><br>
    </div>
    <br>
    
    <div class="col-sm-9">
      <div class="well">
        <h4>Anasayfa</h4>
        <p>Hoşgeldiniz.Bu program sayesinde dosya kontrolü yapabilirsiniz.</p>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
            <h4>Dosyalar</h4>
            <p>Bu kısımda yüklediğiniz ve yüklenmiş olan tüm dosyaları görebilirsiniz.</p>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Dosya Ekle</h4>
            <p>Bu kısımda sisteme istediğiniz dosya ekleyebilirsiniz.</p>
          </div>
        </div>
       
        <div class="col-sm-3">
          <div class="well">
            <h4>Dosya Arama</h4>
            <p>Bu kısımda aradığınız dosya sistemde var mı kontrol edebilirsiniz.</p>
          </div>
        </div>
      </div>
     <br/>
    <div class="col-lg-12">
      <div class="well">
      <p>Sistemden çıkış yapmak için <a href="logini.php">tıklayınız</a></p>
      </div>
      </div>
      
</body>
</html>
