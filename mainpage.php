<?php
include 'includes\common.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
    <title>Index</title>
    <link rel="stylesheet" href="style.css" type="text/css"> 
 <style>
.jumbotron{
   width:100%;
   position: relative;
   padding-top: 6%;
   padding-bottom: 6%;
   margin-top: 12%;
   margin-bottom: 6px%;
   background-color: rgba(0, 0, 0, 0.7);
   font-size:35px;
       
}

.btn{
       border-radius :25px;
       background-color:red;
       border:none;
   }
   .btn:hover{
     background-color:#5a0000;
   }
   .carousel-indicators li {
     border:1px solid red;
   }
   .carousel-indicators .active {
     background-color:red;
   }
   .fa{
    color:red;
}
  </style>  
</head>
<body style="margin-top:-50px; margin-bottom:-200px; ">
<?php
include 'includes\header.php';
?> 
<div id="carousel-example-generic" class="carousel slide" data-interval="3000" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators" style="color:red;">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active" ></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="image/cor.jpg" alt="..." style="width:100%;" >
      <div class="carousel-caption">
   <div class="jumbotron" >
  Probably not the Cheapest but the Best !<br>
  <a href="products.php"><button class="btn btn-primary btn-lg">Shop Now</button></a>
   </div>
      </div>
    </div>
    <div class="item">
    <img src="image/ayp.jpg" alt="..." style="width:100%;">
      <div class="carousel-caption">
      <div class="jumbotron" >
  Capture Everything in an Artistic way !<br>
  <a href="products.php"><button class="btn btn-primary btn-lg">Shop Now</button></a>
   </div>
      </div>
      </div>
    <div class="item">
     <img src="image/p1.jpg" alt="..." style="width:100%;">
      <div class="carousel-caption">
      <div class="jumbotron" >
  Your True Companion !<br>
  <a href="products.php"><button class="btn btn-primary btn-lg">Shop Now</button></a>
   </div>
      </div>
      </div>
    <div class="item">
     <img src="image/s1.jpg" alt="..." style="width:100%;">
      <div class="carousel-caption">
      <div class="jumbotron" >
Plug it, Listen to it, Feel it !<br>
  <a href="products.php"><button class="btn btn-primary btn-lg">Shop Now</button></a>
   </div>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true" style="color:white;"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true" style="color:white;"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<?php
include 'includes\footer.php';
?>
</body>
</html>