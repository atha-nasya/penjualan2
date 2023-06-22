<?php
$host="localhost";
$user="root";
$pass="";
$db="penjualan";
$koneksi=mysql_connect($host,$user,$pass,$db) or die("Koneksi database gagal");

mysql_select_db($db,$koneksi)or die("Tidak ada database yang dipilih");
?>