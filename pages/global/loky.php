<?php
    define("RACINE", "/mon_portfolio/");
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>
<body>

<header class="bg-light p-3 sticky-top">
    <div class="container-fluid">
        <img src="<?php echo RACINE ?>sources/images/loky/loky.gif" class="rounded my-auto d-block" style="height: 100px" />
    </div>

</header>
  
    <!-- PREMIERE SECTION -->
<div class="container-fluid">
    
  <div id="carouselExample" class="carousel slide" data-ride="carousel">
    
    <ol class="carousel-indicators">
      <li data-target="#carouselExample" data-slide-to="0" class="active">
      </li>
      <li data-target="#carouselExample" data-slide-to="1">
      </li>
      <li data-target="#carouselExample" data-slide-to="2">
      </li>
    </ol>

    <div class="carousel-inner">
      <div class="carousel-item active bg-success">
        <img src="<?php echo RACINE ?>sources/images/loky/11.png" height="560" class="d-block mx-auto" alt="...">
          
          <div class="carousel-caption">
            <h5 class="text-center">Des plats<b class="text-success text-center"> yummy</b> et  à volonté</h5>
              <p> Tous les jours </p>
          </div>

      </div>

      <div class="carousel-item bg-success">
        <img src="<?php echo RACINE ?>sources/images/loky/22.png"  height="560" class="d-block mx-auto" alt="...">
      
        <div class="carousel-caption">
            <h5> Nos meilleurs plats offerts</h5>
              <p> Grâce à votre carte fidélité</p>
        </div>

      </div>

      <div class="carousel-item bg-success">
        <img src="<?php echo RACINE ?>sources/images/loky/33.png"  height="560" class="d-block  mx-auto" alt="...">
      
        <div class="carousel-caption mb-5">
            <h5 > Notre menu du jour </h5>
              <h6 > Entrées </h6>
                <p> Omelette au cresson</p>
                <p> Carpaccio d'avocat, coriandre</p>
              <h6 > Plats </h6>
                <p> Muffins saumon, ricotta</p>
                <p> Tartines campagnardes</p>
                <p> Pommes de terre, riz, salades</p>
              <h6 > Desserts </h6>
                <p> Millefeuilles de crêpes</p>
                <p> Brownies moelleux</p>
            
        </div>
      
      </div>
    </div>

      <a class="carousel-control-prev" data-slide="prev" role="button" href="#carouselExample">
        <span class="carousel-control-prev-icon" aria-hidden="true">
        </span>
      </a>

      <a class="carousel-control-next" data-slide="next"  role="button" href="#carouselExample">
        <span class="carousel-control-next-icon" aria-hidden="true">
        </span>
      </a>
  
  </div>

</div>
  
    <!-- DEUXIEME SECTION -->
<section class="bg-light pt-5">
    <h2 class="p-5 text-center">La vidéo de la semaine ! !</h2>
        <div class="container-fluid">
                <div class="embed-responsive embed-responsive-16by9 w-75 mx-auto">
                    <iframe width="560" height="315" src="<?php echo RACINE ?>sources/images/loky/loky_video.mp4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="embed-responsive-item"></iframe>
                </div>   
        
        </div>
</section>
  
    <!-- FOOTER -->
<footer class="bg-light p-3 text-dark text-right">
    <div class="container-fluid">
      2020 © Loky
    </div>
</footer class>

