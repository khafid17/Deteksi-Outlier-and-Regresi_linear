<?php
require 'path/func/conn.php'; 

if (isset($_POST["register"])){

    if(registrasi($_POST) > 0)
    echo "<script>
            alert('user berhasil di tambah!');
            </script>";
} else{
    echo mysqli_error($connection);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Regristasi</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
    
    <h1>Halaman Regristasi</h1>

    <form action="" method="post">
    
    <ul>
        <li>
            <label for="username">Username :</label>
            <input type="text" name="username" id="username">
        </li>
        <li>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password">
        </li>
        <li>
            <label for="password2">Konfirmasi Password :</label>
            <input type="password" name="password2" id="password2">
        </li>
        <li>
            <button type="submit" nama="regrister"> Register :</button>
        </li>
    </ul>
    
    
    
    </form>
</body>
</html>