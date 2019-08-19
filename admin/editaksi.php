<?php 
include '../koneksi.php';
$idkuliner			= $_POST['idkuliner'];
$namakuliner		= $_POST['namakuliner'];
$hargakuliner		= $_POST['hargakuliner'];
$lokasikuliner		= $_POST['lokasikuliner'];
$deskripsikuliner	= $_POST['deskripsikuliner'];

$lokasi_file = $_FILES['fotokuliner']['tmp_name'];
$tipe_file   = $_FILES['fotokuliner']['type'];
$nama_file   = $_FILES['fotokuliner']['name'];
$x		  = explode('.', $nama_file);
$getekstensi = strtolower(end($x));
$ekstensi = array('png','jpg');
$namafoto = $nama_file.'.'.$getekstensi;
$direktori   = "img/$namafoto";

move_uploaded_file($lokasi_file,$direktori);

$query1 = "UPDATE tbkuliner SET namakuliner='$namakuliner', hargakuliner='$hargakuliner', lokasikuliner='$lokasikuliner', deskripsikuliner='$deskripsikuliner', fotokuliner='$namafoto' WHERE idkuliner='$idkuliner'";
$result1 = mysql_query($query1);

header('location:index.php');
 ?>