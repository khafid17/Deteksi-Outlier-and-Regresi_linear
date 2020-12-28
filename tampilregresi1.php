<?php
require ('RegresiLinier.php');

$con = mysqli_connect('localhost', 'root', '', 'ta');

$res = mysqli_query($con, "SELECT * FROM data_author_score_10 ORDER BY score_3 ASC");

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
    <title>Latihan Regresi Linier</title>
    <script src="Chart.min.js"></script>  
      
</head>
<body>

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

echo "<textarea style='width:100%; height:100px; '>";
echo "Nilai Data A : \n";
print_r($regresi->a);
echo "</textarea>";

echo "<textarea style='width:100%; height:100px; '>";
echo "Nilia Data B : \n";
print_r($regresi->b);
echo "</textarea>";

echo "<textarea style='width:100%; height:300px; '>";
echo "Hasil Analisis Regresi Linear Sederhana : \n";
print_r($regresi->all);


// sort($regresi->all);
echo "</textarea>";

$reg_gradient = $regresi->all;
var_dump($reg_gradient[0]);

?>
<br>
<h3>Penerapan RegresiLinearPHP dengan ChartJS</h3>
<div style="height: 1000px; width: 1000px">
    <canvas id="myChart" ></canvas>
</div>
<script>
    var ctx = document.getElementById('myChart').getContext("2d");

var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: [
            <?php for($i = 0; $i < count($score) ; $i++) : ?>
                "<?= $score[$i]['score_3'] ?>",
            <?php endfor; ?>
        ],
        datasets: [
            {
                label: "Data",
                borderColor: "#80b6f4",
                pointBorderColor: "#80b6f4",
                pointBackgroundColor: "#80b6f4",
                pointHoverBackgroundColor: "#80b6f4",
                pointHoverBorderColor: "#80b6f4",
                pointBorderWidth: 10,
                pointHoverRadius: 10,
                pointHoverBorderWidth: 1,
                pointRadius: 3,
                fill: false,
                borderWidth: 4,
                data: [
                    <?php for($i = 0; $i < count($reg_gradient) ; $i++) : ?>
                        <?= $reg_gradient[$i] ?>,
                    <?php endfor; ?>
                ]
            },
            {
                label: "Data",
                borderColor: "#80b6f4",
                pointBorderColor: "#80b6f4",
                pointBackgroundColor: "#80b6f4",
                pointHoverBackgroundColor: "#80b6f4",
                pointHoverBorderColor: "#80b6f4",
                pointBorderWidth: 10,
                pointHoverRadius: 10,
                pointHoverBorderWidth: 1,
                pointRadius: 3,
                fill: false,
                borderWidth: 4,
                data: [10, 12, 15, 17, 18, 170, 160]
            },
        ]
    },
    options: {
        legend: {
            position: "bottom"
        },
        scales: {
            yAxes: [{
                ticks: {
                    fontColor: "rgba(0,0,0,0.5)",
                    fontStyle: "bold",
                    beginAtZero: true,
                    maxTicksLimit: 5,
                    padding: 20
                },
                gridLines: {
                    drawTicks: false,
                    display: false
                }

            }],
            xAxes: [{
                gridLines: {
                    zeroLineColor: "transparent"
                },
                ticks: {
                    padding: 20,
                    fontColor: "rgba(0,0,0,0.5)",
                    fontStyle: "bold"
                }
            }]
        }
    }
});
</script>
</body>
</html>


