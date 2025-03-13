<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Elec.css" >
</head>
<body>
    
</body>
</html>

<?php

function categcomponent($categoryname,$categoryimg,$categoryid){
  

$element="  <div class=\"pro\"><!--container for one product-->
<img src=\"$categoryimg \" alt=\"\"><!--img for first product-->
      <div class=\"des\"><!--description like adidas-->
          <h5>$categoryname</h5> <!--product name-->
          <span>adidas</span>
        
      </div>
       <form method='post'>
      <input type='hidden' name='category_id' value='$categoryid'>
      <input class=\"viewbtncls\"  type='submit' name='viewbtn' value='عرض'>
      
      </form>
  </div>
  ";

  echo $element;
  
  

}

