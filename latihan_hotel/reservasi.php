<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- my css -->
    <link rel="stylesheet" href="assets/scss/style.css">
</head>
<body class="autbg">
    <div class="container">
        <div class="row my-3">
                <div class="col-md-6 form-reservasi mx-auto bg-nav py-3 px-3">

                <?php
                include 'koneksi.php';
                $kamar = mysqli_query($konek, "SELECT * FROM tb_kamar");
                ?>

                <form action="action/reservasi_insert.php" method="post" class="bg-nav" autocomplete="off">
                    <h3 class="text-taupe">Form Reservasi</h3>
                    <p class="text-taupe">Silahkan isi untuk checkin, I mean staycation.</p>
                    <div class="form-group my-3">
                        <label class="text-white">Nama Pemesan</label>
                        <br>
                        <input type="text" class="text-input rsv-input" name="namapesan" required="required" placeholder="silahkan isi nama anda">
                    </div>
                    <div class="form-group my-3">
                        <label class="text-white">Email</label>
                        <br>
                        <input type="email" class="rsv-input text-input" name="email" required="required" placeholder="silahkan isi email anda">
                    </div>
                    <div class="form-group my-3">
                        <label class="text-white">No Telepon</label>
                        <br>
                        <input type="number" class="rsv-input text-input" name="telp" required="required" placeholder="silahkan isi nomer telepon anda">
                    </div>
                    <div class="form-group my-3">
                        <label class="text-white">Nama Tamu</label>
                        <br>
                        <input type="text" class="rsv-input text-input" name="nama_tamu" required="required" placeholder="silahkan isi nama tamu">
                    </div>
                    <div class="form-group my-3">
                        <label class="text-white">Nama Tipe Kamar</label>
                        <br>
                        <select name="tipe" class="rsv-input text-input" name="tipe">
                            <option disabled selected class="text-white bg-nav">-- Plih Tipe Kamar --</option>
                            <?php while($d = mysqli_fetch_array($kamar)){ ?>
                                <option class="text-white bg-nav" value="<?php echo $d['id_kamar']?>"><?php echo $d['tipe_kamar']?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group my-3">
                        <label class="text-white">Jumlah Kamar</label>
                        <br>
                        <input type="number" class="rsv-input text-input" name="jumlah" required="required" placeholder="silahkan isi jumlah kamar">
                    </div>
                    <div class="form-group my-3">
                        <label class="text-white">Tanggal Cek In</label>
                        <br>
                        <input type="date" class="rsv-input text-input" name="checkin" required="required">
                    </div>
                    <div class="form-group my-3">
                        <label class="text-white">Tanggal Cek Out</label>
                        <br>
                        <input type="date" class="rsv-input text-input" name="checkout" required="required">
                    </div>
                    <br>
                    <div class="form-group my-3 d-flex justify-content-between">
                        <input type="submit" class="btn-main btn-wide" value="Pesan" name="Pesan">
                    </div>
                </form>
                </div>
                
            </div>
    </div>
</body>
</html>