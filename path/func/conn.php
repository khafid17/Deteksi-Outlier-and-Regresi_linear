<?php

// Akhir script connection database

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ta";


$connection = mysqli_connect($servername, $username, $password, $dbname);

// function registrasi($data){
//     global $connection;

//     $username = strtolower(stripslashes($data["username"]));
//     $password = mysqli_real_escape_string($connection, $data["password"]);
//     $password2 = mysqli_real_escape_string($connection, $data["password2"]);

//     if ($password !== $password2){
//         echo "<script>
//         alert('konfirmasi password tidak sesuai!');
//         </script>";
//         return false;
//     }
//     $password = password_hash($password, password_default);

//     mysqli_query($connection, "INSERT INTO user1 value('','$username', '$password')");

//     return mysqli_affected_rows($connection);
