<?php
echo 

$firstName=$_POST['firstName'];
$number=$_POST['number'];
$food=$_POST['food'];
$extra=$_POST['extra'];
$order=$_POST['order'];
$address=$_POST['address'];
$message=$_POST['message'];

//Database connection


$conn = new mysqli('localhost','root','','connect');
if($conn->connect_error){
  die('Connection Failed : '.$conn->connect_error);
}
else {
  $stmt = $conn->prepare("insert into registration (firstName, number, food, extra, orders, address, message) values (?, ?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("sississ",$firstName, $number, $food, $extra, $order, $address, $message);
  $stmt->execute();
  echo "\nYour Order Successfully Placed.....";
  $stmt->close();
  $conn->close();
}
?>