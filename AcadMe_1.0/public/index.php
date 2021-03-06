
<?php
// Start the session
session_start();

$_SESSION['search'] = "";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Starter Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/starter-template/">
      <!-- fonts -->
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Inter&family=Noto+Serif&family=Oranienbaum&display=swap" rel="stylesheet">
    

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap-5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="stylesheets/starter-template.css" rel="stylesheet">
    <link href="stylesheets/grid.css" rel="stylesheet">
  </head>
  <body>
    
<nav class="navbar navbar-expand-md navbar navbar  bg-light fixed-top navCustom">
  <div class="container-fluid">
    <a class="navbar-brand nav-top-icon" href="#"><img src = "images/green-logo-01.svg" width="35" height ="30"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <!--<li class="nav-item active">
          <a class="nav-link" aria-current="page" href="index.html">Home</a>
        </li>-->
        <li class="nav-item">
          <a class="nav-link" href="#"><b>BIBLIOGRAPHY</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><b>MY PROFILE</b></a>
        </li>
        <!--<li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>-->
        <!--<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
          <ul class="dropdown-menu" aria-labelledby="dropdown01">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>-->
      </ul>
    
    </div>
  </div>
</nav>

<main class="container">

  <div class="starter-template text-center py-5 px-3">
    <div class="main-logo">
      <img src="images/acadme_big_logo.svg" height="200px" width="200px">
    </div>
      <p class="line-text">
        The World Deserves Better Research.
      </p>
      
      <!-- ad space
      <div class="container themed-container" id= "result">
        <img class = "ad" src= "images/ad.jpg" width="100px" height="120px">
      </div>-->
  </div>
<form class="d-flex" id="search-engine" action="search.php" method="get">
        <input id = "search-input" class="form-control me-2 search-bar" type="search" placeholder="Search for the article that you want to verify" aria-label="Search" name="search-result">
        <button id = "search-button" class="btn btn-outline-success search-button" type="submit" >Search</button>
      </form>
</main><!-- /.container -->

<!--bootstrap library-->
<script src="../bootstrap-5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<!--jquery-->
<script src="jquery-3.5.1.min.js"></script>


  </body>
</html>

