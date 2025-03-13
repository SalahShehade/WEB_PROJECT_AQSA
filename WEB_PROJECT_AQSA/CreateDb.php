<?php



class CreateDB
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
    $tablename="modProductdb",
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
       (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
       modproduct_name VARCHAR(25) NOT NULL,
       modproduct_price FLOAT,
       modproduct_image VARCHAR(100)
       
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
    $sql="SELECT * FROM modproducttb";
    
    $result=mysqli_query($this->con,$sql);//to execute the sql command

    if(mysqli_num_rows($result)>0){//if i have more than 0 rows in this table
        return $result;
    }
}

}