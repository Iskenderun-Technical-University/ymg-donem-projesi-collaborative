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
    $kullanici_sor=$db->prepare('SELECT * FROM login WHERE name=? && password=?');//prepare bu komut sorguyu execute den önce hazır hale getiriyor.
    //Bu kod, önceden hazırlanan sorguyu çalıştırır. Sorgu parametreleri, kullanıcı adı ve şifre değişkenleri ile değiştirilir.
    $kullanici_sor->execute([
        $username,$password
    ]);

    //Bu kod, sorgudan dönen sonuçların sayısını 'say' değişkenine atar.
    $say=$kullanici_sor->rowCount();
    // Bu kod, sorgudan dönen sonuçların sayısının 1 olduğunu kontrol eder yani bu kişi birden fazla kez kaydedildi ise giris yapabilme yeteneği elinden gidiyor. Eğer 1 ise, kullanıcı başarılı bir şekilde giriş yapmıştır.
    if($say==1){
        echo "Başarıyla giriş yaptınız, yönlendiriliyorsunuz.";
        header('Refresh:2; index.php');
        // Bu kod, kullanıcıyı 2 saniye sonra index.php sayfasına yönlendirir.
    }else{
        echo "Bir hata oluştu tekrar kontrol edin";
    }
   }

?>