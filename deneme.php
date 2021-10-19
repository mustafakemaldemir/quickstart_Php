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

<form action = "iletisim.php" method = "POST" enctype = "multipart/form-data">

<table cellpadding = "5" cellspacing = "5">

<!--  -------------------------------------------------------   -->
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

    <td><b>E-mail : </b></td>
    <td> <input type = "text" name ="email"/> </td>

    </tr>
<!--  -------------------------------------------------------   -->
    <tr>

    <td><b>Password : </b></td>
    <td><input type = "password" name= "password"/></td>
    
    </tr>
<!--  -------------------------------------------------------   -->
    <tr>

    <td><b>Sex Type : </b></td>
    <td>

        <input type = "radio" name= "sex" value="Male"/>Male<br>
        <input type = "radio" name= "sex" value="Female"/>Female

    </td>
    </tr>
<!--  -------------------------------------------------------   -->
    <tr>
    
    <td><b>City of residance :</b></td>
    <td> 

    <select name = "city">

    <option value = "İstanbul">İstanbul</option>
    <option value = "Ankara">Ankara</option>
    <option value = "Eskişehir">Eskişehir</option>
    <option value = "İzmir">İzmir</option>
    
    
    </select>

    </td>

    </tr>
<!--  -------------------------------------------------------   -->
    <tr>
    
    <td><b>Member's University :</b></td>
    <td> 
    <select name="member_university" multiple>

    <option selected="" value="none">Hiçbiri</option>

    <optgroup label="ANKARA">
    <option value="Ankara Üniversitesi">Ankara Üniversitesi</option>
    <option value="Ortadoğu Teknik Üniversitesi">Ortadoğu Teknik Üniversitesi</option>
    <option value="Hacettepe Üniversitesi">Hacettepe Üniversitesi</option>
    </optgroup>

    <optgroup label="ESKİŞEHİR">
    <option value="Anadolu Üniversitesi">Anadolu Üniversitesi</option>
    <option value="Eskişehir Osmangazi Üniversitesi">Eskişehir Osmangazi Üniversitesi</option>
    <option value="Eskişehir Teknik Üniversitesi">Eskişehir Teknik Üniversitesi</option>
    </optgroup>

    <optgroup label="İSTANBUL">
    <option value="Boğaziçi Üniversitesi">Boğaziçi Üniversitesi</option>
    <option value="Yıldız Teknik Üniversitesi">Yıldız Teknik Üniversitesi</option>
    <option value="İstanbul Teknik Üniversitesi">İstanbul Teknik Üniversitesi</option>
    </optgroup>

    </select>

    </td>

    </tr>
<!--  -------------------------------------------------------   -->
    <tr>

    <td><b>Membership Language :</b> </td>

    <td>

        <input type = "checkbox" name = "languages[]" value = "HTML" checked= "on"/>HTML<br>
        <input type = "checkbox" name = "languages[]" value = "PHP"/>PHP<br>
        <input type = "checkbox" name = "languages[]" value = "C++"/>C++<br>
        <input type = "checkbox" name = "languages[]" value = "PYTHON"/>PYTHON

    </td>
    
    </tr>
<!--  -------------------------------------------------------   -->    
    <tr>

    <td><b>Message :</b> </td>
    <td> <textarea cols="30" rows="5" name="message"></textarea> </td>

    </tr>
<!--  -------------------------------------------------------   -->
    <tr>

    <td><b>Upload Image :</b> </td>
    <td><input type = "file" name = "file"/></td>

    </tr>
<!--  -------------------------------------------------------   -->
    <tr>
    
    <td>
        <input type= "submit" value = "send" /> 
        <input type= "reset" value = "reset" />
    </td>

    </tr>
<!--  -------------------------------------------------------   -->

</table>

</form>