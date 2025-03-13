
<?php

require_once('CreateDb.php');
require_once('CreateDbnew.php');
require_once('moderncomp.php');
include "config.php";
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
require_once('CreateDbfeatlast.php');
require_once('CreateDbcateg.php');
require_once('CreateDbsearch.php');
require_once('CreateDBprodlist.php');


$databasesearch=new CreateDbsearch(dbname:"alaqsa",tablename:"products");

//create instance of CreateDB class

$database=new CreateDB(dbname:"alaqsa",tablename:"modProducttb");
$databasenew=new CreateDBnew(dbname:"alaqsa",tablename:"newProducttb");
$databasecatlist=new CreateDbcatlist(dbname:"alaqsa",tablename:"products");
$databasefeature=new CreateDbfeature(dbname:"alaqsa",tablename:"products");
$databasefeatlast=new CreateDbfeatlast(dbname:"alaqsa",tablename:"products");
$databasecateg=new CreateDBcateg(dbname:"alaqsa",tablename:"category");
$databaseprodlist=new CreateDbcatlist(dbname:"alaqsa",tablename:"products");

$flag=0;

$con=mysqli_connect('localhost','root','','alaqsa');


if(isset($_POST['submitbtn'])){
      if(isset($_POST['search'])) {

        $search=$_POST['search'];
        $url="category.php?search=".$search;
        header("Location:$url");
       
        exit();
      }
  

  

}

if(isset($_POST['viewprodbtn'])){
   
 

 
    $product_id = $_POST['product_id'];

  //  echo "<script> alert($product_id);</script>";
   $sql = "SELECT * FROM products  WHERE pro_id='$product_id'";
   $result = mysqli_query($conn, $sql);
  // header('location:Products+.php');

$row = mysqli_fetch_assoc($result);



    $search=$row['pro_name'];
    $url="category.php?search=".$search;
   header("Location:$url");
   
    exit();
  

    
  //header("Location:category.php");
 
  //exit();




}




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




<link rel="stylesheet" href="Elec.css">

</head>
<body>





    <section id="header">

    <nav class="navbar">
        <a href="Elec.php">  <img id="NavImg" src="img/Capture.png" alt=""> </a>
      
        <div class="nav-links">
            <ul id="navbar">
            <li><label for="">   <?php
         if(isset($_SESSION['user_ID'])){
          echo $_SESSION['Username'];
          $element = "<li><a href=\"logout.php\">تسجيل الخروج</a></li>";
          echo $element;
         } ?>
       </label></li>
        <?php if(!isset($_SESSION['user_ID'])){
          $element = "<li><a href=\"login.php\">تسجيل الدخول</a></li>";
          echo $element;
        }  ?>
             <li><a class="active" href="Elec.php">الصفحة الرئيسية</a></li>
             <li><a href="category.php">الأصناف</a></li>
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

<section id="picslide">

    <div id="carouselExampleCaptions" data-bs-ride="carousel" class="carousel slide" >
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/slider/1.jpg" class="test" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h3>ثريات</h3>
              <p>تشكيلة متنوعة من الثريات بأحجام و تصاميم مختلفه</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/slider/2.jpg" class="test" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h3>أدوات منزلية</h3>
              <p>اجهزة كهربائية لكافة الاستخدامات المنزلية</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/slider/3.jpg" class="test" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h3>إطارات</h3>
              <p>مفاتيح وأباريز وكافة مستلزمات الإطارات بأنواع مختلفة</p>
            </div>
          </div>
       
        <div class="carousel-item">
            <img src="img/slider/4.jpg" class="test" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h3>تجهيز بيوت</h3>
              <p>متوفر طاقم عمل لتجهيز كامل للشقق</p>
            </div>
          </div>
        </div>


        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

</section>

    <section id="feature" class="section-p1"><!--featured section-->
       
    
        <div class="fe-box"> <!--fast feature-->
            <img src="img/fast-delivery.png" alt="">
            <h6>توصيل الى جميع المدن</h6>
           </div>
    
           <div class="fe-box"> <!--fast feature-->
            <img src="img/best-price.png" alt="">
            <h6>أفضل الأسعار</h6>
           </div>
    
           <div class="fe-box"> <!--fast feature-->
            <img src="img/pay.png" alt="">
            <h6>الدفع عند الاستلام</h6>
           </div>
    
           <div class="fe-box"> <!--fast feature-->
            <img src="img/medal.png" alt="">
            <h6>جودة مضمونة</h6>
           </div>
    
        
        </section>

        <section id="floatingimg-while-scrolling">
        <div class="floatingimg">
           
        </div>

    </section>
       

        <section id="product1" class="section-p1"><!-- id for second feature-->

            <h2>منتجات مميزة  <?php 
         
        ?></h2>
            <p></p>
            <div class="pro-container"> <!--container for all product-->
           
            
            <?php 


           
         
            // if(isset($_POST['submitbtn'])){
             
            //   header("Location: category.php");
          //   $flag=1;
          
          //   $result=$databasesearch->getData();
          
          //     while($row=mysqli_fetch_assoc($result)){//to add each element from database row by row
               
               
           
          //     componentprod($row['pro_name'],$row['pro_price'],$row['pro_thumb'],$row['pro_desc'],$row['pro_id'],$row['cat_id']);//takes row value of the coloumns in table
            
             
    
          //     }
       
    
    
       //  }
        
            //$flag=1;
        
         if($flag==0){

            $result=$databasefeature->getData();
             $feat=0;
               while($row=mysqli_fetch_assoc($result)){//to add each element from database row by row
                
              
            
               componentprod($row['pro_name'],$row['pro_price'],$row['pro_thumb'],$row['pro_desc'],$row['pro_id'],$row['cat_id']);//takes row value of the coloumns in table
               if($feat>=9){
                break;
              }
              $feat++;
               }

          
        //  if($flag==0){

            
           
        //   $result=$databasecateg->getData();
        //   while($row=mysqli_fetch_assoc($result)){//to add each element from database row by row
        //    categcomponent($row['cat_name'],$row['cat_img'],$row['cat_id']);//takes row value of the coloumns in table
            
           
        //   }
        // }
        
            
        
        
        
          //  $result=$database->getData();
          //  while($row=mysqli_fetch_assoc($result)){//to add each element from database row by row
          //   component($row['modproduct_name'],$row['modproduct_price'],$row['modproduct_image']);//takes row value of the coloumns in table
          //  }
           
             ?>
    
        </div>

         </section>    


         <section id="banner" class="section-m1" ><!-- banner with background img-->
            <h4>قسم الخصومات</h4>
            <h2>خصومات بنسبة 20% على جميع الثريات</h2>
            <button class="normal">استكشف المزيد</button>
           </section>
       


           <section id="product1" class="section-p1"><!-- id for second feature-->
            <h2>وصل حديثا</h2>
            <p></p>
            <div class="pro-container"> <!--container for all product-->
              
            <?php 

$result=$databasefeatlast->getData();
$feat2=0;
  while($row=mysqli_fetch_assoc($result)){//to add each element from database row by row
   
 

  componentprod($row['pro_name'],$row['pro_price'],$row['pro_thumb'],$row['pro_desc'],$row['pro_id'],$row['cat_id']);//takes row value of the coloumns in table
  if($feat2>=9){
   break;
 }
 $feat2++;
  }


     
 
          




     
           
             ?>
            </div>
            </section>    

            <!-- <section id="sm-banner" class="section-p1">
                <div class="banner-box">
           
                   <h4>crazy deals </h4>
                   <h2>buy 1 get 1 free</h2>
                   <span>the best classic dress on sale at cara</span>
                   <button class="white">Learn more</button>
                </div>
           
                <div class="banner-box banner-box2">
           
                   <h4>spring/summer </h4>
                   <h2>upcoming season</h2>
                   <span>the best classic dress on sale at cara</span>
                   <button class="white">Collection</button>
                </div>
           
               </section> -->


               
            
            <?php include('last.php'); ?>
            
            <?php } ?>

            <script src="media.js"> </script>

  </body>
</html>

