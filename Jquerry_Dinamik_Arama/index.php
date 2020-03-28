<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src=https://code.jquery.com/jquery-3.4.1.min.js></script>
</head>
<body>
    


<!-- Search form -->
<center>
<input type="text" placeholder="Lütfen Karakter adınızı yazınız" style="width:200px; color:blue; margin-top:50px; " class="search">
<div class="sonuc" style="background-color:grey; width:210px;">



</div>

</center>

<script type="text/javascript">

$(function(){


$(".search").on("keyup",function(){

   var x= $(".search").val();


$.ajax({

data:{"search":x},
url:"db.php",
type:"post",
success:function(e){



alert(e);

}




})


})




})




</script>




</body>
</html>