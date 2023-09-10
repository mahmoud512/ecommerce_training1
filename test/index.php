<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> 

  <title>Document</title>
</head>
<body>
<button>click</button>
  <form class="form">
    <input type="text" name="name" placeholder="name">
    <br>
    <br>
    <input type="text" name="email" placeholder="phone">
    <br>
    <br>
    <br>
    <input type="submit" value="send">
  </form>
<script src="jquery.min.js"></script>
<!-- <script src="ajax.js"></script> -->
<script>
  $('button').click(function(ev){
    ev.preventDefault();
    // var id = 0
    $.post("test.php", {id : 1}, function(data){
      var x = JSON.parse(data)
      console.log(x);
      $('input[name="name"]').val(x.name)
      $('input[name="email"]').val(x.email)
    })
  })

</script>
</body>
</html>