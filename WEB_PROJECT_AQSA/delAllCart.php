<?php
 include('config.php');
//  if(!isset($_SESSION['email']) && empty($_SESSION['email']) ){
//   header('location:login.php');
//  }
 

   
  //  echo  "<script> alert('$cartid');</script>";
    $sql = "DELETE FROM cart  ";


    
    $result = mysqli_query($conn, $sql);
  




?>