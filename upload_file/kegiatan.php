<?php
$myDir = "C:/xampp/htdocs/prakpwd/";//direktori file tempat menyimpan file yang telah terupload

$dir = opendir($myDir); //buka direktori tersebut
echo "Isi folder (klik link untuk download : <br>"; //tampilan di web
//menampilkan isi dari direktori yang sudah ditentukan dan apabila nama filenya diklik maka akan otomatis terdownload
while($tmp = readdir($dir)){
    echo "<a href='$tmp' target='_blank'>$tmp</a><br>";
}
closedir($dir);//menutup direktori