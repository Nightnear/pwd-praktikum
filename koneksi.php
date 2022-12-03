<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "258_pwd5";


$con = new mysqli($servername, $username, $password, $dbname);

// Cek Koneksi
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
