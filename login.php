<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MovieMeter - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="signup">

<nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="#">Movie <span class="sep">Meter</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">

      <ul class="navbar-nav ms-auto">
        
        <li class="nav-item">
          <a class="nav-link text-light" aria-current="page" href="index.php">Home</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link text-light dropdown-toggle" href="categories.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="action.php">Action</a></li>
            <li><a class="dropdown-item" href="comedy.php">Comedy</a></li>
            <li><a class="dropdown-item" href="horror.php">Horror</a></li>
            <li><a class="dropdown-item" href="kids.php">Kids</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link text-light" href="about.php">About</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-light" href="signup.php">Sign Up</a>
        </li>

      


      </ul>

    </div>
  </div>
</nav>


<div class="container">
    <div class="row">
        <div class="col">



<div class="form-card d-flex justify-content-center">

        <div class="card shadow" style="width: 30rem;">
  <div class="card-body">
    <h2 class="card-title form-title text-center">Login</h2>
    <h5 class="card-subtitle form-text mb-2 text-center">Share and chat with people!</h5>
    <p class="card-text">
      
    <form method="post" action="">
            <label for="">Mail</label>
            <br>
            <input type="text" placeholder="mail@website.com" name="mail" class="rounded-pill">
            <br>
            <label for="">Username</label>
            <br>
            <input type="text" placeholder="Username" name="mail" class="rounded-pill">
            <br>
            <label for="">Password</label>
            <br>
            <input type="password" placeholder="Max. 12 characters" name="mail" class="rounded-pill">
            <br>
            <br>
            <input type="submit" name="signup" value="Sign Up" class="rounded-pill">
        </form>
  
  </p>
  
  <p class="text-center">Not registered yet?
  <a class="login" href="signup.php">Create an Account</a>
  <br>
  <br>
  <a href="forget.php">Forget password?</a>
  </p>
  </div>
</div>

</div>









        <!-- <form method="post" action="">
            <label for="">Mail</label>
            <br>
            <input type="text" placeholder="mail@website.com" name="mail">
            <br>
            <label for="">Username</label>
            <br>
            <input type="text" placeholder="Username" name="mail">
            <br>
            <label for="">Password</label>
            <br>
            <input type="password" placeholder="Max. 12 characters" name="mail">
            <br>
        </form> -->

        </div>
    </div>
</div>

<?php







?>




<div class="footer-section">
  <div class="container">
    <div class="row">

  <div class="col-md-12 text-center text-light"> <div class="sep">HERE TO GIVE YOU THAT LITTLE PUSH</div></div>
  <div class="col-md-12 text-center text-light"><h2 class="brand2">Start sharing your Experience today.</h2></div>
  <div class="col-md-12 mb-5 text-center"><button type="button" class="btn btn-outline-warning rounded">Sign Up</button></div>


<div class="col-md-3 col-sm-6"><h2 class="brand text-light">Movie <span class="sep">Meter</span></h2><p class="business-text">Copyright	&#169;2022 MovieMeter, <br> All Rights Reserved</p></div>
<div class="col-md-3 col-sm-6"><span class="text-light help-text">Navigation</span> <br><a href="#">Home</a> &nbsp; &nbsp;<a href="#">Categories</a> <br> <a href="#">Reviews</a> <a href="#">About</a> <br> <a href="#">Contact</a> <a href="#">Sign In</a></div>
<div class="col-md-3 col-sm-6"><span class="text-light help-text">Terms And Policies</span><br><a href="#">Terms and Conditions</a> <br> <a href="#">Privacy Policy</a> <br> <a href="#">Cookie Policy</a></div>
<div class="col-md-3 col-sm-6"><span class="text-light help-text">Need Help?</span><br><span class="business-text">
<a href="mailto:help@movie.co">help@movie.co</a></span><br><a href="https://www.instagram.com/" target="_blank"><i class="bi bi-instagram"></i></a> <a href="https://twitter.com/" target="_blank"><i class="bi bi-twitter"></i></a><a href="https://www.facebook.com/" target="_blank"><i class="bi bi-facebook"></i></a></div>


    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/e0a4ea6349.js" crossorigin="anonymous"></script>