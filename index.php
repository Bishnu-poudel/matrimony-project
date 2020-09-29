<!DOCTYPE html>
<html>
<head>
	<title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  

</head>
<body>
<?php include_once("nav.php")
?>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/lagan.png" alt="hindu marriage" width="1500" height="500">
    </div>
    <div class="carousel-item">
      <img src="image/cristian.jpg" alt="christian marriage" width="1500" height="500">
    </div>
    <div class="carousel-item">
      <img src="image/muslim.jpg" alt="muslim marriage" width="1500" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
   </div>
      <section class="my-3">
        <div class="py-3">
            <h2  class="text-center"> About us</h2>
        </div>
            <div class="cotainer-fluid">
               <div class="row">
                   <div class="col-lg-6 col-md-6 col-12">
                      <img src="image/a1.jpg" class="img-fluid" aboutimg>
                   </div>
                   <div class="col-lg-6 col-md-6 col-12">
                   <h2 class="diaplay-4"> Nepali bibaha </h2>
                     <p class="py-3"> This ritual has been in practice since hundreds of years. It is very sacred ritual and a real kanyaadaan ...
                     </p>
                     <a href="about.php" class="btn btn-success"> learn more </a>
                   </div>
               
              </div>

        </div>
        </section>
        </section>
     <section class="my-3">
        <div class="py-3">
            <h2  class="text-center"> Create your id</h2>
        </div>
        <div class="w-50 m-auto">
          <form action="register.php" method="POST">
            <div class="form-group">
          
            <a href="register.php" class="btn btn-primary">Register</a>
           
            </div>
            
      </section>
     <section class="my-3">
        <div class="py-3">
            <h2  class="text-center"> our gallary</h2>
        </div>

        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-4 col-md-4 co-12"> 
            <div class="card" style="">
               <img class="card-img-top" src="image/lagan.png" height=300px alt="Card image">
                 <div class="card-body">
                   <h4 class="card-title">hindu marriage</h4>
                    <p class="card-text">find your's.</p>
                      <a href="hindu.php" class="btn btn-primary">See Profile</a>
                  </div>
            </div>
</div>
            <div class="col-lg-4 col-md-4 co-12"> 
            <div class="card" style="">
               <img class="card-img-top" src="image/nc1.jpg" height=300px  alt="Card image">
                 <div class="card-body">
                   <h4 class="card-title">celebrity marriage</h4>
                    <p class="card-text">find your's.</p>
                      <a href="celebrity.php" class="btn btn-primary">See Profile</a>
                  </div>
            </div>
</div>
            <div class="col-lg-4 col-md-4 co-12"> 
            <div class="card" style="">
               <img class="card-img-top" src="image/c3.jpg" height=300px  alt="Card image">
                 <div class="card-body">
                   <h4 class="card-title">christian marriage.</h4>
                    <p class="card-text">find your's.</p>
                      <a href="christian.php" class="btn btn-primary">See Profile</a>
                  
            </div>
            </div>
            
          </div>



        </div>
        </section>
    
<?php include"footer.php"
?>
 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>



</body>
</html>