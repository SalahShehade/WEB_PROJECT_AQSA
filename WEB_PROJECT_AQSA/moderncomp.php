<?php

function component($productname,$productprice,$productimg){
  

$element="  <div class=\"pro\" onclick=\"window.location.href='prod1.php'\"><!--container for one product-->
<img src=\"$productimg \" alt=\"\"><!--img for first product-->
      <div class=\"des\"><!--description like adidas-->
         <span>adidas</span>
          <h5>$productname</h5> <!--product name-->
          <div class=\"star\"><!--review starts-->
           <i class=\"fas fa-star\"></i>
           <i class=\fas fa-star\"></i>
           <i class=\"fas fa-star\"></i>
           <i class=\"fas fa-star\"></i>
           <i class=\"fa-regular fa-star\"></i>
          </div>
          <h4>$$productprice</h4><!--price-->
      </div>
          <a href=\"#\"><i class=\"fa-solid fa-cart-shopping cart\"></i></a><!--shopping icon for product-->
      
  </div>
  ";

  echo $element;

}

