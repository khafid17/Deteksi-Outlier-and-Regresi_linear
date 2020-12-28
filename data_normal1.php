<?php
// include file php
include "header.php";
require 'path/func/conn.php';   


?>

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
    
    <style>
        .align-middle {
            vertical-align: middle !important;
        }
    </style>
    <title>investigation</title>
  </head>

  <body>

    <div class = "table ">
        <div class="container bg-white padding border-dark primary-footer mg-4">
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Nilai</th>

                </tr>
            </thead>
            <tbody>

              <?php
                  $page = (isset($_GET['page'])) ? $_GET['page'] : 1;
                  $limit = 10; // Jumlah data per halamanya
                  // Buat query untuk menampilkan daa ke berapa yang akan ditampilkan pada tabel yang ada di database
                  $limit_start = ($page - 1) * $limit;

                  $tampil = "SELECT nama,hasil FROM data_regresi where hasil < 43.70442939 ORDER BY hasil DESC limit $limit OFFSET " . $limit_start;
                  $sql = mysqli_query($connection,$tampil);

                  $i = 1;
                  foreach ($sql as $row){
                    echo "<tr>
                        <td>".$row['nama']."</td>
                        <td>".$row['hasil']."</td>
          
                    ";
                    // function cari ($keyword){
                    //     $query ="select * from author
                    //         where
                    //         nama = '$keyword'
                    //     ";
                    // return query($tampil);
                    // }
                  }
              ?>
          </tbody>
      </table>
        </div>
    </div>
    <div>

<!--
Buat paginationnya
Dengan bootstrap, kita jadi dimudahkan untuk membuat tombol-tombol pagination dengan design yang
bagus tentunya -->
<nav aria-label="Page navigation example">
<ul class="pagination justify-content-center">
    <!-- LINK FIRST AND PREV -->
    <?php
    // Cek apakah terdapat data pada page URL
    
    if ($page == 1) { // Jika page adalah pake ke 1, maka disable link PREV
    ?>
        <a class="page-link" href="#" tabindex="-1">First</a></li>
        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
    <?php
    } else { // Jika buka page ke 1
        $link_prev = ($page > 1) ? $page - 1 : 1;
    ?>
        <li  class="page-item"><a class="page-link" href="data_normal1.php?page=1">First</a></li>
        <li  class="page-item"><a class="page-link" href="data_normal1.php?page=<?php echo $link_prev; ?>">&laquo;</a></li>
    <?php
    }
    ?>

    <!-- LINK NUMBER -->
    <?php
    // Buat query untuk menghitung semua jumlah data

    $sql2 = mysqli_query($connection, "SELECT COUNT(hasil) AS jumlah FROM data_regresi order by hasil desc limit 100");
    $get_jumlah = mysqli_fetch_assoc($sql2);
    $jumlah_page = ceil($get_jumlah['jumlah'] / $limit); // Hitung jumlah halamanya
    $jumlah_number = 3; // Tentukan jumlah link number sebelum dan sesudah page yang aktif
    $start_number = ($page > $jumlah_number) ? $page - $jumlah_number : 1; // Untuk awal link member
    $end_number = ($page < ($jumlah_page - $jumlah_number)) ? $page + $jumlah_number : $jumlah_page; // Untuk akhir link number

    for ($i = $start_number; $i <= $end_number; $i++) {
        $link_active = ($page == $i) ? 'class="active"' : '';
    ?>
        <li  class="page-item" <?php echo $link_active; ?>><a class="page-link" href="data_normal1.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
    <?php
    }
    ?>

    <!-- LINK NEXT AND LAST -->
    <?php
    // Jika page sama dengan jumlah page, maka disable link NEXT nya
    // Artinya page tersebut adalah page terakhir
    if ($page == $jumlah_page) { // Jika page terakhir
    ?>
        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
        <li class="page-item"><a class="page-link" href="#">Last</a></li>
    <?php
    } else { // Jika bukan page terakhir
        $link_next = ($page < $jumlah_page) ? $page + 1 : $jumlah_page;
    ?>
        <li><a class="page-link"  href="data_normal1.php?page=<?php echo $link_next; ?>">&raquo;</a></li>
        <li><a class="page-link"  href="data_normal1.php?page=<?php echo $jumlah_page; ?>">Last</a></li>
    <?php
    }
    ?>
</ul>
</nav>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	
	
  </body>
</html>


