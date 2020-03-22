<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src=https://code.jquery.com/jquery-3.4.1.min.js></script>
</head>
<body>
    
    <script type=text/javascript>
  $(function(){

$("#gonder").click(function(){

let ad=$("#ad").val();
let soyad=$("#soyad").val();


$.ajax({

url:"ajax.php",
data:{"ad":ad,"soyad":soyad},
type:"post",
dataType:"json",
success:function(e){

  alert(e);
}



});

});

  })
    </script>
</body>



<form action="" onsubmit="return false">

<input type="text" name="ad" id="ad">
<input type="text " name="soyad" id="soyad">
<input type="submit" id="gonder">



</form>



<script src="app.js"></script>
</html>