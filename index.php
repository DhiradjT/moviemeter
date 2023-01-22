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
<body>

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



<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="./movie-headers/blackpanther.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="./movie-headers/blackadam.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="./movie-headers/topgun.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./movie-headers/minions.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



<div class="current-movies">
<div class="container my-5">
    <div class="row">
        <div class="col-md-12"> <h3 class="current text-light">CURRENT</h3></div>
        <span class="line rounded-pill m-3"></span>


    <div class="col">

      <div class="card rounded-0 bg-transparent" style="width: 18rem;">
        <img src="./movie-banners/wakandaforever.jpg" class="card-img-top" alt="wakanda-banner">
        <div class="card-body">
        <h5 class="card-title text-light">BLACK PANTHER: <br> WAKANDA FOREVER</h5>
        <h6 class="card-subtitle mb-2 text-muted">161 min ACTION,DRAMA</h6>
       </div>
      </div>

    </div>

    <div class="col">
        
        <div class="card bg-transparent" style="width: 18rem;">
          <img src="./movie-banners/minions.jpg" class="card-img-top" alt="minions-banner">
          <div class="card-body">
          <h5 class="card-title text-light">MINIONS: <br> THE RISE OF GRU</h5>
          <h6 class="card-subtitle mb-2 text-muted">88 min KIDS,COMEDY</h6>
         </div>
        </div>
  
      </div>

      
      <div class="col">
        
        <div class="card bg-transparent" style="width: 18rem;">
          <img src="./movie-banners/maverick.jpg" class="card-img-top" alt="maverick-banner">
          <div class="card-body">
          <h5 class="card-title text-light">TOP GUN: <br> MAVERICK</h5>
          <h6 class="card-subtitle mb-2 text-muted">131 min ACTION</h6>
         </div>
        </div>
  
      </div>

      
      <div class="col">
        
        <div class="card bg-transparent border-0" style="width: 18rem;">
          <img src="./movie-banners/blackadam.jpg" class="card-img-top" alt="blackadam-banner">
          <div class="card-body">
          <h5 class="card-title text-light">BLACK <br> ADAM</h5>
          <h6 class="card-subtitle mb-2 text-muted">124 min ACTION,DRAMA</h6>
         </div>
        </div>
  
      </div>

      
      <div class="col">
        
        <div class="card bg-transparent" style="width: 18rem;">
          <img src="./movie-banners/smile.jpg" class="card-img-top" alt="smile-banner">
          <div class="card-body">
          <h5 class="card-title text-light">SMILE</h5>
          <h6 class="card-subtitle mb-2 text-muted">116 min HORROR</h6>
         </div>
        </div>
  
      </div>

</div>
</div>
</div>


<div class="coming-movies">
<div class="container my-5">
    <div class="row">
        <div class="col-md-12"> <h3 class="current text-light">COMING SOON</h3></div>
        <span class="line rounded-pill m-3"></span>


    <div class="col">

      <div class="card rounded-0 bg-transparent" style="width: 18rem;">
        <img src="./movie-banners/lyle.jpg" class="card-img-top" alt="lyle-banner">
        <div class="card-body">
        <h5 class="card-title text-light">LYLE,LYLE, <br> CROCODILE</h5>
        <span class="release">December 6th</span>
        <h6 class="card-subtitle mb-2 text-muted">107 min KIDS,COMEDY</h6>
       </div>
      </div>

    </div>

    <div class="col">
        
        <div class="card bg-transparent" style="width: 18rem;">
          <img src="./movie-banners/calljane.jpg" class="card-img-top" alt="calljane-banner">
          <div class="card-body">
          <h5 class="card-title text-light">CALL<br> JANE</h5>
          <span class="release">December 7th</span>
          <h6 class="card-subtitle mb-2 text-muted">121 min DRAMA,COMEDY</h6>
         </div>
        </div>
  
      </div>

      
      <div class="col">
        
        <div class="card bg-transparent" style="width: 18rem;">
          <img src="./movie-banners/avatar5.webp" class="card-img-top" alt="avatar-banner">
          <div class="card-body">
          <h5 class="card-title text-light">AVATAR: THE WAY <br> OF WATER</h5>
          <span class="release">December 13th</span>
          <h6 class="card-subtitle mb-2 text-muted">131 min ACTION,DRAMA</h6>
         </div>
        </div>
  
      </div>

      
      <div class="col">
        
        <div class="card bg-transparent border-0" style="width: 18rem;">
          <img src="./movie-banners/pussinboots.jpg" class="card-img-top" alt="pussinboots-banner">
          <div class="card-body">
          <h5 class="card-title text-light">PUSS IN <br> BOOTS</h5>
          <span class="release">December 21st</span>
          <h6 class="card-subtitle mb-2 text-muted">124 min KIDS,DRAMA</h6>
         </div>
        </div>
  
      </div>

      
      

</div>
</div>
</div>





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
</body>
</html>