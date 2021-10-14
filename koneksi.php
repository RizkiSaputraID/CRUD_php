<?php
$host = 'localhost';
$username = 'root';
$password = '';
$db_name = 'crud_gc'; 
$koneksi = mysqli_connect($host,$username,$password,$db_name);
if(!$koneksi){ 
    die ("Koneksi dengan database gagal: ".mysql_connect_error());
  }
?>
