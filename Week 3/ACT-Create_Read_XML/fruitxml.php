<?php
$user = 'root';
$pass = 'root';
$db = new PDO('mysql:host=localhost;dbname=ssl;port=8889', $user, $pass);
$stmt = $db->prepare('SELECT * FROM fruit;');
$stmt->execute();
$result = $stmt->fetchall(PDO::FETCH_ASSOC);

$file = 'data.xml';
$userNode = 'fruit';

$doc = new DOMDocument('1.0');
$doc->preserveWhiteSpace = false;
$doc->load($file);
$doc->formatOutput = true;

foreach($result as $row){
    $root = $doc->documentElement;
    $user = $doc->createElement($userNode);
    $user = $root->appendChild($user);
    $id = $row['id'];
    $name = $row['fruitname'];
    $fruitColor = $row['fruitcolor'];
    $node = $doc->createElement('fruitId',$id);
    $user->appendChild($node);
    $node = $doc->createElement('fruitName',$name);
    $user->appendChild($node);
    $node = $doc->createElement('fruitColor',$fruitColor);
    $user->appendChild($node);

}


/*
header('Content-type:text/xml');
echo '<?xml version="1.0"?>';
echo '<fruits>';
    foreach($result as $row){
    echo '<fruit>';
        echo '<fruitId>'.$row['id'].'</fruitId>';
        echo '<fruitName>'.$row['fruitname'].'</fruitName>';
        echo '<fruitColor>'.$row['fruitcolor'].'</fruitColor>';
    echo '</fruit>';
    }
echo '</fruits>';

*/
$doc->save($file) or die("Sorry, there's a problem saving the file.");


?>