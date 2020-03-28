<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src=https://code.jquery.com/jquery-3.4.1.min.js></script>
</head>
<body>

<form action="" onsubmit=return false>

<input type="text" name="player" class="player"><br>
<input type="text" name="and_his_name" class="and_his_name"><br>
<input type="submit" class="first"><br>

</form>



    <form action="" onsubmit=return false>
    
    <input type="text" name="nickname"id="nickname">
    <input type="text"name="name"id="name">
    <input type="submit"class="button">
    
    
    
    
    </form>

<script type="text/javascript">


$(function(){


var name=prompt("Lütfen Oyuna Girmeden Önce Adınızı Belirleyin");
$(".player").val(name);

$(".first").on("click",function(){





})

$(".button").on("click",function(){

let name=$("#name").val();
let nickname=$("#nickname").val();

$.ajax({

url:"ajax.php",
data:{"nickname":nickname,"name":name},
type:"post",
dataType:"json",
success:function(e){


alert(e.ok);

},
error:function(){


alert("Yanlış yere gelsin sanırım şekerim");

}




})


})






})




</script>


</body>
</html>