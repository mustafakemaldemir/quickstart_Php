<?php

$n_name = $_POST["name"];
$s_surname = $_POST["surname"];
$c_city = $_POST["city"];
$m_message = $_POST["message"];
$p_password = $_POST["password"];
$e_email = $_POST["email"];

/*
$_FILES["gönderilen_name"]["istenilen_özellik"];
tmp_name //dosya konumu
name
size
type
is_uploaded_file
move_uploaded_file 
*/

$max_size = 1000000;
//$file_extension = substr($_FILES["file"]["name"],-4,4);
$file_extension = $_FILES["file"]["type"];
$file_name = rand(0,1000).$_FILES["file"]["name"];
$file_path = "files/".$file_name;

if ($_FILES["file"]["size"] > $max_size )
{
    echo "Dosyanın boyutu 1 mb veya daha az olmalıdır"."<br>";
    echo "<br>"."<a href='deneme.php'>Geri</a>";
}

else
{
    if ($file_extension == "image/jpeg" || $file_extension == "image/png" )
    {
        if(is_uploaded_file($_FILES["file"]["tmp_name"]))
        {
            $if_success_upload_file = move_uploaded_file($_FILES["file"]["tmp_name"],$file_path);
        }
        else
        {
            echo "<br>"."Dosya yüklenmesi sırasında bir hata meydana geldi";
            echo "<br>"."<a href='deneme.php'>Geri</a>";
        }

    }

    else
    {
        echo "<br>"."Sadece jpg,jpeg,png formatında dosyalar yükliyeblirsiniz!";
        echo "<br>"."<a href='deneme.php'>Geri</a>";
    }
}

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