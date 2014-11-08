<?php
// Wasn't sure if you wanted this to be done only on a get request or if you wanted a search field so I did both.
// The directions werent very clear. The top part is the code that interacts with the search field.
// I also left in the commands for making a json file with the info. But commented it out since I dont think
// Its applicable for most API's to send that file.
if(isset($_POST['submit'])){
    $user = 'root';
    $pass = 'root';
    $db = new PDO('mysql:host=localhost;dbname=worldcities;port=8889', $user, $pass);
    $userCity = $_POST['city'];
    $query = 'SELECT city, country, region, population FROM cities WHERE city LIKE "%' . $userCity . '%" LIMIT 30;';
    $stmt = $db->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchall(PDO::FETCH_ASSOC);
//    $file = 'data.json';
    $json_string = json_encode($result, JSON_PRETTY_PRINT);
//    file_put_contents($file, $json_string, FILE_APPEND);
}
//This handles a get request
if($_GET){
    $user = 'root';
    $pass = 'root';
    $db = new PDO('mysql:host=localhost;dbname=worldcities;port=8889', $user, $pass);
    $userCity = $_GET['q'];
    $query = 'SELECT city, country, region, population FROM cities WHERE city LIKE "%' . $userCity . '%" LIMIT 30;';
    $stmt = $db->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchall(PDO::FETCH_ASSOC);
//    $file = 'data.json';
    $json_string2 = json_encode($result, JSON_PRETTY_PRINT);
//    file_put_contents($file, $json_string, FILE_APPEND);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Search Your Hood</title>
</head>
<body>
<form action="world.php" method="POST">
    <input type="text" name="city" value="">
    <input type="submit" name="submit" value="Submit">
</form>
<div>
    <?php
    if(isset($_POST['submit'])){
        echo $json_string;
    }
    if($_GET){
        echo $json_string2;
    }
    ?>
</div>

</body>
</html>