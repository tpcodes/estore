<?php
include 'includes\common.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css" type="text/css">  
    <style>
 .fa{
    color:red;
}
.btn{
       border-radius :25px;
       background-color:#f9a602;
       border:none;
   }
    </style>
</head>
<body style="color:black;">
<?php
include 'includes\header.php';
?>
<div class="container">
    <div class="row">
        <div class="col-xs-10">
            <h3>Live Support</h3><br>
            <p> 24 Hours | 7 Days a week | 365  days a year Live Technical Support</p>
            <p align="justify">it is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more or less normal distribution of letters. There are many variations of passages of lorem Ipsum available, but the majority have suffered alteration in  some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of lorem Ipsum, you need to be sure there isn't anything embarrasing hidden in the middle of text. </p>
        </div>
        <div class="col-xs-2">
             <img src="image/cs.png" alt="about us" height="200px" width="300px"><br><br>
        </div>
    </div>   

    <div class="row">
        <div class="col-xs-12 col-md-8">
            <form method="post" action="contact_script.php">
            <label><h3>CONTACT US</h3></label>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" placeholder="Name" class="form-control">
                </div>
                <div class="form-group">
                     <label>Email</label>
                    <input type="text" name="email" placeholder="E-mail"  class="form-control">
                </div>
                <div class="form-group">
                <label>Message</label>
                <textarea  name="message" class="form-control" rows="10" cols="10"></textarea>
          
                </div>
               <div class="form-group"> <button type="submit" class="btn btn-primary">Submit</button></div> 

            </form>
        
        </div>
            <div class="col-xs-12 col-md-4">
                <h3>COMPANY INFORMATION</h3><br>
                <h5>500 Lorem Ipsum Dolor Sit,</h5>
                <h5>22-56-2-9 Sit Amet, Lorem,</h5>
                <h5>USA</h5>
                <h5>Phone: (00) 222 666 444</h5>
                <h5>Fax: (000) 000 00 00 0</h5>
                <h5>Email: info@mycompany.com</h5>
                <h5>Follow on:
                
                <a href="https://www.facebook.com/"> <i class="fa fa-facebook"></i></a>
                <a href="https://twitter.com/"> <i class="fa fa-twitter"></i></a>
                <a href="https://www.instagram.com"> <i class="fa fa-instagram"></i></a>
                <a href="https://www.linkedin.com"> <i class="fa fa-linkedin"></i></a>
                </h5>
                                
        
            </div>
    </div>
</div>

<?php
include 'includes\footer.php';
?>
</body>
</html>