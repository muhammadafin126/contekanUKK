<?php
    
 include '../koneksi.php';

    $namapesan = $_POST['namapesan'];
    $biaya = $_POST['biaya'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];
    $namatamu = $_POST['nama_tamu'];
    $tipe = $_POST['tipe'];
    $jumlah = $_POST['jumlah'];
    $cekin = $_POST['checkin'];
    $cekout = $_POST['checkout'];
                
    $sql = mysqli_query($konek, "INSERT INTO tb_reservasi ( nama_pesan, biaya, email, telp, nama_tamu, tipe, jumlah, checkin, checkout) VALUES ('$namapesan','$biaya','$email','$telp','$namatamu','$tipe','$jumlah','$cekin','$cekout')");

    if($sql){
        header("location:../reservasi_detail.php");
    }else{
        header("location:../index.php?alert=insert_gagal");
    }
    
?>