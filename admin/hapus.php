<?php
    include '../koneksi.php';
    $id = $_GET['id'];
    $query = "DELETE FROM tbkuliner WHERE idkuliner=".$id;
             mysql_query($query);
             header('location:index.php');
?>