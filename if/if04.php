<?php
$nilai = 85;

if($nilai<60){
    echo "nilai : $nilai\n";
    echo "Grade : E";
}elseif($nilai<70){
    echo "nilai : $nilai\n";
    echo "grade : D";
}elseif($nilai<80){
    echo "nilai : $nilai\n";
    echo "grade : C";
}elseif($nilai<90){
    echo "nilai : $nilai\n";
    echo "Grade : B";
}elseif(Snilai<=100){
     echo "Grade : A";
}else{
    echo "Maaf nilai anda tidak sah";
}  
?>