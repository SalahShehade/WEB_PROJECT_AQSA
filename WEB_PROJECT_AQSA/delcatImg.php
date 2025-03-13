<?php
//session_start();
include('config.php');
//if(!isset($_SESSION['email']) && empty($_SESSION['email']) ){
// header('location:login.php');
//}


if(isset($_GET['id']) & !empty($_GET['id'])){
    $id = $_GET['id'];


    $sql = "SELECT cat_img FROM category WHERE cat_id=$id";
    $res = mysqli_query($conn, $sql);
    $r = mysqli_fetch_assoc($res);
 

    if(!empty($r['cat_img'])){
        if(unlink($r['cat_img'])){
            $delsql = "UPDATE category SET cat_img='' WHERE cat_id=$id";
            if(mysqli_query($conn, $delsql)){
                header("location:editCategory.php?id={$id}");
            }
        }else{
            $delsql = "UPDATE Category SET cat_img='' WHERE cat_id=$id";
            if(mysqli_query($conn, $delsql)){
                header("location:editCategory.php?id={$id}");
            }
        }

}
}



// if(isset($_GET['id'])){
//    $product_id = $_GET['id'];

   


   

// //   $sql = "DELETE FROM products WHERE product_id='$product_id'";
// //   $result = mysqli_query($conn, $sql);
// //   header('location:products.php');


// }


