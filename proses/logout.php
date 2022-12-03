<?php
session_start();
session_destroy();
echo "<b>Anda telah sukses keluar dari sistem</b>";
echo "<br>Silahkan jika ingin masuk lagi : <a href='../form_login.php'>LOGIN</a>";
