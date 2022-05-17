<?php
function check_if_added_to_cart($item_id)
{
    $con=mysqli_connect("localhost","root","","estore") or die(mysqli_error($con));
    $user_id=$_SESSION['id'];
    $s_q="select * FROM users_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart' ";
    $s_q_r=mysqli_query($con,$s_q);
    $t_n_r=mysqli_num_rows($s_q_r);
    if($t_n_r>=1){
        return 1;
    }
    else{
        return 0;
    }
}
?>