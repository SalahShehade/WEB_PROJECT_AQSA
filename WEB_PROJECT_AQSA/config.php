<?php


session_start();
$conn= mysqli_connect("localhost","root","","alaqsa");


if(!$conn){
    die("Connection failed: " .mysqli_connect_error());
 }