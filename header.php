<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/tugasakhir/css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" async="" src="script.js"></script>

    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
    
    <style>
        .align-middle {
            vertical-align: middle !important;
        }
    </style>
    <title>investigation</title>
    
</head>
<body>
<header>
  <nav class="navbar navbar-expand-lg navbar-info bg-info">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Investigasi</a>
        <div class="dropdown-menu " aria-labelledby="navbarDropdown">
          <a class="dropdown-item " href="investigasi.php">Investigasi</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item " href="data_normal.php">Data Normal </a>
          <a class="dropdown-item " href="data_outlier.php">Data Outlier </a>
          <!-- <div class="dropdown-divider"></div>
          <a class="dropdown-item " href="data_normal1.php">Data Normal Rata-Rata</a>
          <a class="dropdown-item " href="data_outlier1.php">Data Outlier Rata-Rata</a> -->
          <div class="dropdown-divider"></div>
          <a class="dropdown-item " href="jumlah_data.php">Hasil</a>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link text-light" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link text-light" href="Import.php">Impot <span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item active">
    <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        StarndarDeviasi</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item " href="deviasi.php">Deviasi 500 Data</a>
          <a class="dropdown-item " href="deviasi1.php">Deviasi Clear </a>

        </div>
      </li>
  
      <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Chart</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item " href="chart_scatter.php">Chart Indikasi Outlier</a>
          <a class="dropdown-item " href="chart_scatter1.php">Chart Clear Outlier </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item " href="chart_scatter2.php">Chart Import </a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Regresi
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item " href="data.php">Data Regresi</a>
          <a class="dropdown-item " href="hasil.php">Hasil Regresi</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item " href="nilaiA_B.php">Nilai A dan B</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item " href="nilaiA_B_clening.php">Nilai A dan B Clear</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0"  action="search.php">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name ="cari">
    <button class="btn btn-outline-light my-2 my-sm-0" type="submit" value="Cari">Search</button>
    </form>
    <li class="nav-item active">
        <a class="btn btn-outline-light my-2 my-sm-0" href="logout.php">Logout<span class="sr-only">(current)</span></a>
      </li>
  </div>
</nav>
    </header>
</body>
</html>