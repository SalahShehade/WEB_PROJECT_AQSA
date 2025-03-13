<?php
include('delAllCart.php');
session_start();
unset($_SESSION['user_ID']);
header('location:login.php');

?>