<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sessions</title>
	<link rel="stylesheet" href="">
</head>
<body>

<?php
$_SESSION["first_name"] = "Kevin";
$name                   = $_SESSION["first_name"];
echo $name;
?>

</body>
</html>