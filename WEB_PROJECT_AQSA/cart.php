
<?php






require_once('cartcomp.php');
require_once('CreateDbcartlist.php');
require_once('CreateDbtotal.php');
require_once('CreateDbtot.php');


$databasecartlist=new CreateDbcartlist(dbname:"alaqsa",tablename:"products");
$databasetotal=new CreateDbtotal(dbname:"alaqsa",tablename:"products");
$databasetot = new CreateDbtot(dbname:"alaqsa",tablename:"cart");

      $flah = 0;












if(isset($_POST['submitbtn'])){
    if(isset($_POST['search'])) {

      $search=$_POST['search'];
      $url="category.php?search=".$search;
      header("Location:$url");
      exit();
    }
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
             session_start();
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
             <li><a  href="Elec.php">الصفحة الرئيسية</a></li>
             <li><a href="category.php">الأصناف</a></li>
             <li><a href="login.php">حسابي</a></li>
             <li><a href="contactUs.php">تواصل معنا</a></li>
             <li id="lg-bag"><a  class="active" href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
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

    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>حذف</td>
                    <td>صورة</td>
                    <td>المنتج</td>
                    <td>السعر</td>
                    <td>الكمية</td>
                    <td>المجموع</td>
                </tr>
            </thead>
                 
<?php
// if(isset($_POST['quantitybtn'])){
//     echo "<script> alert('Registration Successful');</script>";
//     $flah = 1;
//        $result=$databasetotal->getData();
       
//        while($row=mysqli_fetch_assoc($result)){//to add each element from database row by row
       
//        cartcomponent($row['cart_name'],$row['cart_image'],$row['cart_price'],$row['cart_quantity']);
//        }
   
   
//    } 
   
   


    if($flah == 0){
      $result=$databasecartlist->getData();
      if($result==""){
        echo" <h6  class='text-danger text-center mt-3' >سلتك       فارغة</h6> ";
      }
      else{
      while($row=mysqli_fetch_assoc($result)){//to add each element from database row by row
      
      cartcomponent($row['cart_id'],$row['cart_name'],$row['cart_image'],$row['cart_price'],$row['cart_quantity']);
        
      }
    }
    }

//    $sec2="
//    </div>
//    </section>";
  
//    echo $sec2;


?>

















           
    
        </table>
    
    </section>
    
    <section id="cart-add" class="section-p1">
        <div id="coupon">
            <h3>اضافة كوبون</h3>
            <div>
                <input type="text" placeholder="ادخل الرمز هنا">
                <button class="normal">تأكيد</button>
            </div>
        </div>
    
        <div id="subtotal">
            <h4>كشف الحساب</h4>
            <table>
                
                <tr>
                    <td>مجموع السلة</td>
                    <td>$<?php $databasetot->getData(); ?></td>
                    
                </tr>
                <tr>
                    <td>التوصيل</td>
                    <td>مجاني</td>
                </tr>
                <tr>
                    <td><strong>المجموع</strong></td>
                    <td><strong>$<?php $databasetot->getData(); ?></strong></td>
                </tr>
                
            </table>
           <a href="payment.php"> <button class="normal">شراء</button></a>
    
        </div>
    </section>




    
    </section>
    




    <?php include('last.php'); ?>
    
    
    </section>
    
    <script src="media.js"> </script>
</body>
</html>