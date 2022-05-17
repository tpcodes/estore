<style>
 .table > tbody > tr > th,
.table > tbody > tr > td
{
  border-top: 0px;
}
.footer{
    padding:0px;
}
a {
    color: #9d9d9d;
  }
  a:hover,
  a:focus {
    color: #9d9d9d;
  } 
  body{
      color:#9d9d9d;
  }
  .tables>tbody>tr>td, .tables>tbody>tr>th, .tables>tfoot>tr>td, .tables>tfoot>tr>th, .tables>thead>tr>td, .tables>thead>tr>th {
    padding: 0px;

    }
    i{
        padding-right:15px;
    }
    </style>

<footer class="footer">
<div class="container-fluid">
        <div class="row">
            <div class="col-xs-offset-2 col-xs-12">
                <div class="table-responsive" >
                    <table class="table text-justified tables" >
                        <tdata >
                        <?php 
if(isset($_SESSION['email']))
{ 
    ?>
                           <tr >
                                <td><h3>Information</h3></td>
                                <td><h3>My Account</h3></td>
                                <td><h3>Contact Us</h3></td>
                            </tr>
                            <tr >
                                <td><a href="aboutus.php">About Us</a></td>
                                <td ><a href="logout.php">Logout</a></td> 
                                <td>Contact: +91-123-000000</td>
                            </tr>
                            <tr>
                                <td><a href="contactus.php">Contact Us</a></td>
                                <td><a href="signup.php">Signup</a></td>
                                <td>
                               <a href="https://www.facebook.com/"> <i class="fa fa-facebook"></i></a>
                               <a href="https://twitter.com/"> <i class="fa fa-twitter"></i></a>
                               <a href="https://www.instagram.com"> <i class="fa fa-instagram"></i></a>
                               <a href="https://www.linkedin.com"> <i class="fa fa-linkedin"></i></a>
                                </td>
                            </tr>
                            <?php 
 }else
 {
    ?>
     <tr >
                                <td><h3>Information</h3></td>
                                <td><h3>My Account</h3></td>
                                <td><h3>Contact Us</h3></td>
                            </tr>
                            <tr >
                                <td><a href="aboutus.php">About Us</a></td>
                                <td ><a href="#myModal" data-toggle="modal" data-target="#myModal">Login</a></td> 
                                <td>Contact: +91-123-000000</td>
                            </tr>
                            <tr>
                                <td><a href="contactus.php">Contact Us</a></td>
                                <td><a href="signup.php">Signup</a></td>
                                <td>
                               <a href="https://www.facebook.com/"> <i class="fa fa-facebook"></i></a>
                               <a href="https://twitter.com/"> <i class="fa fa-twitter"></i></a>
                               <a href="https://www.instagram.com"> <i class="fa fa-instagram"></i></a>
                               <a href="https://www.linkedin.com"> <i class="fa fa-linkedin"></i></a>
                                </td>
                            </tr>
                            <?php }
    ?>
                        </tdata>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </footer>

<?php
include "includes\modal.php";
?>