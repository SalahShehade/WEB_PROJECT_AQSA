<?php



class CreateDbtot
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
 

   $sql = "SELECT SUM(sub_total) AS sub_total from cart";
$sum = mysqli_query($this->con,$sql);
$result= mysqli_fetch_object($sum);
echo $result->sub_total;

}

}