<?php
// include file php
include "header.php";
require 'path/func/conn.php';   


?>
<!DOCTYPE html>
<html>    
<head>
<style>    

</style>
</head>

<body>

<h4>Jumlah Data Normal dan Outlier Menggunakan Deviasi</h4>
<?php
if (!$connection){
    die ("database tidak ada :".mysqli_connect_error());
}
 $query = mysqli_query($connection, "SELECT hasil from data_regresi where hasil > 39.10675197");
 $data = array();
 while (($row = mysqli_fetch_array($query)) !=null){
     $data[] = $row;
 }
    $hasil = count($data); 
    echo "<textarea style='width:100%; height:75px; '>";
    echo "Jumlah Data Outlier : \n";
    print_r($hasil);
    echo "</textarea>";

?>
 <?php
if (!$connection){
    die ("database tidak ada :".mysqli_connect_error());
}
 $query1 = mysqli_query($connection, "SELECT hasil from data_regresi where hasil < 39.10675197");
 $data1 = array();
 while (($row1 = mysqli_fetch_array($query1)) !=null){
     $data1[] = $row1;
 }
    $hasil1 = count($data1); 
    echo "<textarea style='width:100%; height:75px; '>";
    echo "Jumlah Data Normal : \n";
    print_r($hasil1);
    echo "</textarea>";

?>
<!-- <h4>Jumlah Data Normal dan Outlier Menggunakan Rata-Rata</h4>
<?php
if (!$connection){
    die ("database tidak ada :".mysqli_connect_error());
}
 $query2 = mysqli_query($connection, "SELECT hasil from data_regresi where hasil > 39.10675197");
 $data2 = array();
 while (($row2 = mysqli_fetch_array($query2)) !=null){
     $data2[] = $row2;
 }
    $hasil2 = count($data2); 
    echo "<textarea style='width:100%; height:75px; '>";
    echo "Jumlah Data Outlier : \n";
    print_r($hasil2);
    echo "</textarea>";

?>
 <?php
if (!$connection){
    die ("database tidak ada :".mysqli_connect_error());
}
 $query3 = mysqli_query($connection, "SELECT hasil from data_regresi where hasil < 39.10675197");
 $data3 = array();
 while (($row3 = mysqli_fetch_array($query3)) !=null){
     $data3[] = $row3;
 }
    $hasil3 = count($data3); 
    echo "<textarea style='width:100%; height:75px; '>";
    echo "Jumlah Data Normal : \n";
    print_r($hasil3);
    echo "</textarea>";

?> -->
</body>
</html>