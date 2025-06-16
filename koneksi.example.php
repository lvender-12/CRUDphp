<?php

$host="localhost";
$user="use your user";
$password="use password if your mysql have a password";
$db="your databases name";

$kon = mysqli_connect($host,$user,$password,$db);
if (!$kon){
        die("Koneksi Gagal:".mysqli_connect_error());
        
}
?>