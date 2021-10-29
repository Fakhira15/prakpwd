<?php
$filecounter="counter.txt"; //membuat variabel filecounter yang mengarahkan kefile counter.txt
$fl=fopen($filecounter,"r+"); //$fl adalah variabel yang berguna untuk membuka (fopen) file counter.txt yang sudah diinisialisasikan kedalam variabel $filecounter diline 2, dan r+ berguna untuk membaca dan menulis
$hit=fread($fl,filesize($filecounter)); //$hit berisi fread untuk membaca isi dari $fl, filesize untuk ukuran dari file yang ada didalam variabel $filecounter (counter.txt)
echo("<table width=250 align=center border=1 cellspacing=0 cellpadding=0
bordercolor=#0000FF><tr>"); //desain tampilan
echo("<td width=250 valign=middle align=center>");//desain tampilan
echo("<font face=verdana size=2 color=#FF0000><b>");//desain tampilan
echo("Anda pengunjung yang ke:");// tulisan yang tertera di web
echo($hit);
echo("</b></font>");
echo("</td>");
echo("</tr></table>");
fclose($fl); // menutup file
$fl=fopen($filecounter,"w+"); //membuka kembali file counter, w+ untuk membuka dan memotong file atau membuat file baru
$hit=$hit+1;  //setiap kali web direfresh maka akan bertambah 1 jumlah pengunjungnya
fwrite($fl,$hit,strlen($hit)); // fwrite untuk menulis jumlah pengunjung kedalam file counter.txt, strlen untuk panjang karakter dari var $hit
fclose($fl);// menutup file

//Counter.txt awalnya berisi 1 kemudian apabila web dikunjungi atau di refresh maka jumlah yang ada dalam file tersebut akan bertambah sebanyak web direfresh