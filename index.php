<div class="upside">
  <?php
    include("inc/head.php");
  ?> 
    <div class="container">
      <div class="row">
        <div class="col-md-4" id="main_Contant">
          <h2>Geleceği Bizimle Kodla</h2>
          <!--alt satır bir çizgi oluşturup sola kaydırıyor-->
          <hr width="300" class="mb-0">
          <p>Biz, yazılımın gücüne inanan bir ekibiz ve bu gücü dünyanın dört bir yanındaki insanlarla paylaşmak istiyoruz. Yazılım eğitimini herkesin erişebileceği hale getirerek, herkesin hayatını kolaylaştırmaya ve işlerini geliştirmeye yardımcı olmak istiyoruz.</p>     
        </div>
      </div>
    </div>
  </div> 
  <div class="container" id="aboutUs">
    <h3 class="h3l">Hakkımızda</h3>
    <div class="row" id="aboutWrite">
      <div class="col-md-12 col-12">
        <p>2023 yılında açılan yeni bir yazılım eğitim sitesi, teknolojinin hızla geliştiği ve dijital dünyanın önem kazandığı bu çağda oldukça önemli bir girişim olarak karşınıza çıkıyoruz. Bu sebeple size eğitim yanı sıra gelecek kurma fırsatı veriyoruz. Dünyanın yenilikçi yapısına ayak uydurmanızı sağlıyoruz. Bütün üyelerimize en son teknoloji ve gelişmeler ile güncel tuttuğumuz gibi geçmişdeki önemli teknolojiler ile de sizleri yazılım dünyasının aranan yüzleri haline getirmeyi planlıyoruz.</p> 
        <img src="img/banner1.jpg" alt="logo" class="img-fluid">
      </div>
    </div>
  </div>  
  <section id="education">
    <div class="container">
      <h3 class="educationTitle">Eğitimler</h3>
      <!--alt satırdaki div yapısının içine own yapımızı kullana bilmek için kütüphaneleri dahil ettim.-->
      <div class="owl-carousel own-theme pt-4">
        <!--alttaki her satırda "data-merge=1.5" özelliğini kullandım çünkü cardların own yapısındaki şekle oturması gerekiyor. kullandığım fotoğrafların yapısı own yapısına büyük geldi ve ben bu sorunu böyle çözdüm -->
        <div class="card" data-merge="1.5">
          <a href="egitimDetay.php"><img src="img/r1.jpg" alt="logo" class="img-fluid"></a>
          <h5 class="titleCard">HTML5 ve CSS3 Eğitimleri</h5>
          <p class="cardp">sıfırdan ileri düzey eğitim serisi.</p>
        </div>
        <div class="card" data-merge="1.5">
          <a href="egitimDetay.php"><img src="img/r2.jpg" alt="logo" class="img-fluid"></a>
          <h5 class="titleCard">HTML5 ve CSS3 Eğitimleri</h5>
          <p class="cardp">sıfırdan ileri düzey eğitim serisi.</p>
        </div>
        <div class="card" data-merge="1.5">
          <a href="egitimDetay.php"><img src="img/r3.jpg" alt="logo" class="img-fluid"></a>
          <h5 class="titleCard">HTML5 ve CSS3 Eğitimleri</h5>
          <p class="cardp">sıfırdan ileri düzey eğitim serisi.</p>
        </div>
        <div class="card" data-merge="1.5">
          <a href="egitimDetay.php"><img src="img/r4.jpg" alt="logo" class="img-fluid"></a>
          <h5 class="titleCard">HTML5 ve CSS3 Eğitimleri</h5>
          <p class="cardp">sıfırdan ileri düzey eğitim serisi.</p>
        </div>
        <div class="card" data-merge="1.5">
          <a href="egitimDetay.php"><img src="img/r5.jpg" alt="logo" class="img-fluid"></a>
          <h5 class="titleCard">HTML5 ve CSS3 Eğitimleri</h5>
          <p class="cardp">sıfırdan ileri düzey eğitim serisi.</p>
        </div>
        <div class="card" data-merge="1.5">
          <a href="egitimDetay.php"><img src="img/r6.jpg" alt="logo" class="img-fluid"></a>
          <h5 class="titleCard">HTML5 ve CSS3 Eğitimleri</h5>
          <p class="cardp">sıfırdan ileri düzey eğitim serisi.</p>
        </div>
        <div class="card" data-merge="1.5">
          <a href="egitimDetay.php"><img src="img/r7.jpg" alt="logo" class="img-fluid"></a>
          <h5 class="titleCard">HTML5 ve CSS3 Eğitimleri</h5>
          <p class="cardp">sıfırdan ileri düzey eğitim serisi.</p>
        </div>
      </div>
    </div>
  </section>
  <section id="educator">
    <div class="container">
      <h3 id="educatorh3">Eğitmenler</h3>
      <div class="row">
        <div class="col-md-4 col-sm-4">
          <div>
            <!--class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top" kısmı bizim bootstraptan aldığım tooltip kodları.-->
            <img src="img/ekip1.jpg" alt="logo" class="img-fluid oval">
            <!--alt satırdaki yer oval kısmı css de fotoğrafı oval yapmamıza yardım edecek class ismirdir-->
            <h4 class="educatorName">Hakan Kavak</h4>
            <p class="educatorp">
              Ege Üniversitesi Yazılım mühendisi ve yan dal donanım uzmanı.
            </p>
            <div class="egitmen-icon">
              <a href="#"><i class="fa-brands fa-facebook social"></i></a>
              <a href="https://www.linkedin.com/in/f%C4%B1rat-i%C5%9F%C4%B1ldak-608176250/"><i class="fa-brands fa-linkedin social"></i></a>
              <a href="#"><i class="fa-brands fa-github social"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div>
            <img src="img/ekip2.jpg" alt="logo" class="img-fluid oval">
            <h4 class="educatorName">Sibel Gündüz</h4>
            <p class="educatorp">
              Ege Üniversitesi Yazılım mühendisi ve yan dal donanım uzmanı.
            </p>
            <div class="egitmen-icon">
              <a href="#"><i class="fa-brands fa-facebook social"></i></a>
              <a href="https://www.linkedin.com/in/f%C4%B1rat-i%C5%9F%C4%B1ldak-608176250/"><i class="fa-brands fa-linkedin social"></i></a>
              <a href="#"><i class="fa-brands fa-github social"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div>
            <img src="img/ekip3.jpg" alt="logo" class="img-fluid oval">
            <h4 class="educatorName">İpek Camcı</h4>
            <p class="educatorp">
              Ege Üniversitesi Yazılım mühendisi ve yan dal donanım uzmanı.
            </p>
            <div class="egitmen-icon">
              <a href="#"><i class="fa-brands fa-facebook social"></i></a>
              <a href="https://www.linkedin.com/in/f%C4%B1rat-i%C5%9F%C4%B1ldak-608176250/"><i class="fa-brands fa-linkedin social"></i></a>
              <a href="#"><i class="fa-brands fa-github social"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="communication">
    <div class="container">
      <h2 id="hColor">İletişim</h2>
      <div class="row" id="opaqueRow">
        <div class="col-md-6 col-12">
          <div class="row">
            <div class="col-md-6">
              <label for="exampleFormControlInput1" class="form-label"></label>
              <!--alt satırdaki class kısmındaki form-control-lg yapısı bizim kutularımızın boyutunu ayarlar lg büyük sm küçük vb.-->
              <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Ad Soyad">
            </div>
            <div class="col-md-6">
              <label for="exampleFormControlInput1" class="form-label"></label>
              <input type="email" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Email Adresiniz">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="exampleFormControlInput1" class="form-label"></label>
              <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Telefon Numarası">
            </div>
            <div class="col-md-6">
              <label for="exampleFormControlInput1" class="form-label"></label>
              <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Konu Başlığı">
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="exampleFormControlTextarea1" class="form-label"></label>
              <textarea class="form-control form-control-lg" id="exampleFormControlTextarea1" placeholder="Mesaj Giriniz" rows="6"></textarea>
            </div>
          </div>
          <button type="button" class="btn btn-primary mt-5 mb-4 pe-5 ps-5">Gönder</button>
        </div>
        <div class="col-md-6 mt-4 mb-3">
          <div class="map-area">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49747.59878108741!2d26.926306506617024!3d38.80439927362403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14ba304605416a23%3A0xa3901eb7112b67fe!2zQWxpYcSfYSwgU2FtdXJsdSwgQWxpYcSfYS_EsHptaXI!5e0!3m2!1str!2str!4v1680784012105!5m2!1str!2str" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
    <?php
      include("inc/footer.php");
    ?>
  </section>
  <!--alt satır own Carouselden bilgisyarımızda olmayan kısmı yani kütüphanesini netten çağırmak için kullandığımız link -->
  <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js" integrity="sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw=" crossorigin="anonymous"></script>
  <!--alt satırdaki bağlantıyı own Carouselden indirmiş olduğum owl dosyasındaki bağlantılar ile bağladım card yapıları kendi kendine kaya bilsin diye. javascript kısmı-->
  <script src="owl/owl.carousel.min.js"></script>
  <!--alt satır bootstrap bağlantısını sağlıyor.-->
  <script src="bootstrap.js"></script>
  <!--alt satır bizim javascript kısmımız ile bağlantıyı sağlıyor. Bu bağlantıyı en alta yazdım çünkü kart yapısını oluşturmadan javascript dosyasını oluşturmak mantıklı değil.-->
  <script src="owl/script.js"></script>	
</body>
</html>