<?php
$user = 'root';
$pass = 'root';
$db = new PDO('mysql:host=localhost;dbname=ssl;port=8889', $user, $pass);
if ($_POST){
    $fruit_name = $_POST['fruitname'];
    $fruit_color = $_POST['fruitcolor'];
    $stmt=$db->prepare("INSERT INTO fruit (fruitname, fruitcolor) VALUES (:fruitname, :fruitcolor);");
    $stmt->bindParam(':fruitname', $fruit_name);
    $stmt->bindParam(':fruitcolor', $fruit_color);
    $stmt->execute();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Fruits | Database</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<form enctype="multipart/form-data" action="fruits.php" method="POST">
    <input type="text" name="fruitname" value="" placeholder="Fruit Name" required>
    <input type="text" name="fruitcolor" value="" placeholder="Color" required>
    <input type="submit" name="submit" value="Submit">
</form>
<?php
$stmt = $db->prepare('SELECT * FROM fruit;');
$stmt->execute();
$result = $stmt->fetchall(PDO::FETCH_ASSOC);
?>
<table>
    <?php
    echo '<tr><th>Fruit ID</th><th>Fruit Name</th><th>Fruit Color</th><th>Remove?</th></tr>';
    foreach ($result as $row) {
        echo '<tr><td>'.$row['id'].'</td><td>'.$row['fruitname'].'</td><td>'.$row['fruitcolor'].'</td><td> <a href="deletefruit.php?id=' . $row['id'] . '">Delete</a></td></tr>';
    }
    ?>
</table>
</body>
</html>