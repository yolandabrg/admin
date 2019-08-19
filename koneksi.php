<?php
    $hostname = 'localhost';
    $dbname   = 'kelompok6';
    $username = 'root'; 
    $password = '';
    mysql_connect($hostname, $username, $password) or die ("Koneksi Gagal");
    mysql_select_db($dbname) or die ("Database Tidak Terakses");
    //bpkpkalbar
?>