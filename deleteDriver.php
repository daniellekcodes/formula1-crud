<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=wcoding;charset=utf8', 'root','root');
} catch (Exception $e) {
    
    die("Error : " . $e->getMessage());

}


$req = $db->prepare("DELETE FROM f1drivers WHERE id = ?");

$req->execute([$_GET['id']]);

header("Location: home.php");


?>
