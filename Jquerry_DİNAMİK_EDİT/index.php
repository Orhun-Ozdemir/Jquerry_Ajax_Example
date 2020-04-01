<?php 

include "db.php";

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Deneme dinamik editleme</title>
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 <script type="text/javascript" src="Edit/js/jquery.jeditable.js"></script>
 <style type="text/css">
 	li{


background-color: #eee;
width:200px;
margin:20px;


 	}

 </style>
</head>
<body>


<script type="text/javascript">

$(function(){

//var id=$(".edit").attr("id");
//var value=$(".edit").val();

$('.edit').editable('islem.php',{

type:'textarea',
indicator:'guncelleniyor',
submit:'geldi',
cancel:'<"a>burası</>"',
style:".edit{width:500px; height:200px;}"







});






});






</script>




<ul>
	
<?php 


$cek=$db->prepare("SELECT * FROM user ");
$cek->execute();
$gel=$cek->fetchAll(PDO::FETCH_ASSOC);


foreach($gel as $git){


echo '<li  class="edit" id="'.$git['user_id'].'">'.$git['user_name'].'</li>';



}





 ?>




</ul>


<script type="text/javascript">
	





</script>



</body>
</html>