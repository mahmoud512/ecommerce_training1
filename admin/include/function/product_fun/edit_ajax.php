<?php
include "../coon.php";
$id = $_POST['id'];
$sql = "SELECT * FROM `products` WHERE id = $id";
$result = $con ->query($sql);
$rows = $result->fetch_assoc();
$araay = [
  'id' => $rows['id'],
  'name' => $rows['name'],
  'prise' => $rows['price'],
  'number' => $rows['number_product'],
  'description' => $rows['description']
];
echo json_encode($araay);