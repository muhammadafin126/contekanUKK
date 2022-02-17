
<?php
require "config.php";

$id = $_GET['id'];
$sql ="DELETE FROM disbarang WHERE id= '$id'";
mysqli_query($dbconnect, $sql);

header("location:disbarang.php");
?>