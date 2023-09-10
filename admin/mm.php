<?php
include('include/layout/sidebar.php');
include('include/layout/Navbar.php');
?>
  <div class="container-fluid">
    <div style="display: flex; justify-content: space-between;">
    <div class="x">
      <a href="?do=add" class="btn btn-primary">Add Products <i class="fas fa-plus-circle ml-2"></i></a>
    </div>
      <h1 style="text-align: center;">ALL Products</h1>
    </div>
    <div class="a"></div>


  
                    <script>

                    $(document).ready(function(){
                      $.post('include/function/product_fun/insert.php', {} , function(datainsert){
                        $('.a').html(datainsert);
                      })
                    })


                      $('.delete').click(function(){
                        var id = $(this).data('id');
                        // console.log(id);
                        $('.mod').attr("id", "myModal"+id+"");
                        $('.yees').click(function(){
                          $.post('include/function/product_fun/delete.php', {id} , function(data){
                            $('.a').html(data);
                          })
                        })
                      })
                    </script>
  </div>
  <?php
  include('include/layout/Footer.php');
?>