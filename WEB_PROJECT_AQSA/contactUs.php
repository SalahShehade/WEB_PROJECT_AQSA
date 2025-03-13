<?php 

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

        <nav  class="navbar">
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
            
             <li><a href="Elec.php">الصفحة الرئيسية</a></li>
             <li><a href="category.php">الأصناف</a></li>
             <li><a href="login.php">حسابي</a></li>
             <li><a  class="active" href="contactUs.php">تواصل معنا</a></li>
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
    
    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>ابق على اتصال</span>
            <h2> تواصل معنا عبر البريد الالكتروني او الهاتف</h2>
            <!-- <h3>Head office</h3> -->
            <div>
            <li>
                <i class="fa-regular fa-map"></i>
            <p>حوارة الشارع-الرئيسي</p>
            </li>

            <li>
                <i class="fa-regular fa-envelope"></i>
                <p>salah.shehade12@gmail.com</p>
                </li>
                <li>
                <i class="fa-regular fa-envelope"></i>
                <p>abdullahabdkhayat@gmail.com</p>
                </li>

                <li>
                    <i class="fa-solid fa-phone"></i>
                    <p> 09-2590839</p>
                    </li>
                    <li>
                    <i class="fa-solid fa-phone"></i>
                    <p> 059-927-3873</p>
                    </li>
                    <li>
                    <i class="fa-solid fa-phone"></i>
                    <p> 052-234-0886</p>
                    </li>

                    <li>
                        <i class="fa-regular fa-clock"></i>
                        <p>السبت حتى الخميس 8:00 صباحا حتى 6:00 مساءا</p>
                        </li>
        </div>
        </div>

        <div class="map">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13511.748104520448!2d35.250200788255135!3d32.15199800011704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151cdf0fdb50bf4f%3A0x2cb9da24b4dc8b01!2z2KfZhNij2YLYtdmJINmE2YTYo9iv2YjYp9iqINin2YTZg9mH2LHYqNin2KbZitipINmI2KfZhNir2LHZitin2Ko!5e0!3m2!1sen!2s!4v1680892722430!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>


        </div>
    </section>

    <section id="form-details">
        <form action="">
            <span>اترك لنا رسالة</span>
            <h2>سعيدون باستقبال افتراحاتكم</h2>
            <input type="text" placeholder="الاسم">
            <input type="text" placeholder="البريد الالكتروني">
            <input type="text" placeholder="الموضوع">
            <textarea name="" id="" cols="30" rows="10" placeholder="اكتب رسالتك هنا"></textarea>
            <button class="normal">تأكيد</button>
        </form>

        <div class="people">
            <div>
                <img src="img/people/1.png" alt="">
                <p><span>Abdallah Khayat</span>Developer<br> Phone: +0597754602<br> salah.shehade12@gmail.com</p>
            </div>

            <div>
                <img src="img/people/2.png" alt="">
                <p><span>Salah Shehadah</span>developer<br> Phone: +0597754602<br> abdullahabdkhayat@gmail.com</p>
            </div>

            <div>
                <img src="img/people/3.png" alt="">
                <p><span>Mohammad</span>Manager<br> Phone: +0599273873<br> Email: conact@example.com</p>
            </div>
        </div>
    </section>

    
    <?php include('last.php'); ?>
    
    
    </section>
    
    <script src="media.js"> </script>
</body>
</html>