<?php
include('../coon.php');
$id_product = $_POST['id'];
$sql_delete_img = "DELETE FROM `product_imges` WHERE id_pro = $id_product";
$con->query($sql_delete_img);
$sql ="DELETE FROM `products` WHERE id = $id_product";
$con->query($sql);
echo '<div class="alert alert-danger">تم الحذف بنجاح</div>';
?>