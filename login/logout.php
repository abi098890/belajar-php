<?php
session_start();
session_destroy();
echo "yey.. anda berhasil logout";

echo "<meta http-equiv='refresh
content='2; url=index.php'>";
?>