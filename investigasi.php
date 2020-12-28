<?php
include "header.php";
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    
    <style>
        .align-middle {
            vertical-align: middle !important;
        }
    </style>
    <title>investigation</title>
  </head>

  <body>

    <title>INVESTIGASI</title>
  </head>
  <body>
  
  <div class ="container">
  <div class="main">
	 
    <h2 class="alert alert-primary text-center mt-3">Masukkan Data</h2>
    <form method="get" action="training.php" id="form">
    <div class="form-group">
        <label for="formGroupExampleInput">Nama Author</label>
        <input type="text" class="form-control" name="nama" id="nama" placeholder="masukan nama">
     </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Score 3th</label>
        <input type="text" class="form-control" name="score3th" id="score3th" placeholder="masukan score 3th">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Score Overall</label>
        <input type="text" class="form-control" name="scoreall" id="scoreall" placeholder="masukan score overall">
        <input type="submit" name="submit" id="submit" value="Submit" class="bg-info text-white text-center mt-2" >
    </div>
    
    </form>
   
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  	<!-- include JavaScript file here-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/metode.js"></script>
  
  </body>
</html>