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
    <a class="navbar-brand text-light" href="#">Movie <span class="sep">Meter</span></a>
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


<!-- <div

class="p-3 text-center bg-image"

style="

  background-image: url('./movie-headers/blackpanther.jpg');
  height: 400px;

"   

>

<div class="mask">

  <div class="d-flex justify-content-center align-items-center w-60">

    <div class="text-white">

    </div>

  </div>

</div>

</div> -->

<div class="banner">
  <a href="https://www.youtube.com/watch?v=_Z3QKkl1WyM">
<img src="./movie-banners/blackbanner.jpg" class="img-fluid"  alt="blackbanner">
</a>
<i class="bi bi-play-fill"></i>
</div>




<div class="movie-info">
    <div class="container">
        <div class="row">
            <h2 class="col-md-12 my-3 movie-title text-light">BLACK PANTHER: WAKANDA FOREVER</h2>
            <div class="col-md-8 text-muted"><i class="bi bi-clock"></i> 161 min <span class="badge rounded-pill text-bg-warning">ACTION</span> <span class="badge rounded-pill text-bg-warning">DRAMA</span></div>

        <div class="col-md-8 text-muted mt-3">In Marvel Studios' Black Panther: Wakanda Forever, Queen Ramonda (Angela Bassett), Shuri (Letitia Wright), M'Baku (Winston Duke), Okoye (Danai Gurira) and the Dora Milaje (including Florence Kasumba) battle after the death of King T'Challa to protect their kingdom.</div>

        <h2 class="col-md-12 my-5 movie-title text-light">Reviews</h2>


        <h1>
        <?php

try {
    $db = new PDO("mysql:host=localhost;dbname=moviemeter", "root", "");

    $query = $db->prepare("SELECT * FROM klanten ");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach($result as $data) {
        echo $data["name"] .  " ";
        echo $data["lastName"] . "<br>";
        echo $data["review"]. "<br>" . "<br>";
        
    }

}   catch(PDOException $e) {
    die("Error! :" . $e->getMessage());
}
 
    ?>
    </h1>

  






        </div>
    </div>
</div>




