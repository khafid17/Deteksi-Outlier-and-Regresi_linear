<?php 
include "header.php";
require_once("StandardDeviation.php");
require ('RegresiLinier.php');

$con = mysqli_connect('localhost', 'root', '', 'ta');

$res = mysqli_query($con, "SELECT * FROM data_author ORDER BY score_3 ASC");

$i = 0;
while ($row = mysqli_fetch_assoc($res)){
    $x[] = $row['score_3'];
    $y[] = $row['score_overall'];
    $z[] = $row['nama'];

    $score[$i]['score_3'] = $row['score_3'];
    $score[$i]['score_all'] = $row['score_overall'];
    $i++;
    
}

$regresi = new RegresiLinier($x, $y);

$standard = new Statistic\StandardDeviation();

# Inputting the data set
$standard->setRawGroup($regresi->all);

# Methods available to be used



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/tugasakhir/css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" async="" src="script.js"></script>
    
    <style>
        .align-middle {
            vertical-align: middle !important;
        }
    </style>
    <title>Latihan Regresi Linier</title>
    <script src="Chart.min.js"></script>  
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

      
</head>
<body>

<?php


//contoh menampilkan data regresi linear
// echo "<textarea style='width:100%; height:300px; '>";
// echo "X Variable : \n";
// print_r($x);
// echo "</textarea>";

// echo "<textarea style='width:100%; height:300px; '>";
// echo "Y Variable : \n";
// print_r($y);
// echo "</textarea>";

// echo "<textarea style='width:100%; height:100px; '>";
// echo "Nilai Data A : \n";
// print_r($regresi->a);
// echo "</textarea>";

// echo "<textarea style='width:100%; height:100px; '>";
// echo "Nilia Data B : \n";
// print_r($regresi->b);
// echo "</textarea>";

// echo "<textarea style='width:100%; height:300px; '>";
// echo "Hasil Analisis Regresi Linear Sederhana : \n";
// print_r($regresi->all);
// // sort($regresi->all);
// echo "</textarea>";

echo "<textarea style='width:100%; height:100px; '>";
echo "Variance : \n";
print_r($standard->variance());
echo "</textarea>";

echo "<textarea style='width:100%; height:100px; '>";
echo "Deviation : \n";
print_r($standard->deviation());
echo "</textarea>";

echo "<textarea style='width:100%; height:100px; '>";
echo "Average : \n";
print_r($standard->average());
echo "</textarea>";

$reg_gradient = $regresi->all;
// var_dump($reg_gradient[0]);

?>