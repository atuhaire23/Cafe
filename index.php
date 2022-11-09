
<?php  include "static/header.php";  ?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/img1.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
          <h5>Pasted Meat & Gravy</h5>
          <p>Add this to your meal for a new experience!</p>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/img2.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
          <h5>Chicken Shawarma</h5>
          <p>Yummy, Yummy!</p>
        </div>
    </div>
         
    <div class="carousel-item">
      <img class="d-block w-100" src="img/img3.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
          <h5>Drumsticks</h5>
          <p>We got you!</p>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<?php  include "static/footer.php";  ?>