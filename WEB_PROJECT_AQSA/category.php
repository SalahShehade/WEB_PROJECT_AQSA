
<?php
require_once('CreateDbcateg.php');
require_once('categorycomp.php');
require_once('CreateDb.php');
require_once('productscomp.php');
require_once('moderncomp.php');
require_once('proddetailcomp.php');
require_once('CreateDbprodlist.php');
require_once('CreateDbcatlist.php');
require_once('similarcomp.php');
require_once('CreateDbfeature.php');
require_once('CreateDbaddcrt.php');
//$databasefeature=new CreateDbfeature(dbname:"alaqsa",tablename:"products");

require_once('CreateDbsearch.php');
require_once('createDbsearchspec.php');

$databasesearch=new CreateDbsearch(dbname:"alaqsa",tablename:"products");
$databasesearchspec=new CreateDbsearchspec(dbname:"alaqsa",tablename:"products");


$flag=0;
$flag2=0;

$databasecateg=new CreateDBcateg(dbname:"alaqsa",tablename:"category");
$database=new CreateDB(dbname:"alaqsa",tablename:"modProducttb");
$databaseprodlist=new  CreateDbprodlist(dbname:"alaqsa",tablename:"products");

$databasecatlist=new CreateDbcatlist(dbname:"alaqsa",tablename:"products");
$databasecrt=new CreateDbaddcrt(dbname:"alaqsa",tablename:"cart");


      

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>

<link rel="stylesheet" 
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
      
<link rel="stylesheet" href="path/to/fontawesome.min.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">




<link rel="stylesheet" href="/Elec.css">

</head>
<body>





    <section id="header">

    <nav class="navbar">
        <a href="Elec.php">  <img id="NavImg" src="img/Capture.png" alt=""> </a>

        <div class="nav-links">
            <ul id="navbar">
            <li><label for="">   <?php
            session_start();
         if(isset($_SESSION['user_ID'])){
          echo $_SESSION['Username'];
          $element = "<li><a href=\"logout.php\">تسجيل الخروج</a></li>";
          echo $element;
         } ?>
       </label></li><?php if(!isset($_SESSION['user_ID'])){
          $element = "<li><a href=\"login.php\">تسجيل الدخول</a></li>";
          echo $element;
        }  ?>
             <li><a  href="Elec.php">الصفحة الرئيسية</a></li>
             <li><a class="active" href="category.php">الأصناف</a></li>
             <li><a href="login.php">حسابي</a></li>
             <li><a href="contactUs.php">تواصل معنا</a></li>
             <li id="lg-bag"><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
             <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
            </ul>
           </div>
        
           <div class="searchbar">
          
           <form method="post" action="">
                <button name="submitbtn" type="submit" class="search-button">
                    بحث 
                   </button>
                <input class="search-bar-input" placeholder="ابحث هنا" type="text" value="" name="search" id="search">
                 
                </form>
               
                 
            </div>
            <a href="Elec.php"><label class="logo">الاقصى للكهرباء والثريات</label></a>
             
            <div id="mobile"> 
            
            <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
            </div>
        
        
   <i class="fas fa-bars menu-ham"></i>
    </nav>

</section>


<section id="page-header"><!--hero is like body--><!--body section(home page)-->
 
    <h2><span></span></h2>

    <p><span></span></p>
   
  
 </section>




        <section id="product1" class="section-p1"><!-- id for second feature-->
          
            <div class="pro-container"> <!--container for all product-->

            <?php 

if(isset($_POST['submitbtn'])){
       
  $flag=1;
  $flag2=1;
 // $search=$_POST['search'];
  //$url="category.php";
  
  $result=$databasesearch->getData();
  
  if($result==""){

   
    echo" <h6  class='text-danger text-center mt-3' >No data Found</h6> ";

    
  }else{
    while($row=mysqli_fetch_assoc($result)){//to add each element from database row by row


   
 
    componentprod($row['pro_name'],$row['pro_price'],$row['pro_thumb'],$row['pro_desc'],$row['pro_id'],$row['cat_id']);//takes row value of the coloumns in table
      
     
     
   

    }

  }

}
    



if(isset($_POST['addcrtbtn'])){
  $flag=1;
  $flag2=1;
 // $result=
  $databasecrt->getData();
  header("location:cart.php");
    // while($row=mysqli_fetch_assoc($result)){//to add each element from database row by row
  
    //  componentprod($row['pro_name'],$row['pro_price'],$row['pro_thumb'],$row['pro_desc'],$row['pro_id'],$row['cat_id']);//takes row value of the coloumns in table
    // }

  

}


     

if(isset($_POST['viewprodbtn'])){
      $flag=1;
      $flag2=1;
    
      $result=$databaseprodlist->getData();
    
      while($row=mysqli_fetch_assoc($result)){//to add each element from database row by row
      
      componentproddet($row['pro_name'],$row['pro_price'],$row['pro_thumb'],$row['pro_desc'],$row['cat_id']);
        
      }
    

   $sec="<section id=\"product1\" class=\"section-p1\"><!-- id for second feature-->
   <h2>منتجات متشابهة</h2>
  
   <div class=\"pro-container\"> <!--container for all product-->
   
   ";
   
    echo $sec;
    $four=0;
      $result=$databasecatlist->getData();

      while($row=mysqli_fetch_assoc($result)){//to add each element from database row by row

      if($_POST['product_id']==$row['pro_id']){
       
        continue;
      }
      componentsimilar($row['pro_name'],$row['pro_price'],$row['pro_thumb'],$row['pro_desc'],$row['pro_id'],$row['cat_id']);//takes row value of the coloumns in table
      
      if($four>=3){
        break;
      }
     $four++;
      }
   $sec2="
   </div>
   </section>";
  
   echo $sec2;

}


if($flag2==0){
  if(isset($_GET['search'])){
  
    $flag=1;
    
    $search=$_GET['search'];
  
   
     echo "<script> document.getElementById('search').value = '$search';
     </script>";
  
  
    $result=$databasesearchspec->getData();
          
          if($result==""){
  
           
            echo" <h6  class='text-danger text-center mt-3' >No data Found</h6> ";
  
            
          }else{
            while($row=mysqli_fetch_assoc($result)){//to add each element from database row by row
  
  
           
         
            componentprod($row['pro_name'],$row['pro_price'],$row['pro_thumb'],$row['pro_desc'],$row['pro_id'],$row['cat_id']);//takes row value of the coloumns in table
              
             
             
           
  
            }
     
          }
  
    
    
  }
  }

  if(isset($_GET['viewbtn'])){


    $flag=1;
    $flag2=1;
  
    $result=$databaseprodlist->getData();
  
    while($row=mysqli_fetch_assoc($result)){//to add each element from database row by row
    
    componentproddet($row['pro_name'],$row['pro_price'],$row['pro_thumb'],$row['pro_desc'],$row['cat_id']);
      
    }
  

 $sec="<section id=\"product1\" class=\"section-p1\"><!-- id for second feature-->
 <h2>Similar Products</h2>
 <p>Summer Collection New Modern Design</p>
 <div class=\"pro-container\"> <!--container for all product-->
 
 ";
 
  echo $sec;
  $four=0;
    $result=$databasecatlist->getData();

    while($row=mysqli_fetch_assoc($result)){//to add each element from database row by row

    if($_POST['product_id']==$row['pro_id']){
     
      continue;
    }
    componentsimilar($row['pro_name'],$row['pro_price'],$row['pro_thumb'],$row['pro_desc'],$row['pro_id'],$row['cat_id']);//takes row value of the coloumns in table
    
    if($four>=3){
      break;
    }
   $four++;
    }
 $sec2="
 </div>
 </section>";

 echo $sec2;

}


    
  


if(isset($_POST['viewbtn'])){
    $flag=1;
    $flag2=1;
    $result=$databasecatlist->getData();

       while($row=mysqli_fetch_assoc($result)){//to add each element from database row by row
    
       componentprod($row['pro_name'],$row['pro_price'],$row['pro_thumb'],$row['pro_desc'],$row['pro_id'],$row['cat_id']);//takes row value of the coloumns in table
       }

    

}

            if($flag==0){

            
           
           $result=$databasecateg->getData();
           while($row=mysqli_fetch_assoc($result)){//to add each element from database row by row
            categcomponent($row['cat_name'],$row['cat_img'],$row['cat_id']);//takes row value of the coloumns in table
             
            
           }
        }


       
         
             ?>
    

            </div>
            </section>    


            <!-- <section id="pagination" class="section-p1">

                <a href="#">1</a>
                <a href="#">2</a>
                <a href="#"><i class="fa-solid fa-right-long"></i></a>
            </section> -->
        



            <?php include('last.php'); ?>

            <script src="media.js"> </script>
        

  </body>
</html>