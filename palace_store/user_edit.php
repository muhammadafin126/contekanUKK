<?php

include 'config.php';

if (isset($_GET['id'])) {
   $id = $_GET['id'];

   $data = mysqli_query($dbconnect, "SELECT * FROM user WHERE id_user='$id'");
   $data = mysqli_fetch_assoc($data);
}

if (isset($_POST['update'])) {
   $id = $_GET['id'];

   $nama = $_POST['nama'];
   $username = $_POST['username'];
   $password = $_POST['password'];
   $role_id = $_POST['role_id'];

  mysqli_query($dbconnect, "UPDATE user SET nama='$nama', password='$password', role_id='$role_id', username='$username' where id_user='$id' ");


   header('location:user.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<tittle>Palace Store | Tambah user</tittle>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- SIA panel css-->
	<link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
	<nav class="container-fluid navbar navbar-expand-lg navbar-light fixed-top shadow">
		<a class="navbar-brand" href="index.php"><b>Palace Store</b></a>
		<!--<p>Username Anda: <?php echo $_SESSION['nama'] ?></p>
		<a href="/user_add/.php">tambah data</a>
		<a href="/user_cetak_barcode.php">Cetak Barcode</a>-->
		<ul class="navbar-nav">
		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-capitalize dropdown-header" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-plus" viewBox="0 0 16 16">
  <path d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5z"/>
  <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
</svg>   
		  insert data
          </a>
          <ul class=" dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a href="user/user_add.php" class="dropdown-item text-capitalize">tambah user</a></li>
			<li><a href="disuser_add.php" class="dropdown-item text-capitalize">tambah diskon</a></li>
          </ul>
        </li>
		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-capitalize dropdown-header" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-data" viewBox="0 0 16 16">
  <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z"/>
  <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
  <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
</svg>  
		  views
          </a>
          <ul class=" dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a href="barang.php" class="dropdown-item text-capitalize">user</a></li>
			<li><a href="disuser.php" class="dropdown-item text-capitalize">disuser</a></li>
			<li><a href="role.php" class="dropdown-item text-capitalize">role</a></li>
			<li><a href="user.php" class="dropdown-item text-capitalize">user</a></li>
          </ul>
        </li>
		</ul>

	</nav>
	<hr>
	<div class="container my-5 col-md-6">
           <form class="sia-form my-5" method="post" autocomplete="off" data-aos="zoom-in">
            <div class="form-header">
               <h3 class="text-capitalize open-sans text-sia-main fw-bold">form edit user</h3>
               <p class="text-capitalize text-sia-grey open-sans">silahkan edit user</p>
            </div>
            <div class="form-body">
               <div class="form-group">
                   <div class="my-4 d-flex sia-input">
                     <input type="text" class="form-control" placeholder="masukan nama user" name="nama" value="<?=$data['nama']?>"/>
                  </div>
                  <div class="my-4 d-flex sia-input">
                     <input type="text" class="form-control" placeholder="masukan kode user" name="username" value="<?=$data['username']?>"/>
                  </div>
                  <div class="my-4 d-flex sia-input">
                     <input type="text" class="form-control" placeholder="masukan password user" name="password" value="<?=$data['password']?>"/>
                  </div>
                  <div class="my-4 d-flex sia-input">
                     <input type="text" class="form-control" placeholder="masukan role_id user" name="role_id" value="<?=$data['role_id']?>"/>
                  </div>
                  <div class="btn-group d-flex">
                     <input type="submit" name="update" value="Perbaruhi" class="btn-main text-capitalize open-sans my-4">
                  </div>
               </div>
            </div>
            </form>
	</div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- SIA panel js -->
<script src="assets/js/siaPanel.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</html>
