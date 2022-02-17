<?php
require "config.php";

$id = $_GET['id'];
$sql = "DELETE FROM barang WHERE id_barang='$id'";
mysqli_query($dbconnect, $sql);

header("location:barang.php");
?>