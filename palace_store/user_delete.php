
<?php
require "config.php";

$id = $_GET['id'];
$sql ="DELETE FROM user WHERE id_user= '$id'";
mysqli_query($dbconnect, $sql);

header("location:user.php");
?>