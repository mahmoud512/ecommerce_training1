<?php
include "../coon.php";
$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['prise'];
$number_product = $_POST['number_product'];

$sql = "UPDATE `products` SET `name`='$name',`description`='$description',`price`='$price',`number_product`='$number_product' WHERE id = $id";

$result = $con->query($sql);

$as = [
  'name' =>  $name ,
  'price' => $price,
  'number_product' => $number_product,
  'div' => '<div class="alert alert-success">edit success</div>'
];

echo json_encode($as);