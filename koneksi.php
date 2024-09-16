<?php
$host = "localhost";
$user = "root";
$pass = "";
$name = "sekolah";

$koneksi = mysqli_connect($host, $user, $pass, $name);
 if (mysqli_connect_errno()){
        echo "Koneksi database mysqli gagal!!! : " . mysqli_connect_error();
    }
?>