<?php
///masing-masing variabel mengambil name yang ada di tampilan.html dengan method post
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$email=$_POST['email'];
$status=$_POST['status'];
$komentar=$_POST['komentar'];

echo "<head><title>My Guest Book</head></title>"; // judul web
$fp = fopen("guestbook.txt","a+");// membuka file guestbook.txt dan a+ berguna untuk membaca dan menulis, mempertahankan isi dari guestbook dan menambahkan data jika terjadi inputan di tampilan.html
fputs($fp,"$nama|$alamat|$email|$status|$komentar\n");
fclose($fp); // menutup file
echo "Terima Kasih Atas Partisipasi Anda Mengisi Buku Tamu<br>";
echo "<a href=tampilan.php> Isi Buku Tamu </a><br>";//jika diklik maka akan kembali kehalaman form guestbook
echo "<a href=lihat.php> Lihat Buku Tamu </a><br>"; //untuk melihat siapa saja yang sudah mengisi buku tamu

?>
