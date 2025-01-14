<?php
function sapa($nama){
    echo"selamat pagi $nama".PHP_EOL;
}
echo "masukan nama :";
echo "masukan nama lengkap :";
$nama = trim(fgets(STDIN));
sapa($nama);
?>