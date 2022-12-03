<?php
include "../koneksi.php";
$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$loginUser = mysqli_query($con, $sql);
$listAkun = mysqli_num_rows($loginUser);
$inputAkun = mysqli_fetch_array($loginUser);

if ($listAkun > 0) {
    session_start();
    $_SESSION['username'] = $inputAkun['username'];
    $_SESSION['level'] = $inputAkun['level'];

    echo "<b>USER BERHASIL LOGIN</b><br>";
    echo "Username = ", $_SESSION['username'], "<br>";
    echo "Level    = ", $_SESSION['level'], "<br>";

    echo "<br><a href=../index.php><b>TAMPIL USER</b></a></center><br>";
    echo "<a href=logout.php><b>LOGOUT</b></a></center>";
} else {
    echo "<center>Login gagal! username & password tidak benar<br>";
    echo "<a href=../form_login.php><b>ULANGI LAGI</b></a></center>";
}
mysqli_close($con);
