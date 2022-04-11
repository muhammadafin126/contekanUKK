<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <script src="assets/js/bootstrap.js"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- my css -->
    <link rel="stylesheet" href="assets/scss/style.css">
</head>
</head>
<body class="autbg">
    <div class="container">
        <?php
             include 'koneksi.php';

            $sql = mysqli_query($konek, "SELECT * FROM tb_reservasi ORDER BY id_reservasi DESC LIMIT 1");
            $d = mysqli_fetch_array($sql);
        ?>
        <div class="reservasi-card bg-nav p-3 my-3">
            <h3 class="text-taupe">Detail Reservasi</h3>
            <hr>
            <div class="text-white">
            <p>Reservasi Atas Nama : <?php echo $d['nama_pesan'];?></p>
            <p>Rincian:</p>
            <div class="row border rounded py-4 px-3 mx-5 d-flex justify-content-center">
                <div class="col-md-2 d-flex flex-column text-right">
                    <p>Email</p>
                    <p>No Handphone</p>
                    <p>Nama Tamu</p>
                    <p>Tipe Kamar</p>
                    <p>Jumlah Kamar</p>
                    <p>Tanggal Cek In</p>
                    <p>Tanggal Cek Out</p>
    
                </div>
                <div class="col-md-4 d-flex flex-column">
                    <p>: <?php echo $d['email'];?></p>
                    <p>: <?php echo $d['telp'];?></p>
                    <p>: <?php echo $d['nama_tamu'];?></p>
                    <p>: <?php echo $d['tipe'];?></p>
                    <p>: <?php echo $d['jumlah'];?></p>
                    <p>: <?php echo $d['checkin'];?></p>
                    <p>: <?php echo $d['checkout'];?></p>
                </div>
            </div>
            <br>
            <div >
                <p class="text-center text-white">Save PDF lalu Print Detail Reservasi sebagai Bukti untuk diserahkan kepada Resepsionis ketika Cek In.</p>
                <div class="d-flex justify-content-center">
                    <a href="action/reservasi_pdf.php" class="btn-main btn-wide text-center">Save PDF</a>
                </div>
            </div>
        </div>
        </div>
    <br><br>    
    <script>