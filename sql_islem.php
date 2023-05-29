<?php
   include("inc/veritabaniBaglan.php");//bu kod bizim veritabaı ile bağlantımızı sağlar.
    //alttaki kod parçası bizim kullanıcımızın kayıt işlemi için kullanılır.
   if(isset($_POST['kayit'])){//burada login_index.php sayfasındaki kayit butonuna tıklanma olayına yazıyoruz.
    // Formdan gelen kullanıcı adı, mail ve şifre bilgilerini değişkenlere atıyoruz.
    $username=$_POST['username'];
    $mail=$_POST["mail"];
    $password=$_POST['password'];
    // Eğer kullanıcı adı ve şifre alanları doluysa veritabanına kaydetme işlemi yapacağız.
    // `login` tablosuna kayıt eklemek için hazırlık yapıyoruz.
    $sorgu = $db->prepare('INSERT INTO login SET name=?,password =?,mail=?');
    // Hazırladığımız sorguyu çalıştırıyoruz ve değişkenlere atadığımız verileri sorgu içinde kullanıyoruz.
    $ekle=$sorgu->execute([
        $username, $password,$mail
    ]);
    // Kaydetme işlemi başarılıysa ekrana bir mesaj yazdırıyoruz ve anasayfaya yönlendiriyoruz.
    if($ekle){
        echo "Kayıt başarıyla gerçekleşti, yönlendiriliyorsunuz";
        header('Refresh:2; login_index.php');// buradaki Refresh kodu ekranın 2 saniye bekletip daha sonra başka bir sayfaya yönlendirme yapıyor.
    }else{
         // Eğer kaydetme işlemi başarısız olursa ekrana bir hata mesajı yazdırıyoruz.
        echo "Birhata oluştu, tekrar kontrol edin";
    }
   }
  //alttaki kod parçası bizim kullanıcımızın login girişi için kullandığımız kod parçasıdır.
   if(isset($_POST['giris'])){/*Burada isset() işlevi, belirtilen değişkenin var olup olmadığını kontrol eder. $_POST['giris'] değeri, kullanıcının
     "giriş yap" düğmesine tıkladığı zaman gönderilen POST verilerinden biridir. Dolayısıyla, bu ifade, kullanıcının "giriş yap"
      düğmesine tıklaması durumunda kod bloğunun çalıştırılmasını sağlar.*/
    $username=$_POST['name'];
    $password=$_POST['pass'];

    // Bu kod, veritabanından kullanıcı bilgilerini sorgulamak için bir sorgu hazırlar. 'login' tablosundan kullanıcı adı ve şifresi eşleşen kullanıcılar seçilecektir.
    $kullanici_sor=$db->prepare('SELECT * FROM login WHERE name=? && password=?');
    //Bu kod, önceden hazırlanan sorguyu çalıştırır. Sorgu parametreleri, kullanıcı adı ve şifre değişkenleri ile değiştirilir.
    $kullanici_sor->execute([
        $username,$password
    ]);

    //Bu kod, sorgudan dönen sonuçların sayısını 'say' değişkenine atar.
    $say=$kullanici_sor->rowCount();
    // Bu kod, sorgudan dönen sonuçların sayısının 1 olduğunu kontrol eder yani bu kişi birden fazla kez kaydedildi ise giris yapabilme yeteneği elinden gidiyor. Eğer 1 ise, kullanıcı başarılı bir şekilde giriş yapmıştır.
    if($say==1){
        $_SESSION['username']=$username;/*Örneğin, kullanıcının birkaç farklı sayfada gezindiği ve siteye her girdiğinde otomatik olarak oturum bilgileriyle giriş yaptığı 
        bir durumu düşünelim. Bu oturum bilgileri sayesinde, kullanıcının kimliği doğrulanır ve kişisel bilgileri tutarlı bir şekilde görüntülenir. Oturum bilgileri 
        ayrıca, kullanıcının sayfalar arasında gezinirken tekrar kimlik doğrulaması yapmak zorunda kalmadan, siteyi daha verimli bir şekilde kullanmasını sağlar.*/
        echo "Başarıyla giriş yaptınız, yönlendiriliyorsunuz.";
        header('Refresh:2; index.php');
        // Bu kod, kullanıcıyı 2 saniye sonra index.php sayfasına yönlendirir.
    }else{
        echo "Bir hata oluştu tekrar kontrol edin";
    }
   }

//Alt satırdaki kod parçası bizim adminimizin giriş yapması için yazılan sql kod parçası.
   if(isset($_POST['girisAdmin'])){
   $username=$_POST['name'];
   $password=$_POST['pass'];

   $kullanici_sor=$db->prepare('SELECT * FROM adminlogin WHERE name=? && password=?');
   $kullanici_sor->execute([
       $username,$password
   ]);

   $say=$kullanici_sor->rowCount();
   if($say==1){
       $_SESSION['username']=$username; 
       echo "Başarıyla giriş yaptınız, yönlendiriliyorsunuz.";
       header('Refresh:2; yonetici_AnaSayfa.php');
   }else{
       echo "Bir hata oluştu tekrar kontrol edin";
   }
  }
  //Alt satırdaki kod parçası bizim menü kayıt emmemizi sağlıyor.
  if(isset($_POST['Menukayit'])){
    $menu_name = $_POST["menu_name"];
    $menu_url = $_POST['menu_url'];
    $menu_icon = $_POST['menu_icon'];
    
    $sorgu = $db->prepare('INSERT INTO menutable (menuName, menuUrl, menuikon) VALUES (?, ?, ?)');
    $ekle = $sorgu->execute([$menu_name, $menu_url, $menu_icon]);
    
    if($ekle){
        echo "Kayıt başarıyla gerçekleşti, yönlendiriliyorsunuz";
        header('Refresh:2; url=yonetici_AnaSayfa.php');
        exit;
    } else {
        echo "Bir hata oluştu, tekrar kontrol edin";
    }
}
    //Alt'daki kod parçası bizim kayıtlı menülerimizi siler
    if(isset($_POST['MenukayitSil'])){
    $menu_name = $_POST["menu_name"];
    $menu_url = $_POST['menu_url'];
    $menu_icon = $_POST['menu_icon'];

    $sorgu= $db->prepare('Delete from menutable where menuName=? AND menuUrl=? AND menuikon=?');
    $sil=$sorgu->execute([$menu_name, $menu_url, $menu_icon]);

    if($sil){
        echo "Silme başarıyla gerçekleşti, yönlendiriliyorsunuz";
        header('Refresh:2; url=yonetici_AnaSayfa.php');
        exit;
    } else {
        echo "Bir hata oluştu, tekrar kontrol edin";
    }
}
    //Alt'daki kod parçası bizim kayıtlı menülerimizi günceller-
    if(isset($_POST['Menuguncelleme'])){
    $menu_id=$_POST["menu_id"];
    $menu_name = $_POST["menu_name"];
    $menu_url = $_POST['menu_url'];
    $menu_icon = $_POST['menu_icon'];

    $sorgu = $db->prepare('UPDATE menutable SET menuUrl = ?, menuikon = ?, menuName = ? WHERE id=?');
    $guncelle=$sorgu->execute([$menu_url, $menu_icon, $menu_name, $menu_id]);
    if($guncelle){
        echo "Guncelleme başarıyla gerçekleşti, yönlendiriliyorsunuz";
        header('Refresh:2; url=yonetici_AnaSayfa.php');
        exit;
    } else {
        echo "Bir hata oluştu, tekrar kontrol edin";
    }
}

?>