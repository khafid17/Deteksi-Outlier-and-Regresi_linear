<?php
include "header.php";
require ('RegresiLinier.php');

$con = mysqli_connect('localhost', 'root', '', 'ta');

$res = mysqli_query($con, "SELECT * FROM data_author_score_500 ORDER BY score_3 DESC");

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

// var_dump($score);

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
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        .align-middle {
            vertical-align: middle !important;
        }
    </style>    
</head>

<body>

</body>

<h3>Data Regresi Linear</h3>
<?php

//contoh menampilkan data regresi linear
echo "<textarea style='width:100%; height:300px; '>";
echo "X Variable : \n";
print_r($x);
echo "</textarea>";

echo "<textarea style='width:100%; height:300px; '>";
echo "Y Variable : \n";
print_r($y);
echo "</textarea>";

// sort($regresi->all);
echo "</textarea>";

$reg_gradient = $regresi->all;
// var_dump($reg_gradient[0]);

?>

</html>


