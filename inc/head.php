<?php
   include("inc/veritabaniBaglan.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=0"> <!--user-scalable=0 bu kod ile sitenin mobilde yakınlaşırma ve uzaklaştırmayı önlüyor.-->
<!--alt satır bizim bootstrap ile olan bağlantımızın css kısmını bağlıyor.-->
<link rel="stylesheet"  href="bootstrap.css">
<title>Anasayfa | Kod Dünyası</title>
<!--Alt'daki php kod parçası bizim her sayfa için ayrı olan css dosyalarının bağlantı koşullarını burada oluşturuyor.-->
<?php
    $page = basename($_SERVER['PHP_SELF']);//$_SERVER['PHP_SELF'], şu anki çalışan PHP dosyasının adını ve yolu içeren bir süper global değişkendir. basename() fonksiyonu ise bir dosya yolunun dosya adını döndürür. Dolayısıyla $page değişkeni, şu anki çalışan PHP dosyasının adını içerecektir.
    $cssFile = '';

    switch($page) {
        case 'index.php':
          $cssFile = './css/style.css';//"./css/". bunu echodan sonra yazabilirsin. kodun kısalmış olur.
          break;
        case 'egitimDetay.php':
          $cssFile = './css/egitimDetayStyle.css';
          break;
        case 'egitimler.php':
          $cssFile = './css/egitimlerStyle.css';
          break;
        case 'yonetici_AnaSayfa.php':
          $cssFile = './css/egitimlerStyle.css';
          break;
    }
?>
<link rel="stylesheet" href="<?php echo $cssFile; ?>"><!--bu kodda üstteki php kodunun devamı.-->
<!--alt satır font awesome ile bağlantıyı sağlıyor-->
<script src="https://kit.fontawesome.com/0761d8fd00.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/@popperjs/core@2.10.1/dist/umd/popper.min.js"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<!--alt satır yazı fontu için seçmiş olduğum kütüphane linki-->
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">
<!--alt satırdaki bağlantıyı own Carouselden indirmiş olduğum owl dosyasındaki bağlantılar ile bağladım card yapıları kendi kendine kaya bilsin diye.   CSS kısmı-->
<link rel="stylesheet" href="owl/owl.carousel.min.css">
<link rel="stylesheet" href="owl/owl.theme.default.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg nav-bg"><!--yandaki nav-bg classı bizim navbarın rengini css kısmında değiştirmemiz için kullandığımız bir classtır. -->
    <div class="container">
      <img id="logoSize" src="img/benimLogo.png" alt="logo">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!--ms-auto bu kısım menüyü ortalıyor.-->
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item d-flex"> <!--buradaki d-flex yapısı oluşturulan <span class="brace">|</span> ayraçları iconların yanlarına almasını sağlıyor.-->
            <!--alt satırdaki iconları Font Awesome kısmından aldım.-->
            <a class="nav-link active" aria-current="page" href="index.php"><i class="fa-solid fa-house icon"></i>Anasayfa</a>
            <span class="brace">|</span>
          </li>
          <li class="nav-item d-flex">
            <a class="nav-link active" aria-current="page" href="index.php#aboutUs"><i class="fa-solid fa-info icon"></i>Hakkımızda</a>
            <span class="brace">|</span>
          </li>
          <li class="nav-item d-flex">
            <a class="nav-link active" aria-current="page" href="egitimler.php"><i class="fa-solid fa-graduation-cap icon"></i>Eğitimler</a>
            <span class="brace">|</span>
          </li>
          <li class="nav-item d-flex">
            <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-cart-shopping icon"></i>Sepet</a>
            <span class="brace">|</span>
          </li>
          <li class="nav-item d-flex">
            <a class="nav-link active" aria-current="page" href="index.php#opaqueRow"><i class="fa-solid fa-map-pin icon"></i>İletişim</a>
            <span class="brace">|</span>
          </li>
          <li class="nav-item d-flex">
            <a class="nav-link active" aria-current="page" href="index.php#educator"><i class="fa-solid fa-people-group icon"></i>Eğitmenler</a>
            <span class="brace">|</span>
          </li>
          <li class="nav-item d-flex">
            <a class="nav-link active" aria-current="page" href="login_index.php"><i class="fa-solid fa-right-to-bracket icon"></i>Giriş&Kayıt</a>
          </li>
        </ul>
      </div>
    </div> 
  </nav>