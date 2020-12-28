<!-- cek data di $_GET -->
<?php
include "header.php";
if (!isset($_GET['cari'])) {
    header("Location: Notice.php");
    exit;
}
?>



<?php 
// include koneksi
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
    <div class="awal container bg-white padding border-dark primary-footer">
        <?php
        if (isset($_GET['cari'])) {
            $cari = $_GET['cari'];
            echo "<br><br><br><h2><b>Hasil pencarian : " . $cari . "</b></h2><br><br>";
        }
        ?>

        <?php
            if (isset($_GET['cari'])) {
                $data = mysqli_query($connection, "SELECT * FROM data_author_score_500 where (`nama` LIKE '%".$_GET['cari']."%')");
            } else {
                echo "<h2>No Data In Databases</h2>";
            }
        ?>
        <div class = "table ">
        <div class="container bg-white padding border-dark primary-footer mg-4">
        <table class="table table-striped">
            <thead class="thead-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nama</th>
                        <th scope="col">3 Years Scores</th>
                        <th scope="col">All Years Scores</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                            while ($row = mysqli_fetch_assoc($data)) {
                    ?>
                    <tr>
                        
                        <td class="text_table"><?php echo $row['id']; ?></td>
                        <td class="text_table"><?php echo $row['nama']; ?></td>
                        <td class="text_table"><?php echo $row['score_3']; ?></td>
                        <td class="text_table"><?php echo $row['score_overall']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            </div>
            </div>
    </div>

</body>

</html>