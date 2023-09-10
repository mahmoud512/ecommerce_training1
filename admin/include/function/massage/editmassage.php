<?php
include '../coon.php';
$id = $_POST['id'];
$query = "UPDATE massage SET view='1' WHERE id = $id";
$result = $con -> query($query);
if ($result) {
  $sql = "SELECT * FROM `massage` WHERE view = 0";
  $result_view = $con -> query($sql);
  echo $result_view->num_rows;
}

?>