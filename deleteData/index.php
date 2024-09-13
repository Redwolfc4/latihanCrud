<?php
$id = $_GET["id"];

include("../index.php");

$query = "delete from karyawan where id = '$id'";
$data = mysqli_query($connect,$query);

if ($data)
    header("Location:../list.php");
else
    echo "Data gagal dihapus";
    exit();
?>