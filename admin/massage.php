<?php
include('include/layout/sidebar.php');
include('include/layout/Navbar.php');
?>
<div class="container">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
  <tr>
    <th>#</th>
    <th>name</th>
    <th>phone</th>
    <th>email</th>
    <th>view</th>
    <th>action</th>
  </tr>
  </thead>
  <tfoot>
  <tr>
    <th>#</th>
    <th>name</th>
    <th>phone</th>
    <th>email</th>
    <th>view</th>
    <th>action</th>
  </tr>
  </tfoot>
  <tbody>
  <?php
  $sql = "SELECT * FROM massage";
  $result =$con->query($sql);
  $x = 0;
  while ($row = $result->fetch_assoc()) {
    $x++;
    ?>
      <tr>
        <td><?=$x?></td>
        <td><?=$row['name_user']?></td>
        <td><?=$row['phone']?></td>
        <td><?=$row['email']?></td>
        <td><?=$row['view'] == 1 ? 'read' : 'unread'?></td>
        <td><button type="button" class="btn btn-primary btn-sm openmassage" data-id="<?=$row['id']?>" data-toggle="modal" data-target="#myModal<?=$row['id']?>" data-id="<?=$row['id']?>"> view massage </button></td>
                <!-- The Modal -->
<div class="modal mod" id="myModal<?=$row['id']?>">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"> <?=$row['name_user']?> </h4>
        <button type="button" class="btn-close" data-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <?=$row['massage']?>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"> close </button>
      </div>

    </div>
  </div>
</div>
      </tr>
    <?php
  }
  ?>
  </tbody>  
  </table>

                            </div>
                        </div>
                    </div>
                    </div>

          
                    <script>
                      $('.openmassage').click(function(){
                        $(this).parent().prev().text('read');
                        var id = $(this).attr('data-id');
                        $.post('include/function/massage/editmassage.php' , {id} ,function(data){
                          $('.num_massage').text(data);
                        })
                      });
                    </script>

<?php
  include('include/layout/Footer.php');
?>
