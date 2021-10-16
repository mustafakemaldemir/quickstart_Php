<?php

    /*
    phpinfo();
    echo __FILE__; //dosyanın bulunduğu dizini bastırır.
    echo __LINE__; bukodun kaçıncı satırda oluğu.
    echo PHP_VERSION; //php version

    $s1 = rand (1,100); // rastgale sayı üretme.

    echo "merhaba PHP<br>"; //<br> satır altı.
    echo "merhaba PHP"."<br>"; //aynı şekilde . birleştirmeye yarıyor.

    define('site_adi','phpr.org'); // sabit değişken tanımlama.

    echo site_adi;
    $sayi = 25; // değer atama.
    $s_sayi  = (string) $sayi; // string tipine değiştirerek değer atama.

    define('birth_day','1998'); // sabit değişken tanımlama.
    echo birth_day;
    
    sqrt(16); //karekök func.
    pow(4,2); //kat alma.
    echo strlower($degisken_name); //hepsi küçük harf.
    echo strupper($degisken_name); //hepsi büyük harf.
    echo ucwords($degisken_name); //ilk harf büyük harf.
    echo strlen(utf8_decode($degisken_name)); //dizi içeriğinde boşluklar ile beraber eleman sayısı.
    echo str_replace("search_kelime","replace_kelime",$degisken_name); //stringte belirli kelimeyi değiştir.

    var_dump($dizi); //array içeriğinin nasıl olduğunu gösterir.
    $dizi = array("mk","d","1","2"); //dizi tanımlaması.
    $dizi_1["first_element"] = "Ankara" ;
    $dizi = array("MKD" => "9", "TY" => "11"); // dictionary tarzında array ataması.
    echo $dizi[0]; //dizi elaman basımı.
    print_r($dizi); //dizi elemanlarını indis numaraları ile verir.
    echo count ($dizi); //dizi elaman sayısı.
    sort($dizi); //otomatik sıralama (smallest number to largest number).
    rsort($dizi); //otomatik sıralama (largest number to smallest number).
    asort($dizi); // anahtar yapısını bozmadan küçükten büyüğe sıralama yapıyor.
    arsort($dizi); //anahtar yapısnı bozmadan büyükten küçüğe doğru sıralama.
    krsort($dizi); // anahtara göre büyükten küçüğe doğru sıralama yapıyor.
    echo max($dizi); //en büyük eleman.
    echo min($dizi); //en küçük eleman.
    in_array(20,$dizi); // dizide aranan elaman kaç tane var?
    implode ("/",$dizi); //dizi elemanlarını belirtilen araç ile birleştirir.

    $array_name = array();

    for ($b = 0 ; $b<=5 ; $b++)
    {
        $a = array_push($array_name,$atilacak_deger); // arraya değer pushlaması
    }

    $x = array //d_array
    (
        array("a","b","c"),
        array("d","e","f"),
        array("g","h","f"),
    );

    echo &x[0][1];

    $a = array
    (
        "bir" => 1,
        "iki" => 2,
        "üç" => 3,
    );

    foreach($a as $b => $c)
    {
        echo $b."nin sayısal karşılığı = ".$c."dir"."<br>";
    }
    
    ==,<,>,<=,>=,!=,and,or (karşılaştırma kipleri)
    if ($sorgu_deger == 0) {} // karşılaştırma koşulu
    else if ($sorgu_deger == 0) {}
    else {}

    $x = ($a == 20) ? "eşit_değer" : "farklı_değer";

    switch($deger)
    {
        case 'value1' :
            ...

            break;
        
        case 'value2' :
            ...
            
            break;

        default :
            ...

    }

    for ($i = 0 ; $i<50 ; $i++)
    {
        ...
    }

    while (koşul)
    {

    }

    foreach($dizi as $key => $value) 
    {
        echo "Dizinin $key . elemanı $value 'dir <br>" ;
    }

    do
    {

    }while (condition);
    {

    }

    header ('Location : yönlendirilecek php sayfası url si');

    <?php include 'header.php'; ?> // sayfaları ilave header ekleme (kütüphane ekleme) html kodlarını templateden ayırmaya yarar.
    <?php include 'footer.php'; ?> // sayfaları ilave footer ekleme (kütüphane ekleme).
    <?php include 'sidebar.php'; ?> // sayfaları ilave sidebar ekleme (kütüphane ekleme).

------------------------------FORM-----------------------------------------------------------------------
    <table cellpadding = "5" cellspacing = "5">

    <tr>

    <td>Name</td>
    <td> <input type = "text" name ="name"/> </td>

    </tr>

    <tr>

    <td>Surname</td>
    <td> <input type = "text" name ="surname"/> </td>

    </tr>

    <tr>

    <td>Message</td>
    <td> <textarea cols="30" rows="5" name="message"></textarea> </td>

    </tr>

    <tr>
    
    <td> <input type= "submit" value = "send" /> </td>

    </tr>

    <tr>
    
    <td>Yaşadığınız Şehir</td>
    <td> 
    <select name = "city">

    <option value = "istanbul">İstanbul</option>
    
    
    </select>
    </td>

    </tr>

    </table>

---------------------------------------------------------------------------------------------------------
    DocumentRoot xampp config ayarlarında dosya dizini değiştirme.

    $okul = "Ankara Uni";
    $okul1 ="$okul Bilgisayar Mühendisliği";
    $okul2 = 2;
    $okul3 = 3;
    $okul4 = true;
    $okul5 = false;
    
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

    trim(); //verinin sağında solunda boşlukları silemeye yarar.
    rtrim(); //sağ boşluk silme
    ltrim(); //sol boşluk silme

    is_string();
    is_int();
    is_float;

    ||,&&,! //mantıksal operatörler







    
    */
?>