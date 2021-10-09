<?php
    
    /*
    echo "merhaba PHP<br>"; //<br> satır altı
    echo "merhaba PHP"."<br>"; //aynı şekilde . birleştirmeye yarıyor
    phpinfo();
    define('site_adi','phpr.org');
    echo site_adi;
    $sayi = 25; // değer atama
    define('birth_day','1998'); //değişken tanımlama
    echo birth_day;
    sqrt(16); //karekök func
    pow(4,2); //kat alma
    echo strlower($degisken_name); //hepsi küçük harf
    echo strupper($degisken_name); //hepsi büyük harf
    echo ucwords($degisken_name); //ilk harf büyük harf
    echo strlen(utf8_decode($degisken_name)); //dizi içeriğinde boşluklar ile beraber eleman sayısı
    echo str_replace("search_kelime","replace_kelime",$degisken_name); //stringte belirli kelimeyi değiştir.
    */
    
    //Değişken tanımlama yöntemleri
    $name = "Mustafa Kemal";
    $surname = "DEMİR";
    $birth_day = 1998;
    $edu = "Ankara Üniversitesi";
    define("department","Bilgisayar Mühendisliği");
    
    //Kaçış işareti kullanımı sağındaki işareti yok sayar.
    echo "Bu internet sitesinin alan adı <b>\"www.mkd.com.tr\"</b>'dir."."<br>";      
    echo "<b>My Information<br></b>";
    echo "<b>Ad :</b> ".$name."<br>";
    echo "<b>Soyad Ad :</b> ".$surname."<br>";
    echo "<b>Doğum Tarihi :</b> ".$birth_day."<br>";
    echo "<b>Üniversite :</b> ".$edu."<br>";
    echo "<b>Bölüm :</b> ".department."<br>";
?>