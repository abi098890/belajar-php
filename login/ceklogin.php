<?php
session_start();
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];

$user = $_SESSION['username'];
$pass = $_SESSION['password'];

if($user == "admin" and $pass == "akuaja"){
    echo "Anda berhasil login";
    echo "<br>";
    echo "username :".$user;
    echo "<br>";
    echo "pasword :".$pas;
    echo "<br>";

    echo "<a href='logout.php'>logout</a>";

    



}else{
    
    echo "maaf anda salah sandi";
    echo "<meta http-equiv='refresh' content='2; url=index.php'>";
}


?>