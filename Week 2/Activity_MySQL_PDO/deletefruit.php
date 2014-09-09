<?php
$user="root";
$pass="root";
$db = new PDO('mysql:host=localhost;dbname=ssl;port=8889', $user, $pass);
$fruitid=$_GET['id'];
$stmt=$db->prepare("DELETE FROM fruit WHERE id IN (:fruitId);");
$stmt->bindParam(':fruitId', $fruitid);
$stmt->execute();
header('Location: fruits.php'); //redirect us back to the fruits page
die();

?>