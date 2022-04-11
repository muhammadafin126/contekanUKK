<?php
$koneksi = mysqli_connect("localhost","root","","hotel_latihan");
if (!$koneksi){
    echo "error" . mysqli_connect_error();
}

