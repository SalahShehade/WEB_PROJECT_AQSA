<?php

function componentsimilar($productname,$productprice,$productimg,$productdesc,$productid,$categoryid){
  

$element=" 



       
            <div class=\"pro\"><!--container for one product-->
                <img src=\"$productimg\" alt=\"\"><!--img for first product-->
                <div class=\"des\"><!--description like adidas-->
                   <span>adidas</span>
                    <h5>$productname</h5> <!--product name-->
                
                    <h4>$$productprice</h4><!--price-->
                </div>
                    <a href=\"#\"><i class=\"fa-solid fa-cart-shopping cart\"></i></a><!--shopping icon for product-->
                    <form method='post'>
                    <input type='hidden' name='product_id' value=$productid>
                    <input type='hidden' name='category_id' value=$categoryid>
                    <input class=\"viewbtncls\"  type='submit' name='viewprodbtn' value='عرض'>
                    
                    </form>
           
          </div>
   


  ";


  echo $element;

}