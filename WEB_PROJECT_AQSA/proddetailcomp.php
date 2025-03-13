

<?php

function componentproddet($productname,$productprice,$productimg,$productdesc,$categname){

   
   //$proname = $_POST['product_name'];

    $element="
    
    <section id=\"prodetails1\" class=\"section-p1\">
    <div class=\"pro1-image\">
<img src=$productimg width=\"100%\" id=\"MainImg\" alt=\"\">

</div>

<div class=\"single-prodetails1\">
<h6>الصفحة الرئيسية / الصنف($categname)</h6>
<h4>$productname</h4>
<h2>$$productprice</h2>
<form method =\"post\">
<input name=\"quantity\" id=\"quantity\" min=1 type= \"number\" value=\"1\">
   <button type=\"submit\" class=\"normal\" name = \"addcrtbtn\">اضافة الى السلة</button>
   <input class = \"normal\" type=\"hidden\" name = \"item_name\" value = '$productname'>
   <input class = \"normal\" type=\"hidden\" name = \"item_price\" value = '$productprice'>
   <input class = \"normal\" type=\"hidden\" name = \"item_img\" value = '$productimg'>
   </form>
   <h4>تفاصيل المنتج</h4>
   <span>$productdesc</span>

</div>
</section>
";

echo $element;

}
