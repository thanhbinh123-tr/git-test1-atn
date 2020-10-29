<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Header
    </title>
    <!-- custom css -->
    <link rel="stylesheet" href="../css/cloudBs.css" type="text/css">
    <!-- bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <div class="header-contain">
          <div class="contain">
            <div class="brand-img">
              <img src="../images/logo/ATN-logo-0FCFF3C433-seeklogo.com.png" alt="error" class="resized-img">
            </div>
            <!-- nav -->
            <nav class="navbar navbar-expand-lg navbar-dark nav-bg-dark fixed-top">
              <a class="navbar-brand" href="./index.php">HomePage</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-item nav-link" href="#">Company <span class="sr-only">(current)</span></a>
                  <a class="nav-item nav-link" href="#">Prouct</a>
                  <a class="nav-item nav-link" href="#">Contact</a>
                  <?php
                  if (!isset($_SESSION['logged'])){
                    echo '
                          <a class="nav-item nav-link ml-auto" href="./login.php">Login</a>
                      ';
                  
                  }
                ?>
                  
                  <a class="nav-item nav-link ml-auto" href="./registration.php">Signup</a>
                </div>
              <?php
                 if (isset($_SESSION['logged'])){
                  echo'
                  <form action="../html/includes/logout.inc.php" method="post">
                  <button class="btn-btn-primary ml-auto" type="submit">log out</button>
                  </form>
                    
                  ';

                }
             
              ?>   
              
              
              </div>
              <div class="navbar-nav ml-auto">
                <div class="search-box">
                    <input type="text" class="input-type-box" placeholder="Search...">
                    <span class="input-icon-box"><i class="fas fa-search"></i></span>
                </div>
              </div>
            </nav>
            <!-- end nav -->
          </div>
        </div>
       </header>
       <!-- script for bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>  

</body>
</html>