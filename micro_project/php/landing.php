<?php
session_start();


if (isset($_POST['logout'])) {
    unset($_SESSION['username']);
    session_unset();
    session_destroy();
    $_SESSION = [];
    header('location: index.php');
}
?>
<?include "../connection.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Landing</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<header>
    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 py-4">
                    <h4 class="text-white">About</h4>
                    <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences
                        long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact
                        information.
                    </p>
                </div>
                <div class="col-sm-4 py-4">
                    <h4 class="text-white">Contact</h4>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#" class="text-white">Follow on Twitter</a>
                        </li>
                        <li>
                            <a href="#" class="text-white">Like on Facebook</a>
                        </li>
                        <li>
                            <a href="#" class="text-white">Email me</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark">
        <div class="container d-flex justify-content-between">
            <img src="../img/purplee.png" class="rounded-circle" alt="Indhan" width="50" height="50">
            <a href="#" class="navbar-brand">Indhan</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col-2">
            <nav class="navbar bg-light">

                <!-- Links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="landing.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                Master Data
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="fuelingrecords.php">Fueling Records</a>
                                <a class="dropdown-item" href="#">Link 2</a>
                                <a class="dropdown-item" href="#">Link 3</a>
                            </div>
                        </div>
                    </li><br>
                    <li class="nav-item">
                        <form method="post" action="landing.php">
                            <a><input type="submit" name="logout" value="LOGOUT"></a>
                        </form>
                    </li>
                </ul>

            </nav>
        </div>
        <div class="col-10">

        </div>
    </div>
</div>

<!---->
<!--<nav class="navbar navbar-expand-sm bg-dark navbar-dark">-->
<!--  <ul class="navbar-nav">-->
<!---->
<!--    <li class="nav-item">-->
<!--      <a class="nav-link" href="landing.php">Indhan</a>-->
<!--    </li>-->
<!---->
<!--     <div class="dropdown dropright">-->
<!--          <button type="button" class="btn btn-outline-info" data-toggle="dropdown">-->
<!--              Menu-->
<!--          </button>-->
<!--          <div class="dropdown-menu">-->
<!--              <a class="dropdown-item" href="#">Fueling Records</a>-->
<!--              <a class="dropdown-item" href="#">Maintanance Records</a>-->
<!--              <a class="dropdown-item" href="#">Repair Records</a>-->
<!--              <a class="dropdown-item" href="#">Accident Records</a>-->
<!--              <a class="dropdown-item" href="#">Tax and Insurance Records</a>-->
<!--              <a class="dropdown-item" href="#">Expenses Records</a>-->
<!--          </div>-->
<!--      </div>-->
<!--      <div class="dropdown dropright">-->
<!--          <button type="button" class="btn btn-outline-info" data-toggle="dropdown" style="padding-right: auto;">-->
<!--              Welcome-->
<!--          </button>-->
<!--          <div class="dropdown-menu">-->
<!--              <form method="post" action="landing.php">-->
<!--                  <input type="submit" name="logout" value="LOGOUT" >-->
<!--              </form>-->
<!--          </div>-->
<!--      </div>-->
<!--  </ul>-->
<!--</nav>-->
<br>

</body>
</html>
