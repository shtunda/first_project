<?php include_once("function.php")?>
<?php get_header()?>
<?php print_r($_GET);?>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.autozaz.kiev.ua/images/models/bigmodel_59.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://i.infocar.ua/i/2/1305/15937/1024x.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://besplatka.ua/aws/38/09/17/97/zaz-forza-1-5i--krasnyi--2012-photo-1cb9.jpg" class="d-block w-100"
        alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<?php get_footer()?>