<?php



class CreateDbprodlist
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
    $tablename="products",
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
       (pro_id INT(11) AUTO_INCREMENT PRIMARY KEY,
       pro_name VARCHAR(100),
       cat_id INT(1),
       pro_price INT(11),
       pro_thumb VARCHAR(100),
       pro_desc VARCHAR(100)
       
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
    $ed=$_POST['product_id'];
   $sql="SELECT * FROM products where pro_id=$ed ";
    
    $result=mysqli_query($this->con,$sql);//to execute the sql command

    if(mysqli_num_rows($result)>0){//if i have more than 0 rows in this table
        return $result;
    }
}

}