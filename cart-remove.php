<?php

include 'includes\common.php';
$item_id=$_GET['id'];
$user_id=$_SESSION['id'];
$d_q="delete from users_items where user_id='$user_id' and item_id='$item_id'";
$d_q_r=mysqli_query($con,$d_q);
 
header('location:cart.php');
?>
