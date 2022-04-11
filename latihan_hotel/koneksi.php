<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'hotel_latihan';

$konek = new mysqli("$host", "$user", "$pass", "$db");
session_start();

if ($konek->
connect_error) {
    echo 'gagal konek cok ->'.$konek->connection_error;
}