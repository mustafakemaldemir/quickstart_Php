<style type = "text/css">

img
{
    border : 1.5px solid #ddd;
    width  : 200px;
    height : 200px;
    margin-left : 10px;
    margin-top  : 10px;
}

</style>

<?php

    //opendir(); //dosya açmak
    //readdir(); //dosyayı okumak
    //closedir(); //dosyayı kapatmak

    $file_path = "files/";
    $open_file = opendir($file_path);

    while($x = readdir($open_file))
    {
        if($x != "." && $x != "..")
        {
            echo "<a href = 'files/{$x}'><img src = 'files/{$x}'/></a>";
        }
        
    }

    $y = closedir($open_file);

?>