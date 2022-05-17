<?php
require 'includes\common.php';
if (!isset($_SESSION['email'])) {
    header('location: mainpage.php'); }
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Cart</title>
    <link rel="stylesheet" href="style.css" type="text/css">

    <style>
        /* div{
            border:1px solid;
        } */
        .panel-footer{
            background-color:rgba(0,0,0,0.8);
            color:white;
            padding:0px;
            border:none;
        }
        .panel-body{
           
            color:black;
        }
      .panel .panel-heading{
            background-color:#fee715ff;
            color:gray;
        }
        
 .fa{
    color:red;
}
    </style>
        </style>
</head>
<body>
<?php
include 'includes\header.php';
?>
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2">
                <div class="panel ">
                    <div class="panel-heading">
                        <div class="table-responsive">
                            <div class="text-center">
                                <p style=" font-size:25px;"><strong>ORDER SUMMARY</strong></p>
                            </div>   
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <tdata> 
                                <tr class="info" style=" font-size:22px;">
                                    <th><center>Item Number</center></th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Net Amount</th>
                                    <th></th>
                                </tr>  
                                    <?php
                                    $user_id=$_SESSION['id'];
                                    $sql="select * from users_items inner join  items on users_items.item_id=items.id where user_id='$user_id' and status='Added to cart'";
                                    $sql_r=mysqli_query($con,$sql);
                                    $nrows=mysqli_num_rows($sql_r);
                                    $sum=0;
                                    $count=1;
                                    $r="";
                                    if($nrows==0)
                                    {?>
                                    <tr style=" font-size:18px;"><td><?php echo " Add items to the cart first!";?></td></tr>
                                    <?php  }                   
                                    else{              
                                        while($row=mysqli_fetch_array($sql_r))
                                        { ?>
                                        <?php $r=$row['id'].",".$r; ?>
                                    <tr style=" font-size:20px;">
                                        <td><center><?php echo $count; ?></center></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo "₹ ".$row['price']; ?></td>
                                        <div class="btn-group">
                                        <td><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-minus"></span></button>
                                        <button class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span></button>
                                        </td>
                                        <td><?php echo "₹ ".$row['price']; ?></td>
                                        </div>
                                        <?php echo "<td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link' style='text-decoration:none; color:red;'> Remove</a></td>" ?>
                                    </tr>
                                        <?php $sum=$sum+$row['price'];?> 
                                        <?php $count++; ?>   
                                    <?php } }?>
                        
                            </tdata>
                        </table>
                    </div>
                    <div class="panel-footer">
                        <table class="table">
                            <tdata>
                                <tr>
                                    <?php if($nrows>0){ ?>
                                    <td style="padding-left:30px;"></td>
                                    <td style="padding-left:50px; font-size:25px;"><center>Order Total</center></td>
                                    <td style="padding-left:50px;font-size:25px;"><?php echo "₹ ".$sum ?> </td>
                                    <?php echo "<td><a href='success.php?id={$r}'><button class='btn btn-block  btn-danger'>Confirm Order</button></a></td>" ?>
                                    <?php }
                                    else{ ?>
                                    <td style="padding-left:30px;"></td>
                                    <td style="padding-left:50px; font-size:25px;"><center>Order Total</center></td>
                                    <td style="padding-left:50px;font-size:25px;"><?php echo "₹ ".$sum ?> </td>
                                    <?php echo "<td><a href='products.php'><button class='btn btn-block btn-danger'>Add Items</button></a></td>" ?>
                                    <?php   }
                                    ?>
                                </tr>
                            </tdata>
                        </table>
                    </div>
                </div>                
            </div>
        </div>
    </div>
     <?php
   include 'includes\footer.php';
   ?>
</body>
</body>
</html>