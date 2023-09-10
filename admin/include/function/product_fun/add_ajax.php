<?php
include "../coon.php";
session_start();
  $id_admin = $_SESSION['id_admin'];
  $name = $_POST['name'];
  $prise = $_POST['prise'];
  $number_product = $_POST['number_product'];
  $categorie = $_POST['categorie'];
  $prand = $_POST['prand'];
  $description = $_POST['description'];

  $sql ="INSERT INTO `products`(name, description, price, number_product, categorie, brand, saller)
  VALUES ('$name','$description','$prise','$number_product','$categorie','$prand','$id_admin')";
  $result = $con->query($sql);
  // add img product 
  $img_name = $_FILES['cover']['name'];
  $img_size = $_FILES['cover']['size'];
  $img_tmp = $_FILES['cover']['tmp_name'];
  $img_error = $_FILES['cover']['error'];
  $file_count = count($img_name);

    for ($i=0; $i < $file_count; $i++) { 
      $new_img_name[] = time() .rand(1 , 10000000) . $img_name[$i] ; 
      move_uploaded_file($img_tmp[$i] , "../../../assets/img/upload/$new_img_name[$i]");
    }

  $id_pro = mysqli_insert_id($con);
  foreach ($new_img_name as $key => $value) {
    $query = "INSERT INTO `product_imges`(id_pro, img_names) VALUES ('$id_pro','$value')";
    $result2 = $con->query($query);
  }
  $as = [
    'img_name' =>  $new_img_name[0] ,
    'id_pro' => $id_pro,
    'div' => '<div class="alert alert-success">add success</div>'
  ];

  echo json_encode($as);

?>