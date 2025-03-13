
<?php 




require 'config.php';






if(isset($_POST["submit"])){
    $username=$_POST["username"];
    $email= $_POST["email"];
    $password=$_POST["password"];
    $duplicate= mysqli_query($conn,"SELECT * FROM USERS WHERE Username='$username' OR Email='$email'");
    if(mysqli_num_rows($duplicate) >0){
        echo
        "<script> alert('Username or Email has Already Taken');</script>";
    }
    else{
       $query="INSERT INTO users VALUES('','$username','$email','$password') ";
       mysqli_query($conn,$query);

       echo
       "<script> alert('Registration Successful');</script>";

    }
 

}


if(isset($_POST['submitbtn'])){
    if(isset($_POST['search'])) {

      $search=$_POST['search'];
      $url="category.php?search=".$search;
      
      header("Location:$url");
    
      exit();
    }




}







?>


<?php

require 'configlogin.php';

if(isset($_POST["submitlogin"])){
    $usernameemail=$_POST["usernameemail"];
    $loginpassword=$_POST["loginpassword"];
    $result=mysqli_query($conn,"SELECT * FROM USERS WHERE Username='$usernameemail' OR Email='$usernameemail'");
    $admins = mysqli_query($conn,"SELECT * FROM admin_data WHERE username ='$usernameemail'");
    $row=mysqli_fetch_assoc($result);
    $row2=mysqli_fetch_assoc($admins);
    if(mysqli_num_rows($result) > 0  ){
             if($loginpassword==$row["password"]){
                $_SESSION['id']= session_id();
                $_SESSION["login"]=true;
                $_SESSION["user_ID"]=$row["user_ID"];
                $_SESSION["Username"] = $row["Username"];
                $_SESSION["Email"] = $row["Email"];
                header("Location: Elec.php");

             }
            
             else{
            
            echo "<script> alert('Wrong Password');</script>";

             }
            }
         elseif(mysqli_num_rows($admins) > 0){
            if($loginpassword == $row2["password"]){
                $_SESSION["login"]=true;
                $_SESSION["id"]=$row2["id"];
                header("Location: Admin.php");
             }

             else{
                
                echo "<script> alert('Wrong Password');</script>";
    
                 }
         }




    else{
        echo  "<script> alert('User Not Registered');</script>";
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
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
          
    <link rel="stylesheet" href="path/to/fontawesome.min.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    
    
    
    
    <link rel="stylesheet" href="Elec.css">
    
    <?php
    if(!isset($_SESSION['user_ID'])){
        $nelem = " <link rel=\"stylesheet\" href=\"login.css\">";
        echo $nelem;
    }
    
    
    ?>
   
   
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
        // $element = "<li><a href=\"logout.php\">تسجيل الخروج</a></li>";
        //  echo $element;
         } ?>
       </label></li>
             <li><a  href="Elec.php">الصفحة الرئيسية</a></li>
             <li><a href="category.php">الأصناف</a></li>
             <li><a  class="active" href="login.php">حسابي</a></li>
             <li><a href="contactUs.php">تواصل معنا</a></li>
             <li id="lg-bag"><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
             <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
            </ul>
           </div>
        

           
           <div class="searchbarE">
           <form method="post" action="">
           
                <button name="submitbtn" type="submit" class="search-buttonE">
                    بحث</button>
                   
                
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
    

           <?php  if(!isset($_SESSION['user_ID'])){
            
  
       $element = "<section>
            <div class=\"container\">
                <div class=\"forms-container\">
                    <div class=\"signin-signup\">
                        <form method=\"post\" action=\"\" class=\"sign-in-form\">
                            <h2 class=\"title\">تسجيل الدخول</h2>
                            <div class=\"input-field\">
                                <i class=\"fas fa-user\"></i>
                                <input type=\"text\" name=\"usernameemail\" id=\"usernameemail\" required value=\"\" placeholder=\"اسم المستخدم او البريد الالكتروني\">
                            </div>
        
                            <div class=\"input-field\">
                                <i class=\"fas fa-lock\"></i>
                                <input type=\"password\" name=\"loginpassword\" id=\"loginpassword\" placeholder=\"كلمة السر\" required value=\"\">
                            </div>
        
                           
                            <input  type=\"submit\" name=\"submitlogin\" value=\"Login\" class=\"btn solid\">
                          
                             
                            <p class=\"social-text\">قم بزيارة منصاتنا عبر مواقع التواصل الاجتماعي</p>
                            <div class=\"social-media\">
                                <a href=\"https://www.facebook.com/%D9%85%D8%AD%D9%84%D8%A7%D8%AA-%D8%A7%D9%84%D8%A7%D9%82%D8%B5%D9%89-%D9%84%D9%84%D8%A7%D8%AF%D9%88%D8%A7%D8%AA-%D8%A7%D9%84%D9%83%D9%87%D8%B1%D8%A8%D8%A7%D8%A6%D9%8A%D8%A9-1650377291867615\" target=\"_blank\" class=\"social-icon1\">
                                    <i class=\"fab fa-facebook-f\"></i>
                                </a>
                                <a href=\"#\" class=\"social-icon2\">
                                    <i class=\"fab fa-twitter\"></i>
                                </a>
                                <a href=\"#\" class=\"social-icon3\">
                                    <i class=\"fab fa-google\"></i>
                                </a>
                                <a href=\"#\" class=\"social-icon4\">
                                    <i class=\"fab fa-linkedin-in\"></i>
                                </a>
                            </div>
                        </form>
        
        
                        <form method=\"post\" action=\"\" autocomplete=\"off\" class=\"sign-up-form\">
                            <h2 class=\"title\">انشاء حساب</h2>
                            <div class=\"input-field\">
                                <i class=\"fas fa-user\"></i>
                                <input type=\"text\" placeholder=\"اسم المستخدم\" id=\"username\" name=\"username\">
                            </div>
        
                            <div class=\"input-field\">
                                <i class=\"fas fa-envelope\"></i>
                                <input id=\"email\" type=\"email\" name=\"email\" required value=\"\" placeholder=\"البريد الالكتروني\">
                            </div>
        
                            <div class=\"input-field\">
                                <i class=\"fas fa-lock\"></i>
                                <input id=\"password\" name=\"password\" type=\"password\" placeholder=\"كلمة السر\">
                            </div>
        
                           
                            <input  type=\"submit\" name=\"submit\" value=\"Sign up\" class=\"btn solid\">
                          
                             
                            <p class=\"social-text\">قم بزيارة منصاتنا عبر مواقع التواصل الاجتماعي</p>
                            <div class=\"social-media\">
                                <a href=\"https://www.facebook.com/%D9%85%D8%AD%D9%84%D8%A7%D8%AA-%D8%A7%D9%84%D8%A7%D9%82%D8%B5%D9%89-%D9%84%D9%84%D8%A7%D8%AF%D9%88%D8%A7%D8%AA-%D8%A7%D9%84%D9%83%D9%87%D8%B1%D8%A8%D8%A7%D8%A6%D9%8A%D8%A9-1650377291867615\" target=\"_blank\" class=\"social-icon1\">
                                    <i class=\"fab fa-facebook-f\"></i>
                                </a>
                                <a href=\"#\" class=\"social-icon2\">
                                    <i class=\"fab fa-twitter\"></i>
                                </a>
                                <a href=\"#\" class=\"social-icon3\">
                                    <i class=\"fab fa-google\"></i>
                                </a>
                                <a href=\"#\" class=\"social-icon4\">
                                    <i class=\"fab fa-linkedin-in\"></i>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"panels-container\">
        
                    <div class=\"panel left-panel\">
                        <div class=\"content\">
                            <h3>جديد هنا؟</h3>
                            <p>
                             ! أهلا بك في موقعنا الالكتروني
                            </p>
                            <p>
                                فم بالانضمام الى موقعنا للحصول على اخر التحديثات و الطلب مع خدمة التوصيل
                            </p>
                            <button class=\"btn transparent\" id=\"sign-up-btn\">انشاء حساب</button>
                        </div>
        
                        <img src=\"img2/compStore.svg\" class=\"image\" alt=\"\">
                    </div>
        
        
                    <div class=\"panel right-panel\">
                        <div class=\"content\">
                            <h3>تملك حساب بالفعل؟</h3>
                            
                            <p>
                             قم بتسجيل الدخول رجاءا للحصول على افضل تجربة
                            </p>
                            <button class=\"btn transparent\" id=\"sign-in-btn\">تسجيل الدخول</button>
                        </div>
        
                        <img src=\"img2/deliv.svg\" class=\"image\" alt=\"\">
                    </div>
                    
                    
                </div>
            </div>
        </section>
";
  echo $element;
       }
        else{
            include('myaccount.php');
        }
      
         ?>

    
    
        <?php include('last.php'); ?>
        
        
    

    
    
  


    <script src="/login.js"></script>
    <script src="media.js"> </script>
    
</body>
</html>