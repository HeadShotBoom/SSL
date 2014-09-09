<?php
$user = "root";
$pass = "root";
$db = new PDO('mysql:host=localhost; dbname=ssl; port:8889', $user, $pass);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// echo "This is a POST Method";
	$fruitname  = $_POST["fruitname"];
	$fruitcolor = $_POST["fruitcolor"];
	// Needs a statement here;
	$stmt = $db->prepare("");
	// Needs a bind parameter here
	$stmt->bindParam(bind parameter);
	$stmt->bindParam(bind parameter);
	$stmt->execute();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Fruits | Database</title>
	<link rel="stylesheet" href="">
</head>
<body>

	<form action="fruits.php" method="POST">
		<label>Fruit Name: <input type="text" name="fruitname" value=""></label>
		<label>Fruit Color: <input type="text" name="fruitcolor" value="" placeholder=""></label>
		<input type="submit" name="submit" value="Submit">
	</form>

<?php
if (isset($fruitname, $fruitcolor)) {
	echo "{$fruitname} & {$fruitcolor}";
}

?>

</body>
</html>