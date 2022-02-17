<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'palacestore';

$dbconnect = new mysqli("$host", "$user", "$pass", "$db");

if ($dbconnect->
connect_error) {
	echo 'koneksi gagal ->'. $dbconnect->connection_error;
}
?>