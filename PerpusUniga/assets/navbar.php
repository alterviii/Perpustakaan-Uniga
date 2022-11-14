<?php
    session_start();

    if($_SESSION['level']==""){
        $_SESSION['gagallogin'] = "Gagal Masuk Mahasiswa";
        header("location:index.php");
    exit;
}
  include "bootstrap.php";
  include "koneksi.php";
 ?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  	<title></title>

</head>
<body>

<header>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="../mahasiswa/datamahasiswa.php">MAHASISWA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../dosen/datadosen.php">DOSEN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../jurusan/datajurusan.php">JURUSAN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../matkul/datamatkul.php">MATA KULIAH</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../jadkul/datajadkul.php">JADWAL KULIAH</a>
          </li>
        </ul>
      </div>
          <ul class="navbar-nav">
              <li class="nav-item dropdown">
                  <a class="navbar-brand dropdown-toggle btn btn-outline-info " href="#" id="navbarDarkDropdownMenuLink" role="button"data-bs-toggle="dropdown" aria-expanded="false">
                  <small>
                    <?php echo $_SESSION['username']; ?>
                  </small></a>
                  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                       <li><a class="dropdown-item disabled" href="#"><?php echo $_SESSION['level']; ?></a></li>
                       <li><a class="dropdown-item" href="../../logout.php">Logout</a></li>
                  </ul>
              </li>
          </ul>
    </div>
  </nav>
  <!-- Navbar -->
</header>

<!-- FOOT -->
	<section class="fixed-bottom">
	  <footer class="text-center text-white bg-dark">
	    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
	      © 2022 Copyright
	      <a class="text-white" href="https://instagram.com/alterviii">VIII</a>
	    </div>
	    <!-- Copyright -->
	  </footer>
	  <!-- Footer -->
	</section>
</body>
</html>