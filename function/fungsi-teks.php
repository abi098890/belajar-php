<?php
$file = fopen("halo.txt","w");

$text = "halo \n";
fwrite($file,$text);

Stext = "saya sedang proses sukses.";
fwrite($file,$text);

fclose($file);
?>