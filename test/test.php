<?php
$con = new mysqli("localhost" , "root" , "" , "ecommerce_tr");

$id = $_POST['id'];


$query = "SELECT * FROM `user` WHERE id = $id";
$result = $con -> query($query);

$ros = $result->fetch_assoc();
  
  $ar = [
    'name' => $ros['name'],
    'email' => $ros['email'],
  ];
  echo json_encode($ar)
?>