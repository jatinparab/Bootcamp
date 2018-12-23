<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootkart Page</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Bootkart</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?product=Mobiles">Mobiles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?product=TVs">TVs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?product=Laptops">Laptops</a>
        </li>

      </ul>
      <form class="form-inline my-2 my-lg-0">
    <?php
    if(isset($_SESSION['username'])){
    ?>
        <a href="cart.php" class="btn btn-outline-success my-2 my-sm-0 mr-2">View Cart</a>

        <a href="logout.php" class="btn btn-outline-success my-2 my-sm-0">Logout</a>

    <?php }else{ ?>
       <a href="login.php" class="btn btn-outline-success my-2 my-sm-0" >Login</a>
    <?php } ?>
      </form>
    </div>
  </nav>