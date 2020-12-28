<?php 
// require_once("deviasi.php");
//require ('simulasi.php');
//--------------------------------------------------------------------
?>


<?php
$x[] = $_GET['score3th'];
$y[] = $_GET['scoreall'];
//$regresi = new RegresiLinier($x, $y);

$nama = $_GET['nama'];
$score3th = $_GET['score3th'];
$scoreall = $_GET['scoreall'];
$a = 10.343308000394;
$b = 1.4209854468789;
$bilangan = 39.10675197;
$jumlah =0;

$hitung=0;

echo "Nama Author : ".$nama."<br/>Score 3th : ".$score3th."<br/>Score Overall : ".$scoreall;
$jumlah = $a+($b*$score3th);
//$reg_dev = $regresi->all;
echo "<br/>regresi : ".$jumlah;
echo "<br/>standar deviasi : ".$bilangan;

$hitung = $jumlah - $bilangan;
echo "<br/>Jika Hasil deviasi lebih besar dari pada standar deviasi maka data dianggap sebagai outlier<br/>";
echo "hasil deviasi : ".$hitung."<br/>Deteksi : ".$hitung[0];



if($hitung<$bilangan)
{
echo "Author Normal";
}else{
    echo "Author di curigai Outlier";
}

?>