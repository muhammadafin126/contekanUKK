<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<tittle>Palace Store | Barang</tittle>
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
		<a href="/barang_add/.php">tambah data</a>
		<a href="/barang_cetak_barcode.php">Cetak Barcode</a>-->
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
            <li><a href="barang/barang_add.php" class="dropdown-item text-capitalize">tambah barang</a></li>
			<li><a href="disbarang_add.php" class="dropdown-item text-capitalize">tambah diskon</a></li>
			<li><a href="user_add.php" class="dropdown-item text-capitalize">tambah user</a></li>
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
            <li><a href="barang.php" class="dropdown-item text-capitalize">barang</a></li>
			<li><a href="disbarang.php" class="dropdown-item text-capitalize">disbarang</a></li>
			<li><a href="role.php" class="dropdown-item text-capitalize">role</a></li>
			<li><a href="user.php" class="dropdown-item text-capitalize">user</a></li>
          </ul>
        </li>
		<li class="nav-item">
                     <a class="nav-link d-flex" href="printbarcode.php">
                        <div>
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
  <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
  <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
</svg>
                        </div>
						<div class="ms-1 text-capitalize">
							print bar code
						</div>
                     </a>
                  </li>
		</ul>

	</nav>
	<hr>
	<div class="container my-5">
	<!-- Content title -->
    <h3 class="sia-main fw-bold text-capitalize my-3" data-aos="fade-right"><b>barang</b></h1>
	<div class="sia-box sia-shadow mb-4" data-aos="zoom-in">
	<table class="table">
		<tr>
			<th scope="col" class="sia-main">ID Barang</th>
			<th scope="col" class="sia-main">Kode</th>
			<th scope="col" class="sia-main">Nama</th>
			<th scope="col" class="sia-main">Harga</th>
			<th scope="col" class="sia-main">Jumlah Stok</th>
			<th scope="col" class="sia-main">Aksi</th>
		</tr>
		<?php
		include 'config.php';
		$no=1;
		$data=mysqli_query($dbconnect,"select * from 
			barang");
		while ($row = mysqli_fetch_array($data)) { ?>

			<td scope="row"><?= $row['id_barang']?></td>
			<td><?= $row['kode_barang']?></td>
			<td><?= $row['nama']?></td>
			<td><?= $row['harga']?></td>
			<td><?= $row['jumlah']?></td>
			<td>
				<a href="barang_edit.php?id=<?php echo $row['id_barang']?>" class="btn-link-main">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  					<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  					<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
					</svg>
				</a>
				<a href="barang_delete.php?id=<?php echo $row['id_barang']?>" class="btn-link-danger">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  					<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  					<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
					</svg>
				</a>
			</td>
		<tr>
			<?php }
			?>
		</tr>
	</table>
	</div>
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