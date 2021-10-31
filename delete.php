<?php
include "koneksi.php";
$id = $_POST["id"];

$sql = "DELETE FROM mhs where id = '".$id."' ";
$hasil = mysqli_query($con,$sql);
?>