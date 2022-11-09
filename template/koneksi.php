<?php
$koneksi = mysqli_connect("localhost","root"," ","antriangrab");
// Check connection
error_reporting(0);
session_start();
if (mysqli_connect_errno()){
 echo "Koneksi database gagal : " . mysqli_connect_error();
}else{
	echo "berhasil";
}
?>