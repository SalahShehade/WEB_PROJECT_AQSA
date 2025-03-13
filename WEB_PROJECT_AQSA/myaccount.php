<!DOCTYPE html>
<html>
<head>

  <title>My Account</title>
  <link rel="stylesheet" href="myacc.css">
  <style>
   
  </style>
</head>
<body>
  <div class="container">
    <h1>حسابي</h1>
    
    <div class="profile">
      <img class="profile-img" src="profile.jpg" alt="Profile Picture">
      <div class="profile-info">
        <div class="profile-name"><?php echo $_SESSION['Username'] ;?></div>
        <div class="profile-email"><?php echo $_SESSION['Email'] ?></div>
      </div>
    </div>
    
    <div class="menu">
      <!-- <div class="menu-item">Profile</div> -->
      <a class="menu-item" href = "cart.php">الطلبات</a>
      <a class="menu-item" href = "logout.php">تسجيل الخروج</a>
    </div>
    
    <div class="content">
      <h2>الحساب</h2>
      <p>!سوف تتم اضافة بند تعديل البيانات قريبا</p>
      
      <!-- Add more content for other menu items as needed -->
      
    </div>
  </div>
</body>
</html>
