<?php

$n_name = $_POST["name"];
$s_surname = $_POST["surname"];
$c_city = $_POST["city"];
$m_message = $_POST["message"];
$p_password = $_POST["password"];
$e_email = $_POST["email"];

if(empty($_POST['sex']))
{
    echo "<br>"."lütfen bir alan seçiniz";
}

else if(isset($_POST['sex']))
{
    $sex = $_POST['sex'];    
}

echo "İsminiz : ".$n_name."<br>"."Soyadınız : ".$s_surname."<br>"."E-mail adresiniz : ".$e_email."<br>"."Cinsiyet : ".$sex."<br>"."Şehriniz : ".$c_city;
echo "<br>";

if(isset($_POST['languages'])) 
{
    $languages = $_POST['languages'];
 
    echo 'Seçtiğiniz programlama dilleri: <br/>';       
 
    foreach($languages as $language)
    {
        echo ' * ' . $language . ' <br/>';
    }
}

else 
{
    echo 'Hiç programlama dili seçmediniz.';
}
print_r($languages);

echo "<br>"."Mesajınız : ".$m_message;

echo "<br>"."<a href='deneme.php'>Geri</a>";


?>