<?php
$conn = mysqli_connect('localhost','root','','checkusersdb');
session_start();
setcookie('username',$_SESSION['username'],time()-60);
unset($_SESSION['username']);
header('location:1.php');
exit();
?>