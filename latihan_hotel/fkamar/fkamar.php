<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fhotel</title>
    <!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- SIA panel css-->
	<link rel="stylesheet" href="../assets/css/style.css">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
  <?php
  include '../header_admin.php';
 ?>
    <div class="container my-5">
	<!-- Content title -->
    <h3 class="sia-main fw-bold text-capitalize my-5" data-aos="fade-right"><b>kamar</b></h1>
	<div class="sia-box sia-shadow mb-4" data-aos="zoom-in">
	<table class="table">
		<tr>
			<th scope="col" class="sia-main">#</th>
			<th scope="col" class="sia-main">tipe</th>
			<th scope="col" class="sia-main">Faaselitas</th>
			<th scope="col" class="sia-main">Aksi</th>
		</tr>
		<?php
		include '../koneksi.php';
		$no=1;
		$data=mysqli_query($konek,"select * from 
			tb_fkamar");
		while ($row = mysqli_fetch_array($data)) { ?>

			<td scope="row"><?= $row['id_fkamar']?></td>
			<td><?= $row['fasilitas']?></td>
			<td><?= $row['tipe']?></td>
			<td>
				<a href="kamar-edit.php?id=<?php echo $row['id_kamar']?>" class="link-text-warning">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  				<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  				<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
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