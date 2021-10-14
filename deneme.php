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

<?php

$okul = "Ankara Uni";
$okul1 ="$okul Bilgisayar Mühendisliği";
$okul2 = 2;
$okul3 = 3;

echo "<br>".$okul1;

echo "<br>".gettype($okul1);

settype ($okul,"int"); // değişken tipini değiştirme

echo "<br>".gettype($okul); //değişken tipini görme

unset($okul); //değişkeni hafızadan silme

//echo "<br>".$okul;

if (empty($okul2))
{
    echo "<br>"."okul2 değişkeninin değeri boş";
}

else
{
    echo "<br>"."okul2 değişken değeri var";

    if (is_string($okul2))
    {
        echo "<br>"."Girilen değer stringtir.";
    }
    else
    {
        if(is_int($okul2))
        {
            echo "<br>"."Girilen değer intigerdır";
        }
        else
        {
            echo "<br>"."Girilen değer int değildir";
        }
    }
}

//strval($okul3); //sayısal değşikeni stringe çevirir.
//intval($okul3); //sayısal değşikeni stringe çevirir.
//floatval($okul3); //sayısal değşikeni stringe çevirir.
echo "<br>".gettype($okul3)." ".$okul3;
echo "<br>".gettype(strval($okul3))." ".$okul3;





?>