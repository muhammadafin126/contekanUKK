<nav class="container-fluid navbar navbar-expand-lg navbar-light fixed-top shadow">
		<a class="navbar-brand" href="dashboard.php"><b>Dark Moon</b></a>
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
              <li><a href="kamar/kamar-add.php" class="dropdown-item text-capitalize">tambah kamar</a></li>
            <li><a href="fkamar/fkamar_add.php" class="dropdown-item text-capitalize">tambah faselitas kamar</a></li>
			<li><a href="fhotel/fhotel_add.php" class="dropdown-item text-capitalize">tambah faselitas hotel</a></li>
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
              <li><a href="kamar/kamar.php" class="dropdown-item text-capitalize">kamar</a></li>
              <li><a href="fkamar/fkamar.php" class="dropdown-item text-capitalize">faselitas kamar</a></li>
              <li><a href="fhotel/fhotel.php" class="dropdown-item text-capitalize">faselitas hotel</a></li>
          </ul>
        </li>
		</ul>
        <ul>
            <li>
                <a href="logout.php" class="text-capitalize">logout</a>
            </li>
        </ul>

	</nav>