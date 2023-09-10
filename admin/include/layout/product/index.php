<div class="container">

  <div class="add"></div>
  <div style="display: flex; justify-content: space-between;">
    <div class="x">
      <!-- <a href="?do=add" class="btn btn-primary">Add Products <i class="fas fa-plus-circle ml-2"></i></a> -->
      <button type="button" class="btn btn-primary ad" data-toggle="modal" data-target="#my">
      add Products <i class="fas fa-plus-circle ml-2"></i>
  </button>
  
  </div>
      <h1 style="text-align: center;">ALL Products</h1>
    </div>
<div class="a"></div>

<!-- The Modal -->
<div class="modal mo" id="my">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">add Products</h4>
        <button type="button" class="btn-close" data-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">

      <form class="form_add" enctype="multipart/form-data">
  <div class="form-group">
    <label for="name">name :</label>
    <input type="name" class="form-control form-control-sm" name="name" placeholder="Enter name" id="name">
  </div>
  <div class="row">
    <div class="col">
    <label for="prise">prise :</label>
      <input type="number" min="1"  class="form-control form-control-sm" id="prise" placeholder="Enter prise product" name="prise">
    </div>
    <div class="col">
    <label for="number_product">number of the products :</label>
      <input type="number" min="1" class="form-control form-control-sm" id="number_product" placeholder="number of the products" name="number_product">
    </div>
  </div>
  <br>
  <div class="row">
  <div class="col">
    <label for="Categorie">Categorie :</label>
    <select name="categorie" id="Categorie" class="form-control form-control-sm">
      <option value="">select as Categorie</option>
      <?php
      $sql = "SELECT * FROM categories";
      $result = $con->query($sql);
        while ($row = $result->fetch_assoc()) {
          ?>
            <option value="<?=$row['id']?>"><?=$row['name']?></option>
          <?php
        }
      ?>
    </select>
  </div>
    <div class="col">
    <label for="prand">prand :</label>
    <select name="prand" id="prand" class="form-control form-control-sm">
    <option value="">select as prand</option>
      <?php
      $sql = "SELECT * FROM prands";
      $result = $con->query($sql);
        while ($row = $result->fetch_assoc()) {
          ?>
            <option value="<?=$row['id']?>"><?=$row['name']?></option>
          <?php
        }
      ?>
    </select>
  </div>
  </div>
  <br>
  <div class="form-group">
    <label for="cover">select img the product  :</label>
    <input type="file" name="cover[]" id="cover" multiple='multiple' class="form-control form-control-sm">
  </div>
  <div class="form-group">
    <label for="description">description :</label>
    <textarea name="description" id="description" class="form-control form-control-sm" rows="6"></textarea>
  </div>
  <input type="submit" class="btn btn-primary send" value="Add product"  data-bs-dismiss="modal">
  </form>
        
      </div>
    </div>
  </div>
</div>




<!-- The Modal -->
<div class="modal mo" id="myedit">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">add Products</h4>
        <button type="button" class="btn-close" data-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">

      <form class="form_edit" enctype="multipart/form-data">
  <div class="form-group">
    <label for="name">name :</label>
    <input type="name" class="form-control form-control-sm" name="name" placeholder="Enter name" id="name1">
  </div>
  <input type="hidden" name="id" id="id_Prod">
  <div class="row">
    <div class="col">
    <label for="prise">prise :</label>
      <input type="number" min="1"  class="form-control form-control-sm" id="prise1" placeholder="Enter prise product" name="prise">
    </div>
    <div class="col">
    <label for="number_product">number of the products :</label>
      <input type="number" min="1" class="form-control form-control-sm" id="number_product1" placeholder="number of the products" name="number_product">
    </div>
  </div>
  <br>
  <div class="row">
  <div class="col">
    <label for="Categorie">Categorie :</label>
    <select name="categorie" id="Categorie" class="form-control form-control-sm">
      <option value="">select as Categorie</option>
      <?php
      $sql = "SELECT * FROM categories";
      $result = $con->query($sql);
        while ($row = $result->fetch_assoc()) {
          ?>
            <option value="<?=$row['id']?>"><?=$row['name']?></option>
          <?php
        }
      ?>
    </select>
  </div>
    <div class="col">
    <label for="prand">prand :</label>
    <select name="prand" id="prand" class="form-control form-control-sm">
    <option value="">select as prand</option>
      <?php
      $sql = "SELECT * FROM prands";
      $result = $con->query($sql);
        while ($row = $result->fetch_assoc()) {
          ?>
            <option value="<?=$row['id']?>"><?=$row['name']?></option>
          <?php
        }
      ?>
    </select>
  </div>
  </div>
  <div class="form-group">
    <label for="description">description :</label>
    <textarea name="description" id="description1" class="form-control form-control-sm" rows="6"></textarea>
  </div>
  <input type="submit" class="btn btn-primary send" value="save edit"  data-bs-dismiss="modal">
  </form>
        
      </div>
    </div>
  </div>
</div>

      <!-- DataTales Example -->
      <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
  <tr>
    <th>#</th>
    <th>name</th>
    <th>price</th>
    <th>number_product</th>
    <th>brand</th>
    <th>view</th>
    <th>saller</th>
    <th>cover</th>
    <th>action</th>
  </tr>
</thead>
                                    <tfoot>
                                        <tr>
                                          <th>#</th>
                                          <th>name</th>
                                          <th>price</th>
                                          <th>number_product</th>
                                          <th>brand</th>
                                          <th>view</th>
                                          <th>saller</th>
                                          <th>cover</th>
                                          <th>action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody class="tbody">
  <?php
  $sql = "SELECT * FROM products";
  $result =$con->query($sql);
  $x = 0;
  while ($row = $result->fetch_assoc()) {
    $x++;
    ?>
      <tr id="<?=$row["id"]?>" class="tr">
        <td><?=$x?></td>
        <td data-name="<?=$row["name"]?>" class="name_pro"><?=$row["name"]?></td>
        <td class="price"><?=$row["price"]?></td>
        <td class="num"><?=$row["number_product"]?></td>
        <td><?=$row["brand"]?></td>
        <td><?=$row["view"]?></td>
        <td><?php
        $id_saller = $row["saller"];
        $sql0 = "SELECT * FROM `admin` WHERE id= $id_saller";
        $result0 = $con->query($sql0);
        $row0 = $result0->fetch_assoc();
        echo $row0["name"];
        ?></td>
        <td style="width: 205px; text-align: center;"><img style="width: 200px; text-align: center; height: 80px;" src="assets/img/upload/<?php
        $pro_id = $row['id'];
        $query = "SELECT * FROM `product_imges` WHERE id_pro = $pro_id";
        $result_img = $con ->query($query);
        echo $result_img->fetch_assoc()['img_names'];
        

        ?>"> </td>
        <td>
              <button type="button" class="btn btn-sm btn-info edit" data-id="<?=$row["id"]?>" data-toggle="modal" data-target="#myedit">
      edit
  </button>
        <button type="button" class="btn btn-danger btn-sm delete" data-id="<?=$row["id"]?>" data-toggle="modal" data-target="#myModal<?=$row["id"]?>"> delete </button>
        </td>
      </tr>
    <?php
  }
  ?>
  </tbody>  
                                </table>
                                      <!-- The Modal -->
<div class="modal mod" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"> هل انت متاكد من حذف العنصر  </h4>
        <button type="button" class="btn-close" data-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      هل انت متاكد من حذف العنصر 
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button class="btn btn-danger btn-sm yees" data-dismiss="modal">نعم</button>
        <button type="button" class="btn btn-info btn-sm" data-dismiss="modal">لا</button>
      </div>

    </div>
  </div>
</div>
                            </div>
                        </div>
                    </div>
  </div>
<script>
  $('.form_add').submit(function(ev){
  ev.preventDefault();
  var Form_Data = new FormData(this);
  $.ajax({
    url:'include/function/product_fun/add_ajax.php',
    method:'post',
    data:Form_Data,
    success:function(data){
      let z = JSON.parse(data)
      // console.log(z.id_pro);
      $(".add").html(z.div)
      var id_pro = z.id_pro;
      var img_name = z.img_name;
      var num = Number( $('tr:last td:first').text())+1;
      var name = $('input[name="name"]').val();
      var prise = $('input[name="prise"]').val();
      var number_product = $('input[name="number_product"]').val();
      var categorie = $('select[name="categorie"]').val();
      var prand = $('select[name="prand"]').val();
      var description = $('textarea[name="description"]').val();
      var appand = '<tr id="'+id_pro+'" ><td>'+num+'</td><td data-name="'+name+'">'+name+'</td><td>'+prise+'</td><td>'+number_product+'</td><td>'+prand+'</td><td>0</td><td><?=$_SESSION['name_admin']?></td><td style="width: 205px; text-align: center;"><img style="width: 200px; text-align: center; height: 80px;" src="assets/img/upload/'+img_name+'"> </td><td><a href="?id='+id_pro+'&do=edit" class="btn btn-primary btn-sm">تعديل</a><button type="button" class="btn btn-danger btn-sm delete" data-id="'+id_pro+'" data-toggle="modal" data-target="#myModal'+id_pro+'"> حذف </button></td></tr>';
      $('table .tbody').prepend(appand);
    },
    processData:false,
    contentType:false
  })
  
})


                      $('.delete').click(function(){
                        var id = $(this).data('id');
                        $('.mod').attr("id", "myModal"+id);
                        $('.yees').click(function(){
                          $.post('include/function/product_fun/delete.php', {id} , function(data){
                            $('.a').html(data);
                            $('#'+id).remove();
                          })
                        })
                      })
                      

                      $('.edit').click(function(evv){
                        var id = $(this).data('id');
                        $.post("include/function/product_fun/edit_ajax.php", {id} , function(data){
                          console.log(data);
                          var edit = JSON.parse(data)
                          $('#description1').val(edit.description)
                          $('#id_Prod').val(edit.id)
                          $('#name1').val(edit.name)
                          $('#prise1').val(edit.prise)
                          $('#number_product1').val(edit.number)
                        })

                        $('.form_edit').submit(function(evv){
                          evv.preventDefault();
                          var Form_Data_edit = new FormData(this);
                          $.ajax({
                            url:'include/function/product_fun/do_edit_ajax.php',
                            method:'post',
                            data:Form_Data_edit,
                            success:function(data){
                              let zz = JSON.parse(data)
                              $(".add").html(zz.div)
                              var name = zz.name;
                              var price = zz.price;
                              var number_product = zz.number_product;
                            // console.log(data);
                            $("#"+id).find('.name_pro').text(name);
                            $("#"+id).find('.price').text(price);
                            $("#"+id).find('.num').text(number_product);

                            },
                            processData:false,
                            contentType:false
                          })
                        })
                      })
</script>