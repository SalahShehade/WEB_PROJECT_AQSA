



<?php

function totalcomponent($tot){
  

$element = "<div id=\"subtotal\">
            <h3>Cart Totals</h3>
            <table>
                
                <tr>
                    <td>Cart Subtotal</td>
                    <td>$tot</td>
                    
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>$tot</strong></td>
                </tr>
                
            </table>
            <button class=\"normal\">Proceed to checkout</button>
    
        </div>";

  echo $element;
  
  

}





