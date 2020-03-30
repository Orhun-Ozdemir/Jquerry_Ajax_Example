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

<div class="deneme">
	
</div>

</center>

<script type="text/javascript">

$(".sonuc").hide();
$(function(){
	
	var z=0;
for ( var i = 0 ; i <= 5; i++) 
{
	$(".deneme").show().html("buraya kadar");
	

}





$(".search").on("keyup",function(){

   var x= $(".search").val();
   if(x==""){

    $(".sonuc").hide();

   }


$.ajax({

data:{"search":x},
url:"db.php",
type:"post",
datatype:"json",
success:function(e){


//console.log(e);
$(".sonuc").show().html(e);

}




})


})




})




</script>




</body>
</html>