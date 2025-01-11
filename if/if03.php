<?php
echo "Masukan nama : ";
$nama = trim(fgets(STDIN));
echo "Masukan nilai anda :";
$nilai = trim(fgets(STDIN));

if($nilai>=80){
    echo "Selamat $nama, anda lulus";
}else{
    echo "Maaf $nama, anda belum lulus🐖🐷🐷🐒";
}
?>