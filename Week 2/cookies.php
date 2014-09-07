<?php
$name   = "test";
$value  = "hello";
$expire = time()+(60 * 60 * 24 * 7);//Add Seconds
setcookie($name, $value, $expire);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cookies</title>
	<link rel="stylesheet" href="">
</head>
<body>

<?php

// Ternary Method of testing for "isset"
$test = isset($_COOKIE["test"]) ? $_COOKIE["test"] : " ";
echo $test;
?>

</body>
</html>