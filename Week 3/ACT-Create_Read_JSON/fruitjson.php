<?php
$user = 'root';
$pass = 'root';
$db = new PDO('mysql:host=localhost;dbname=ssl;port=8889', $user, $pass);
$stmt = $db->prepare('SELECT * FROM fruit;');
$stmt->execute();
$result = $stmt->fetchall(PDO::FETCH_ASSOC);
$file = 'data.json';
$json_string = json_encode($result, JSON_PRETTY_PRINT);
file_put_contents($file, $json_string, FILE_APPEND);
?>