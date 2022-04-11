<?php
include 'koneksi.php';

if (isset($_SESSION['userid'])) {
  if ($_SESSION['role'] == 'tamu') {
    header('location:index.php');
  }
}else {
  $_SESSION['error']='login dulu anjg';
  header('location:login.php');
}
?>
<?php
include 'koneksi.php';

$jumlah_kamar="SELECT count('1') FROM kamar";
$result_kamar=mysqli_query($konek,$jumlah_kamar);
$row_kamar=mysqli_fetch_array($result_kamar);

$jumlah_fkamar="SELECT count('1') FROM tb_fkamar";
$result_fkamar=mysqli_query($konek,$jumlah_fkamar);
$row_fkamar=mysqli_fetch_array($result_fkamar);

$jumlah_fhotel="SELECT count('1') FROM tb_fhotel";
$result_fhotel=mysqli_query($konek,$jumlah_fhotel);
$row_fhotel=mysqli_fetch_array($result_fhotel);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- SIA panel css-->
	<link rel="stylesheet" href="assets/css/style.css">
   <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
    <?php
    include 'header_admin.php';
    ?>
	<hr>
	<div class="container my-5">
	<!-- Content title -->
    <h3 class="sia-main fw-bold text-capitalize my-3" data-aos="fade-right"><b>dashboard</b></h3>
	<h5 class="sia-grey text-capitalize my-3" data-aos="fade-right">welcome to Dark moon hotel,  <?php echo $_SESSION['nama'] ?>
   </h5>
    <div class="row justify-content-between my-5">
            <a class="col-lg-3 col-md-6 col-12 dashcard" href="kamar/kamar.php" data-aos="zoom-in">
               <div class="box-margin-bottom sia-box sia-shadow sia-hover">
                  <div class="small-box">
                     <div class="inner">
                        <h3 class="sia-main fw-bold text-capitalize"><?php echo "<h3 class='sia-main'>$row_kamar[0]<h3>";?></h3>
                        <p class="sia-grey fw-bold text-capitalize">data kamar</p>
                     </div>
                     <div class="icon-box">
                        <img class="mx-auto d-block" src="assets/img/undraw_shopping_app_flsj.svg" alt="Amazon Asin Scrapper"
                        height="70">
                     </div>
                  </div>
               </div>
            </a>
            <a class="col-lg-3 col-md-6 col-12 dashcard" href="fkamar/fkamar.php" data-aos="zoom-in">
               <div class="box-margin-bottom sia-box sia-shadow sia-hover">
                  <div class="small-box">
                     <div class="inner">
                        <h3 class="sia-main fw-bold text-capitalize"><?php echo "<h3 class='sia-main'>$row_fkamar[0]<h3>";?></h3>
                        <p class="sia-grey fw-bold text-capitalize"> data faselitas kamar</p>
                     </div>
                     <div class="icon-box">
                        <img class="mx-auto d-block" src="assets/img/undraw_gone_shopping_re_2lau.svg" alt="Keyword Generator"
                        height="70">
                     </div>
                  </div>
               </div>
            </a>
            <a class="col-lg-3 col-md-6 col-12 dashcard" href="fhotel/fhotel.php" data-aos="zoom-in">
               <div class="box-margin-bottom sia-box sia-shadow sia-hover">
                  <div class="small-box">
                     <div class="inner">
                        <h3 class="sia-main fw-bold text-capitalize"><?php echo "<h3 class='sia-main'>$row_fhotel[0]<h3>";?></h3>
                        <p class="sia-grey fw-bold text-capitalize">data faselitas hotel</p>
                     </div>
                     <div class="icon-box">
                        <img class="mx-auto d-block" src="assets/img/undraw_calculator_re_jy39.svg" alt="Spinner Bahasa Indonesia"
                        height="70">
                     </div>
                  </div>
               </div>
            </a>
         </div>
	</div>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- SIA panel js -->
<script src="assets/js/siaPanel.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>