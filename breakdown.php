<?php
include "header.php";
require ('RegresiLinier.php');


$con = mysqli_connect('localhost', 'root', '', 'ta');

$res = mysqli_query($con, "SELECT * FROM data_author_score_500 ORDER BY score_3 ASC");

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
    
    <style>
        .align-middle {
            vertical-align: middle !important;
        }
    </style>
    <title>Latihan Regresi Linier</title>
    <script src="Chart.min.js"></script>  

      
</head>
<body>

<?php
//contoh menampilkan data regresi linear

// sort($regresi->all);
echo "</textarea>";

$reg_gradient = $regresi->all;
// var_dump($reg_gradient[0]);

?>
<br>
<h3>Penerapan RegresiLinearPHP dengan ChartJS</h3>
<div style="height: 1000px; width: 1000px">
    <canvas id="myChart" ></canvas>
</div>
<script>
    var ctx = document.getElementById('myChart').getContext("2d");

var scatterChart = new Chart(ctx, {
    type: 'scatter',
    data: {
        labels: [
            <?php for($k = 0; $k < count($x); $k++) : ?>

                "<?= $z[$k] ?>",
             
            <?php endfor; ?>
         ],
        datasets: [
            {
                label: 'Regresi',
                data: [
                    <?php for($i = 0; $i < count($score); $i++) : ?>
                    {
                        x: <?= $score[$i]['score_3'] ?>,
                        y: <?= $reg_gradient[$i] ?>,
                    },
                    <?php endfor; ?>
                ],
                borderColor: '#FF0000',
                backgroundColor: '#FF0000',
                borderWidth: 2,
                pointRadius: 0,
                // pointHoverRadius: 5,
                fill: false,
                tension: 0,
                showLine: true
            },
            {
                label: 'Data',
                data: [
                    <?php for($i = 0; $i < count($score); $i++) : ?>
                    {
                        x: <?= $score[$i]['score_3'] ?>,
                        y: <?= $score[$i]['score_all'] ?>,
                    },
                    <?php endfor; ?>
                ],

                // borderColor: '#0000AA',
                // borderWidth: 1,
                pointRadius: 2,
                pointBorderColor : '#00BFFF',
                pointBackgroundColor : '#00BFFF',
                backgroundColor: '#00BFFF',
                // pointHoverRadius: 5,
                fill: false,
                tension: 0,
                showLine: false
            }
        ],
    },
    options: {
        scales: {
            xAxes: [{
                type: 'linear',
                position: 'bottom'
            }]
        },
        tooltips: {
            callbacks: {
                label: function(tooltipItem, data) {
                    var datasetLabel = data.datasets[tooltipItem.datasetIndex].label || 'Other';
                    var label = data.labels[tooltipItem.index];

            // var multistringText = ['first string'];
            // multistringText.push('another string');
            // return multistringText;

                    return label + "\n (" + tooltipItem.xLabel + ", " + tooltipItem.yLabel + ")";
                }
            }
        }
    }
});
</script>
</body>
</html>


