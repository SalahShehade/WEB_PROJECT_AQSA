<?php



class CreateDbaddcrt
{

public $servername;
public $username;
public $password;
public $dbname;
public $tablename;
public $con;






//class constructor


public function __construct(
    $dbname="alaqsa",
    $tablename="cart",
    $servername="localhost",
    $username="root",
    $password=""
)
{

$this->dbname=$dbname;
$this->$tablename=$tablename;
$this->$servername=$servername;
$this->$username=$username;
$this->$password=$password;



//create connection


$this->con=mysqli_connect($servername,$username,$password);


//check connection
if(!$this->con){
    die("Connection failed:".mysqli_connect_error());
}



//query

$sql="CREATE DATABASE IF NOT EXISTS $dbname";


//excute query

if(mysqli_query($this->con,$sql)){

    $this->con=mysqli_connect($servername,$username,$password,$dbname);

       //sql to creare new table

       $sql="CREATE TABLE IF NOT EXISTS $tablename
       (cart_id INT(11) AUTO_INCREMENT PRIMARY KEY,
       cart_name VARCHAR(100),
       cart_price INT(11),
       cart_image VARCHAR(100),
       cart_quantity VARCHAR(11)
       
       );";

       if(!mysqli_query($this->con,$sql)){

        echo "Error creating table:".mysqli_error($this->con);
       }



}else{
    return false;
}








}

//get product from the database

public function getData(){
   // $crtname = 
    $cartquantity = $_POST['quantity'];
    $cartname = $_POST['item_name'];
    $cartprice = $_POST['item_price'];
    $cartimg = $_POST['item_img'];
    $subtotal = $cartquantity * $cartprice ;
  //  $proid = $POST_['product_id']
   // $sql2= "SELECT * FROM products where pro_id = $prou ";
   $sql= "INSERT INTO cart (cart_name, cart_quantity, cart_price, cart_image,sub_total)     VALUES ('$cartname', '$cartquantity', '$cartprice', '$cartimg' , '$subtotal')";
    
    $result=mysqli_query($this->con,$sql);//to execute the sql command
      return $result;
     
    // if(mysqli_num_rows($result)>0){//if i have more than 0 rows in this table
    //     return $result;
    // }
}

}