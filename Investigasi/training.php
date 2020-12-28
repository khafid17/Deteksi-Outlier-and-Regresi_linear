<?php 
// require_once("deviasi.php");
require ('hasil2.php');
//--------------------------------------------------------------------

$x[] = $_GET['score3th'];
$y[] = $_GET['scoreall'];
$regresi = new RegresiLinier($x, $y);

$nama = $_GET['nama'];
$score3th = $_GET['score3th'];
$scoreall = $_GET['scoreall'];

$bilangan = 12.368429385093;

$hitung=0;
echo "<span class='success bg-alert alert-primary text-center mt-3'><h2><b>Tampil Data</b></h2></span><br/>";
echo "Nama Author : ".$nama."<br/>Score 3th : ".$score3th."<br/>Score Overall : ".$scoreall;



$reg_dev = $regresi->all;
echo "<br/>regresi : ".$reg_dev[0];
echo "<br/>standar deviasi : ".$bilangan;

$hitung = $reg_dev[0] - $bilangan;
echo "<br/>hasil deviasi : ".$hitung."<br/>Deteksi : ".$hitung[0];


if($hitung<$bilangan)
{
echo "Author Normal";
}else{
    echo "Author di curigai Outlier";
}

?>