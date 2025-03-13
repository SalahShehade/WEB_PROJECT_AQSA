<?php
 include('config.php');
//  if(!isset($_SESSION['email']) && empty($_SESSION['email']) ){
//   header('location:login.php');
//  }
 

if(isset($_GET['id'])){




    $cartid = $_GET['id'];
  //  echo  "<script> alert('$cartid');</script>";
    $sql = "DELETE FROM cart WHERE cart_id= '$cartid' ";


    
    $result = mysqli_query($conn, $sql);
   header('location:cart.php');


}


?>