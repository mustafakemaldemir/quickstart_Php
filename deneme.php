<?php
    
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