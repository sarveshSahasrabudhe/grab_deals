<?php 
$connection = mysqli_connect('localhost','root','','ecom');
// if($connection)
// echo "<script> alert('connected')</script>";

// else {
//     echo "<script> alert('error connection')</script>";
// }
ob_start();
session_start();
$cnt = false;
?>