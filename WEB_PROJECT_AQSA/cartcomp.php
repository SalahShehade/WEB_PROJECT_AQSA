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

function cartcomponent($cartid,$cartname,$cartimg,$cartprice,$quantity){
  
$subtotal = $cartprice * $quantity;
$element="  <tbody>
<tr>
<td><a href=\"delcart.php?id= $cartid \"> <i class=\"far fa-times-circle\"></i> </a></td>
    <td><img src=\"$cartimg\" alt=\"\"></td>
    <td>$cartname</td>
    <td>$cartprice</td>
 
    <td> $quantity</td>
 
    <td> $subtotal</td>
</tr>
</tbody>
  ";

  echo $element;
  
  

}

