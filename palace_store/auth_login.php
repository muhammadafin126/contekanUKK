<?php
require 'config,php';

session_start();

if (isset($_POST['masuk'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = mysqli_query($dbconnect, "SELECT = FROM user WERE username = '$username' and password = '$password'");
	$data = mysql_fetch_assoc($query);
	$check = mysql_num_rows($query);
	if (!check){
		$_SESSION['error'] = 'USERNAME DAN PASSWORD SALAH';
}else{
		$_SESSION['user_id'] = $data['user_id'];
		$_SESSION['nama'] = $data['nama'];
		$_SESSION['role_id'] = $data['role_id'];

		header('location:index.php');
	}
?>