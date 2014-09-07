<?php
$name   = "test";
$value  = "Hello";
$expire = time()-3600);//Add Seconds
//setcookie($name, $value, $expire);

// setcookie($name); #Not the best way to unset
// setcookie($name, null, $expire); #This way is little better but there is a better way
// setcookie($name, $value, time() - 3600 ); #The best way to unset a cookie

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