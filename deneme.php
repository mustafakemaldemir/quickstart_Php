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

<h1> İletişim Formu </h1>

<form action = "iletisim.php" method = "get">

<table cellpadding = "5" cellspacing = "5">

    <tr>

    <td><b>Name : </b></td>
    <td> <input type = "text" name ="name"/> </td>

    </tr>
<!--  -------------------------------------------------------   -->
    <tr>

    <td><b>Surname : </b></td>
    <td> <input type = "text" name ="surname"/> </td>

    </tr>

<!--  -------------------------------------------------------   -->    

    <tr>
    
    <td><b>City of residance :</b></td>
    <td> 
    <select name = "city">

    <option value = "istanbul">İstanbul</option>
    <option value = "ankara">Ankara</option>
    <option value = "eskişehir">Eskişehir</option>
    <option value = "izmir">İzmir</option>
    
    
    </select>
    </td>

    </tr>

<!--  -------------------------------------------------------   -->    

    <tr>

    <td><b>Message :</b> </td>
    <td> <textarea cols="30" rows="5" name="message"></textarea> </td>

    </tr>

<!--  -------------------------------------------------------   -->    

    <tr>
    
    <td> <input type= "submit" value = "send" /> </td>

    </tr>

<!--  -------------------------------------------------------   -->    

</table>

</form>

<?php

    $a = array
    (
        "bir" => 1,
        "iki" => 2,
        "üç" => 3,
    );

    foreach($a as $b => $c)
    {
        echo $b." değerinin sayısal karşılığı = ".$c." dir"."<br>";
    }





?>