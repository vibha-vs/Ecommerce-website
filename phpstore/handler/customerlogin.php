<?php
session_start();

//include ("adminpartials/head.php");

if(isset($_POST['login'])){
include('../partials/connect.php');

$email=$_POST['email'];
$password=$_POST['password'];
$sql="SELECT * FROM customers WHERE username='$email' AND password='$password'";
$results=$connect->query($sql);
$final=$results->fetch_assoc();

$_SESSION['email']=$final['username'];
$_SESSION['password']=$final['password'];

$_SESSION['customerid']=$final['id'];

if($email=$final['username'] AND $password=$final['password']){
    header('location: ../cart.php');
}else{
    echo "<script> alert('Credentals are wrong');
    window.location.href='../customerforms.php';
    </script>";
}
}
?>

