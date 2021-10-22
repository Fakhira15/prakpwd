<?php
echo "<head><title>My Guest Book</title></head>"; // judul halaman web
$fp = fopen("guestbook.txt","r"); //$fl variabel yang berguna untuk membuka (fopen) file counter.txt dan r berguna untuk menulis
echo "<table border=0>"; // membuat tabel
// untuk melihat daftar isi tamu yang sudah mengisi buku tamu

while ($isi = fgets($fp,80)) // untuk mengambil baris-baris dari file guestbook.txt untuk ditampilkan
{
    $pisah = explode("|",$isi);//explode untuk memisahkan kalimat menjadi array dengan pemisah |
    echo "<tr><td>Nama </td><td>: $pisah[0]</td></tr>";
    echo "<tr><td>Alamat </td><td>: $pisah[1]</td></tr>";
    echo "<tr><td>Email </td><td>: $pisah[2]</td></tr>";
    echo "<tr><td>Status </td><td>: $pisah[3]</td></tr>";
    echo "<tr><td>Komentar </td><td>: $pisah[4]</td></tr>
    <tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";// &nbsp berguna supaya tidak ada kata yang terpisah (non-breaking space)
    
}
echo "</table>";
echo "<a href=tampilan.html> Klik Disini </a>Isi Form Buku Tamu";// jika diklik maka akan kembali ke web awal untuk mengisi buku tamu

?>
    
// Guestbook.txt untuk menampung data tamu yang sudah mengisi buku tamu.