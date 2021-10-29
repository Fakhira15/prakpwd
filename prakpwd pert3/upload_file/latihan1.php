<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width-device-width, initial-scale-1.0">
        <tittle>upload file</tittle>
    </head> 
<body>        
<form enctype="multipart/form-data" method="post" action="latihan1_upload.php"><!-- form dengan atribut enctype selalu
menggunakan method post dan apabila tombol submit dilakukan aksi/diklik maka
akan diarahkan ke halaman latihan1_upload.php-->
File yang diupload: <input type="file"name="fupload"><br> <!-- file yang
diupload bertype file dengan nama fupload -->
Deskripsi File: <br><textarea name="deskripsi" rows="6" cols="20"></textarea><br><!-- tempat untuk menuliskan deskripsi file -->
<input type=submit value=Upload><!-- tombol submit -->

</form>
<br>
<a href="kegiatan.php">klik untuk unduh</a>
</body>
</html>