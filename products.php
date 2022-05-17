<?php
include 'includes\common.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Products</title>
    <link rel="stylesheet" href="style.css" type="text/css">
   <style>
   .btn{
       border-radius :25px;
       background-color:#f9a602;
       border:none;
   }
   .jumbotron{
    background-color:rgba(249,166,2,0.8);
    color:white;
   }
   
 .fa{
    color:red;
}
    
   </style>
</head>
<body>
    
    <?php
    include 'includes\header.php';
    include 'includes\Check-if-added.php';
    ?>

    <div class="container">
        <div class="jumbotron">
        <center> <h1>Welcome to our Gadgets Store!</h1>
            <p>We have the best Cameras, Smartphones, Laptops and Earphones for you. </p>
        <p>No need to hunt around, we
                have all in one place.</p></center>
        </div><br>

        <div class="container">
        <b style="color:black;font-size:40px;">Cameras</b>
        </div><br>
        
        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="image\5.jpg" class="img-responsive" alt="cameras">
                    <div class="caption">
                        <h3>Cannon EOS</h3>
                        <P>Price:Rs. 36000.00</P>
                        
                        <?php 
                        if (!isset($_SESSION['email'])) 
                        { ?> 
                        <p><a href="#myModal"  data-toggle="modal" data-target="#myModal" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                        } 
                        else { 
                            if (check_if_added_to_cart(1)) 
                            { 
                            echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } 
                            else { ?> 
                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary"  >Add to cart</button></a>
                            <?php }
                             } ?>  
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="image\2.jpg" class="img-responsive" alt="cameras">
                    <div class="caption">
                        <h3>Nikon DSLR</h3>
                        <P>Price:Rs. 40000.00</P>
                        
                        
                        <?php 
                        if (!isset($_SESSION['email'])) 
                        { ?> 
                        <p><a href="#myModal"   data-toggle="modal" data-target="#myModal" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                        } 
                        else { 
                            if (check_if_added_to_cart(2)) 
                            { 
                            echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } 
                            else { ?> 
                            <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary"  >Add to cart</button></a>
                            <?php }
                        } 
                        ?>
         

                    </div>

    
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="image\3.jpg" class="img-responsive" alt="cameras">
                    <div class="caption">
                        <h3>Sony DSLR</h3>
                        <P>Price:Rs. 50000.00</P>
                       
                        <?php 
                        if (!isset($_SESSION['email'])) 
                        { ?> 
                        <p><a href="#myModal"  data-toggle="modal" data-target="#myModal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                        } 
                        else { 
                            if (check_if_added_to_cart(3)) 
                            { 
                            echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } 
                            else { ?> 
                            <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary"  >Add to cart</button></a>
                            <?php }
                        } 
                        ?>
         


                    </div>

    
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="image\4.jpg"class="img-responsive" alt="cameras">
                    <div class="caption">
                        <h3>Olympus DSLR</h3>
                        <P>Price:Rs. 80000.00</P>
                        <?php 
                        if (!isset($_SESSION['email'])) 
                        { ?> 
                        <p><a href="#myModal"  data-toggle="modal" data-target="#myModal" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                        } 
                        else { 
                            if (check_if_added_to_cart(4)) 
                            { 
                            echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } 
                            else { ?> 
                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary"  >Add to cart</button></a>
                            <?php }
                        } 
                        ?>
         


                    </div>

    
                </div>
            </div>
        </div><br><br>

        <div class="container">
        <b style="color:black;font-size:40px;">Smartphones</b>
        </div><br>
        
        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="image\i122.jpg" class="img-responsive" alt="phones">
                    <div class="caption">
                        <h3>Apple iPhone 12</h3>
                        <P>4.7 Inch Display, 3210mAh Battery, 6GB Ram</P>
                        <P>Price:Rs. 74999.00</P>
                        <?php 
                        if (!isset($_SESSION['email'])) 
                        { ?> 
                        <p><a href="#myModal" data-toggle="modal" data-target="#myModal" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                        } 
                        else { 
                            if (check_if_added_to_cart(5)) 
                            { 
                            echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } 
                            else { ?> 
                            <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary"  >Add to cart</button></a>
                            <?php }
                        } 
                        ?>
         

                    </div>

    
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="image\pixel.jpg" class="img-responsive" alt="phones">
                    <div class="caption">
                        <h3>Google Pixel 4</h3>
                        <P>5 Inch Display, 2770mAh Battery, 4GB Ram</P>
                        <P>Price:Rs. 35999.00</P>
                        <?php 
                        if (!isset($_SESSION['email'])) 
                        { ?> 
                        <p><a href="#myModal" data-toggle="modal" data-target="#myModal" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                        } 
                        else { 
                            if (check_if_added_to_cart(6)) 
                            { 
                            echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } 
                            else { ?> 
                            <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary"  >Add to cart</button></a>
                            <?php }
                        } 
                        ?>
         


                    </div>

    
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="image\samsung.jpg" class="img-responsive" alt="phones">
                    <div class="caption">
                        <h3>Samsung Note 10</h3>
                        <P>6.3Inch Display, 3500mAh Battery, 8GB Ram</P>
                        <P>Price:Rs. 75999.00</P>
                        <?php 
                        if (!isset($_SESSION['email'])) 
                        { ?> 
                        <p><a href="#myModal" data-toggle="modal" data-target="#myModal" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                        } 
                        else { 
                            if (check_if_added_to_cart(7)) 
                            { 
                            echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } 
                            else { ?> 
                            <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary"  >Add to cart</button></a>
                            <?php }
                        } 
                        ?>
         

                    </div>

    
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="image\mi.png"class="img-responsive" alt="phones">
                    <div class="caption">
                        <h3>XIAOMI MI 10</h3>
                        <P>6.67 Inch Display, 4780mAh Battery, 8GB Ram</P>
                        <P>Price:Rs. 49999.00</P>
                        <?php 
                        if (!isset($_SESSION['email'])) 
                        { ?> 
                        <p><a href="#myModal" data-toggle="modal" data-target="#myModal" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                        } 
                        else { 
                            if (check_if_added_to_cart(8)) 
                            { 
                            echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } 
                            else { ?> 
                            <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary"  >Add to cart</button></a>
                            <?php }
                        } 
                        ?>
         


                    </div>

    
                </div>
            </div>
        </div><br><br>

        <div class="container">
        <b style="color:black;font-size:40px;">Laptops</b>
        </div><br>

        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="image\mcpro.jpeg" class="img-responsive" alt="laptops" >
                    <div class="caption">
                        <h3>Apple Macbook Pro</h3>
                        <P>4 Gb Ram, 128 GB SSD,Mac OS X</P>
                        <P>Price:Rs. 85729.00</P>
                        <?php 
                        if (!isset($_SESSION['email'])) 
                        { ?> 
                        <p><a href="#myModal" data-toggle="modal" data-target="#myModal" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                        } 
                        else { 
                            if (check_if_added_to_cart(9)) 
                            { 
                            echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } 
                            else { ?> 
                            <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary"  >Add to cart</button></a>
                            <?php }
                        } 
                        ?>
         


                    </div>

    
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="image\zenbook.jpg" class="img-responsive" alt="laptops">
                    <div class="caption">
                        <h3>Asus Zenbook 13</h3>
                        <P>8 Gb Ram, 512 GB SSD,Windows 10</P>
                        <P>Price:Rs. 84990.00</P>
                        <?php 
                        if (!isset($_SESSION['email'])) 
                        { ?> 
                        <p><a href="#myModal" data-toggle="modal" data-target="#myModal" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                        } 
                        else { 
                            if (check_if_added_to_cart(10)) 
                            { 
                            echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } 
                            else { ?> 
                            <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary"  >Add to cart</button></a>
                            <?php }
                        } 
                        ?>
         


                    </div>

    
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="image\inspiron.jpg" class="img-responsive" alt="laptops">
                    <div class="caption">
                        <h3>Dell Inspiron 15</h3>
                        <P>8 Gb Ram, 2 TB SSD, Windows 10</P>
                        <P>Price:Rs. 84000.00</P>
                        <?php 
                        if (!isset($_SESSION['email'])) 
                        { ?> 
                        <p><a href="#myModal" data-toggle="modal" data-target="#myModal" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                        } 
                        else { 
                            if (check_if_added_to_cart(11)) 
                            { 
                            echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } 
                            else { ?> 
                            <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary"  >Add to cart</button></a>
                            <?php }
                        } 
                        ?>
         


                    </div>

    
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="image\pavilion.jpg"class="img-responsive" alt="laptops">
                    <div class="caption">
                        <h3>HP Pavilion 15</h3>
                        <P>8 Gb Ram, 1 TB SSD, Windows 10</P>
                        <P>Price:Rs. 65499.00</P>
                        <?php 
                        if (!isset($_SESSION['email'])) 
                        { ?> 
                        <p><a href="#myModal" data-toggle="modal" data-target="#myModal" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                        } 
                        else { 
                            if (check_if_added_to_cart(12)) 
                            { 
                            echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } 
                            else { ?> 
                            <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary"  >Add to cart</button></a>
                            <?php }
                        } 
                        ?>
         


                    </div>

    
                </div>
            </div>
        </div><br><br>

        <div class="container">
        <b style="color:black;font-size:40px;">Earphones</b>
        </div><br>
        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="image\airpods.jpg" class="img-responsive" alt="headphones">
                    <div class="caption">
                        <h3>Airpod Pro</h3>
                        <P>Price:Rs. 24900.00</P>
                        
                        <?php 
                        if (!isset($_SESSION['email'])) 
                        { ?> 
                        <p><a  href="#myModal" data-toggle="modal" data-target="#myModal" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                        } 
                        else { 
                            if (check_if_added_to_cart(13)) 
                            { 
                            echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } 
                            else { ?> 
                            <a href="cart-add.php?id=13" name="add" value="add" class="btn btn-block btn-primary"  >Add to cart</button></a>
                            <?php }
                             } ?>  
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="image\rockerz.jpg" class="img-responsive" alt="headphones">
                    <div class="caption">
                        <h3>Boat Rockerz 510</h3>
                        <P>Price:Rs. 1899.00</P>
                        
                        
                        <?php 
                        if (!isset($_SESSION['email'])) 
                        { ?> 
                        <p><a href="#myModal" data-toggle="modal" data-target="#myModal" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                        } 
                        else { 
                            if (check_if_added_to_cart(14)) 
                            { 
                            echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } 
                            else { ?> 
                            <a href="cart-add.php?id=14" name="add" value="add" class="btn btn-block btn-primary"  >Add to cart</button></a>
                            <?php }
                        } 
                        ?>
         

                    </div>

    
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="image\neckphone.jpg" class="img-responsive" alt="headphones">
                    <div class="caption">
                        <h3>Mi Neckband</h3>
                        <P>Price:Rs. 1599.00</P>
                       
                        <?php 
                        if (!isset($_SESSION['email'])) 
                        { ?> 
                        <p><a href="#myModal" data-toggle="modal" data-target="#myModal" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                        } 
                        else { 
                            if (check_if_added_to_cart(15)) 
                            { 
                            echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } 
                            else { ?> 
                            <a href="cart-add.php?id=15" name="add" value="add" class="btn btn-block btn-primary"  >Add to cart</button></a>
                            <?php }
                        } 
                        ?>
         


                    </div>

    
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="image\sony.jpg"class="img-responsive" alt="headphones">
                    <div class="caption">
                        <h3>Sony MDR</h3>
                        <P>Price:Rs. 2499.00</P>
                        <?php 
                        if (!isset($_SESSION['email'])) 
                        { ?> 
                        <p><a href="#myModal" data-toggle="modal" data-target="#myModal" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                        } 
                        else { 
                            if (check_if_added_to_cart(16)) 
                            { 
                            echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } 
                            else { ?> 
                            <a href="cart-add.php?id=16" name="add" value="add" class="btn btn-block btn-primary"  >Add to cart</button></a>
                            <?php }
                        } 
                        ?>
         


                    </div>

    
                </div>
            </div>
        </div>

    </div><br><br><br><br>
    <?php
include 'includes\footer.php';
?>
</body>
</html>