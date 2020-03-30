<?php
include "ayar.php";


?>




<?php

if(isset($_POST["search"]))
{


$value=$_POST["search"];

if($value==""){


	echo "Lütfen bir deger giriniz";
}
else
{

$user=$db->prepare("SELECT *FROM user WHERE user_name LIKE  ?");
$user->execute(array("%".$value."%"));
$cek=$user->fetchAll(PDO::FETCH_ASSOC);
$row=$user->rowCount();
if($row){
    
   foreach ($cek as $item) {
   
echo $item["user_name"];
   }
}
else{

    echo "Bu veride bir kayıt bulunamadı";
    
    }
}

}




?>