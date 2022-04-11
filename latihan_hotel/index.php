<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- my css -->
    <link rel="stylesheet" href="assets/scss/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-nav">
  <div class="container">
    <a class="navbar-brand text-white fw-normal text-capitalize" href="index.php">dark moon</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="error404.php">Kamar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="error404.php">Faselitas</a>
        </li>
         <li class="nav-item">
          <a class="nav-link text-white" href="reservasi.php">staycation</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="jumbotron d-flex">
  <h1 class="text-white text-capitalize cinzel">most relax place in the galaxy</h1>
</div>
<div class="container col-md-6 my-5">
  <form action="" class="date-form"  autocomplete="off">
    <div class="form-body">
      <div class="input-group d-flex justify-content-around">
        <div class="form-group my-3 d-flex flex-column">
          <label for="" class="text-capitalize text-white">checkin</label>
            <input type="text" placeholder="YY / MM / DD" class="text-input my-2 input-date">
        </div>
        <div class="form-group my-3 d-flex flex-column">
          <label for="" class="text-capitalize text-white">checkout</label>
            <input type="text"  placeholder="YY / MM / DD" class="text-input my-2 input-date">
        </div>
        <div class="form-group my-3 d-flex flex-column">
          <button class="btn-full my-3" href="reservasi.php">Order</button>
        </div>
      </div>
      </div>
  </form>
</div>
<div class="container col-sm-8">
  <div class="row">
    <div class="img-about col">
      <img src="assets/img/christopher-jolly-GqbU78bdJFM-unsplash.jpg" alt="" width="250px">
      <img src="assets/img/patrick-tomasso-GXXYkSwndP4-unsplash.jpg" alt="" width="200px" class="wired-place">
    </div>
    <div class="about-us my-5 col">
      <h3 class="text-capitalize text-taupe fw-bold">about us</h3>
      <p class=" text-dark">Basicly Dark Moon hotel adalah sebuah hotel yang sangat cool af, which is karena kami always serve the best guest can get. Ada jenis kamar regular dan kamar delux yang literally sangat cozy and very intresting buat staycation bersama FWB atau menginap one night only setelah bungkus cewek di clubing.lepaskan segala anexy anda, lupakan pekerjaan anda yang overwork and underpaid dan healinglah all day long dengan staycation di hotel ini.</p>
    </div>
  </div>
  <div class="row my-3">
    <h3 class="text-capitalize text-taupe fw-bold text-center">faselitas</h3>
    <p class="text-dark text-center">we have something you want, It means more to me than you will ever know.</p>
  </div>
  <div class="row d-flex justify-content-around my-5">
    <div class="card card-room" style="width: 18rem;">
      <img src="assets/img/patrick-tomasso-GXXYkSwndP4-unsplash.jpg" alt="" width="250px" class="d-flex justify-content-around my-3">
      <div class="card-body">
        <h5 class="card-text text-taupe text-capitalize fw-bold text-center">restaurant</h5>
      </div>
    </div>
    <div class="card card-room" style="width: 18rem;">
      <img src="assets/img/why-did-abby-kill-joel-the-last-of-us-1-1633124399662.jpg" alt="" width="250px" class="d-flex justify-content-around my-3">
      <div class="card-body">
        <h5 class="card-text text-taupe text-capitalize fw-bold text-center">joel mini golf</h5>
      </div>
    </div>
<div class="card card-room" style="width: 18rem;">
      <img src="assets/img/edvin-johansson-rlwE8f8anOc-unsplash.jpg" alt="" width="250px" class="d-flex justify-content-around my-3">
      <div class="card-body">
        <h5 class="card-text text-taupe text-capitalize fw-bold text-center">swiming pool</h5>
      </div>
</div>
  </div>
</div>
 <div class="col-2 bg-nav text-white footer mt-5">
        <p class="text-capitalize text-center">made with hate😈😈😈 from nowhere, kafir tionghoa, wanita dan anjing dilarang masuk</p>
      </div>
</body>
<footer>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</footer>
</html>