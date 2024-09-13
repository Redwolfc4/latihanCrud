<?php
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$umur = $_POST['umur'];
$jenis_kelamin = $_POST['jenis_kelamin'];

$direktori = dirname(__DIR__);

include($direktori.'./index.php');   
$insert = mysqli_query($connect,"INSERT INTO karyawan SET nama='$nama', alamat='$alamat', umur='$umur', jenis_kelamin='$jenis_kelamin' "); 
if($insert) 
    header("Location: ../list.php"); //Jika berhasil akan di arahkan ke halaman list.php
else
    echo 'Input data gagal'; //jika gagal akan keluar pesan tersebut



?>