<?php
$host="localhost";
$user="root";
$pass="";
$db="dblatihan";

$koneksi = mysqli_connect ($host,$user,$pass,$db);

if($koneksi) {
    echo "Koneksi Berhasil" . "<br>";
}
else {
    echo "koneksi Gagal";
}
?>