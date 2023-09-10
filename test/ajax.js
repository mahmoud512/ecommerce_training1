$('form').submit(function(even){
  var form_data = new FormData(this);
  even.preventDefault();
     
  $.ajax({
    url:"test.php",
    method: "post",
    data: form_data,
    success:function(data){
      document.write(data)
    }
    
  })
})