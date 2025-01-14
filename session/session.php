<?php
session_start();
$_SESSION["ussername"] = "joko";
$_SESSION["passworad"] = "rahasia";

echo "berhasil membuat session";
echo "<br>";

echo "<a href=cek_session.php>
cek session</a>";
?>