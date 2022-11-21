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

<nav class="navbar fixed-top navbar-expand-lg ">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="#">Movie <div class="sep">Meter</div></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">

      <ul class="navbar-nav ms-auto">
        
        <li class="nav-item">
          <a class="nav-link text-light" aria-current="page" href="#">Home</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link text-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item " href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Comedy</a></li>
            <li><a class="dropdown-item" href="#">Horror</a></li>
            <li><a class="dropdown-item" href="#">Kids</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link text-light" href="#">Reviews</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-light" href="#">About</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-light" href="#">Contact</a>
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

    <div class="col">

      <div class="card" style="width: 18rem;">
        <img src="./movie-banners/wakandaforever.jpg" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">BLACK PANTHER: <br> WAKANDA FOREVER</h5>
        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
       </div>
      </div>

    </div>

    <div class="col">
        
        <div class="card" style="width: 18rem;">
          <img src="./movie-banners/minions.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">MINIONS: <br> THE RISE OF GRU</h5>
          <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
         </div>
        </div>
  
      </div>

      
      <div class="col">
        
        <div class="card" style="width: 18rem;">
          <img src="./movie-banners/maverick.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">TOP GUN: <br> MAVERICK</h5>
          <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
         </div>
        </div>
  
      </div>

      
      <div class="col bg.transparent">
        
        <div class="card" style="width: 18rem;">
          <img src="./movie-banners/blackadam.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">BLACK <br> ADAM</h5>
          <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
         </div>
        </div>
  
      </div>

      
      <div class="col">
        
        <div class="card" style="width: 18rem;">
          <img src="./movie-banners/smile.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">SMILE</h5>
          <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
         </div>
        </div>
  
      </div>

      
 




        







</div>
</div>
</div>













<!-- <div class="black-panther">
    <img src="./movie-headers/blackpanther.jpg" alt="blackpanther">
</div> -->



        <!-- <div class="p-5 bg-image" class="img-fluid" style="background-image: url('./movie-headers/blackpanther.jpg');" >
        </div> -->



<!-- 
<div class="hero-img bg-image" style="background-image: url('./img/test2.png'); height: 310px;"></div> -->


<!-- 
<div class="p-5 bg-image" class="img-fluid" style="background-image: url('./movie-headers/blackpanther.jpg'); background-size:cover;" >
        </div> -->















































<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/e0a4ea6349.js" crossorigin="anonymous"></script>
</body>
</html>