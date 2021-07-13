<?php 
session_start();
error_reporting(0); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="bootstrap-4.4.1-dist/bootstrap-4.4.1-dist/css/bootstrap-grid.min.css" rel="stylesheet">
      <link href="rently.css" rel="stylesheet">

    <title>Rently.com</title>
  </head>
  <body>
      
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar fixed-top ">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <span class="navbar-brand mb-0 h1" ><big><a href="rently.php">Rently</a></big></span>
            </div>
              
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="show_car.php">Find Cars</a ></li>
                    <li class="nav-item"><a class="nav-link" href="bookings.php">Bookings</a ></li>
                </ul>
                
                <?php 
                    if($_SESSION['loggedinUser']){ // if user is logged in
                ?>
                
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="add_cars.php">Add Car</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Log Out</a></li>
                </ul>
                
                <?php }else{?>
                
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="signin.php">Sign In</a></li>
                    <li class="nav-item"><a class="nav-link" href="rently.php#why-us">About</a></li>
                </ul>
                
                <?php }?>
            </div>
        </div><!--container-->
    </nav>