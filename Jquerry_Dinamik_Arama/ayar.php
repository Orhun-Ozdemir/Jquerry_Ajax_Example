

<?php
try {
     $db = new PDO("mysql:host=localhost;dbname=game;port=3307;", "root", "");
     
     //var_dump($db);
} catch ( PDOException $e ){
     print $e->getMessage();
}
?>






