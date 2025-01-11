<?php
//Array 2 dimensi
$siswa = [
    "nama" => "Ahmad jamal mansur",
"kelas" => "11",
"alamat" =>[
    "desa" => "Pagotan",
    "kec" => "Pagotan",
    "kab" => "Madiun"
]
];

echo $siswa["nama"].PHP_EOL;
echo $siswa["kelas"].PHP_EOL;
echo $siswa["alamat"]["desa"].PHP_EOL;
echo $siswa["alamat"]["kec"].PHP_EOL;
echo $siswa["alamat"]["kab"].PHP_EOL;

?>