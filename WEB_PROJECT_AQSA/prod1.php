<?php
require_once('CreateDbcateg.php');
require_once('categorycomp.php');
require_once('CreateDb.php');
require_once('productscomp.php');
require_once('moderncomp.php');

require_once('CreateDbcatlist.php');

require_once('proddetailcomp.php');
require_once('productscomp.php');

$databasecateg=new CreateDBcateg(dbname:"alaqsa",tablename:"category");

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
                 <li><a href="Elec.php">الصفحة الرئيسية</a></li>
                 <li><a class="active" href="category.php">الأصناف</a></li>
                 <li><a href="login.php">حسابي</a></li>
                 <li><a href="contactUs.php">تواصل معنا</a></li>
                 <li><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
                </ul>
               </div>
    
               <div class="searchbar">
              
                    <button class="search-button">
                        بحث 
                       </button>
                    <input class="search-bar-input" placeholder="ابحث هنا" type="text" value="">
                     
                   
                     
                </div>
                <a href="Elec.php"><label class="logo">الاقصى للكهرباء والثريات</label></a>
          
            
            
       <i class="fas fa-bars menu-ham"></i>
        </nav>
    
    </section>
    
    

    <section id="prodetails1" class="section-p1">

  
      
    </section>

    <section id="product1" class="section-p1"><!-- id for second feature-->
        <h2>Similar Products</h2>
        <p>Summer Collection New Modern Design</p>
        <div class="pro-container"> <!--container for all product-->
            <div class="pro"><!--container for one product-->
                <img src="img/bulb.jpeg" alt=""><!--img for first product-->
                <div class="des"><!--description like adidas-->
                   <span>adidas</span>
                    <h5>Cartoon Astronout T-shirts</h5> <!--product name-->
                    <div class="star"><!--review starts-->
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fa-regular fa-star"></i>
                    </div>
                    <h4>$69</h4><!--price-->
                </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a><!--shopping icon for product-->
            </div>


            <div class="pro"><!--container for one product-->
                <img src="img/bulb.jpeg" alt=""><!--img for first product-->
                <div class="des"><!--description like adidas-->
                   <span>adidas</span>
                    <h5>Cartoon White Flowers T-shirts</h5> <!--product name-->
                    <div class="star"><!--review starts-->
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                    </div>
                    <h4>$54</h4><!--price-->
                </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a><!--shopping icon for product-->
            </div>


            <div class="pro"><!--container for one product-->
                <img src="img/bulb.jpeg" alt=""><!--img for first product-->
                <div class="des"><!--description like adidas-->
                   <span>adidas</span>
                    <h5>Cartoon Colorful Flowers T-shirts</h5> <!--product name-->
                    <div class="star"><!--review starts-->
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fa-regular fa-star"></i>
                     <i class="fa-regular fa-star"></i>
                    </div>
                    <h4>$34</h4><!--price-->
                </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a><!--shopping icon for product-->
            </div>


            <div class="pro"><!--container for one product-->
                <img src="img/bulb.jpeg" alt=""><!--img for first product-->
                <div class="des"><!--description like adidas-->
                   <span>adidas</span>
                    <h5>Cartoon Pink Flowers T-shirts</h5> <!--product name-->
                    <div class="star"><!--review starts-->
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fa-regular fa-star"></i>
                    </div>
                    <h4>$88</h4><!--price-->
                </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a><!--shopping icon for product-->
            </div>


          
        </div>
        </section>    

      
    <section id="newsletter" class="section-p1 section-m1"><!--section p1 for spacing and padding, section m1 for margin-->
        <div class="newstext"><!-- for two texts-->
         <h4>Sign Up For Newsletters</h4>
         <p>Get E-mail updates about our latest shop and <span>special offers.</span></p>
        </div>

        <div class="form"><!-- for email and button-->
       <input type="text" placeholder="Your email address">
       <button class="normal"> Sign Up</button>
        </div>
    </section>



        <footer class="section-p1"><!-- last section which is footer--><!-- we have 4 different columns-->
     
            <div class="col" style="direction: rtl;"><!-- first column-->
            <h4 class="contactarb">تواصل معنا</h4>
            <p class="contactarb"><strong >العنوان: </strong> حوارة -الشارع الرئيسي</p>
            <p class="contactarb"><strong >رقم الهاتف :</strong> 703 931 597 (+970)</p>
            <p class="contactarb"><strong >ساعات العمل:</strong> 8:30 AM - 5:00 PM, Sat - Thu</p>
    
            <div class="follow"><!-- for follow us-->
              <h4>Follow us</h4>
              <div class="icon"><!--for icons-->
              <a href="https://www.facebook.com/%D9%85%D8%AD%D9%84%D8%A7%D8%AA-%D8%A7%D9%84%D8%A7%D9%82%D8%B5%D9%89-%D9%84%D9%84%D8%A7%D8%AF%D9%88%D8%A7%D8%AA-%D8%A7%D9%84%D9%83%D9%87%D8%B1%D8%A8%D8%A7%D8%A6%D9%8A%D8%A9-1650377291867615" target="_blank">
                <img src="img/fbe.png"></a>
             
              </div>
            </div>
            </div>
             
            <div class="col col2"><!--for second column-->
            <h4>معلومات</h4>
            <a href="#"><strong>معلومات عنا</strong></a><!-- the texts in col 2 are actually links-->
            <a href="#"><strong>معلومات التوصيل</strong></a>
            <a href="#"><strong>كيفية عمل طلبية</strong></a>
            </div>
    
            <div class="col"><!--for third column-->
                <h4>حسابي</h4>
                <a href="login.php"><strong>تسجيل الدخول</strong></a><!-- the texts in col 3 are actually links-->
                <a href="cart.php"><strong>السلة</strong></a>
                <a href="#"><strong>قائمة المحفوظات</strong></a>
                <a href="#"><strong>المساعدة</strong></a>
                </div>
    
                <div class="col install"><!-- install our app-->
             
    
                <p style="direction: rtl;"><strong> طرق الدفع : </strong></p>
                <img src="img/pay/pay.png" alt="">
    
                </div>
    
    
                <div class="copyright"><!--for copyright section-->
                    <p>&copy; 2023, Al-Aqsa Home</p>
                </div>
    
        </footer>
    
    
         <script>
            var MainImg=document.getElementById("MainImg");
            var smallimg=document.getElementsByClassName("small-img");
   
      smallimg[0].onclick= function(){

       MainImg.src= smallimg[0].src;

             }

      smallimg[1].onclick= function(){

         MainImg.src= smallimg[1].src;

         }

      smallimg[2].onclick= function(){

         MainImg.src= smallimg[2].src;

      }

      smallimg[3].onclick= function(){

         MainImg.src= smallimg[3].src;

      }
         </script>
    
    
</body>
</html>