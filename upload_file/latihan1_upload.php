<?php
$lokasi_file = $_FILES['fupload']['tmp_name'];// variabel untuk menampung fupload dan lokasi sementara dari file yang akan diupload
$nama_file = $_FILES['fupload']['name']; //variabel untuk menampung nama file
$deskripsi = $_POST['deskripsi']; //variabel untuk menampung deskripsi dari file yang akan diupload
$direktori = "C:/xampp/htdocs/prakpwd/$nama_file";//direktori tempat menyimpan file yang telah diupload
// memindahkan lokasi file dari tempat penyimpanan sementara (tmp_name) ke direktori yang sudah ditentukan
if (move_uploaded_file($lokasi_file, $direktori))
{
echo "Nama File: <b>$nama_file</b> berhasil di upload <br>";// jika berhasil dipindahkan maka terdapat tulisan berhasil diupload

echo "Deskripsi File :<br>$deskripsi";// deskripsi file yang berhasil diupload

}
else {
 echo "File gagal diupload";// jika gagal memindahkan maka terdapat tulisan file gagal diupload
 
 }
