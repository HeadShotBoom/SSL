<?php
// Start a session and set session variables based on GET parameters you pass through the querystring. Set at least 3 variables.

session_start();

$_SESSION["name"]  = $_GET["name"];
$name              = $_SESSION["name"];
$_SESSION["state"] = $_GET["state"];
$state             = $_SESSION["state"];
$_SESSION["city"]  = $_GET["city"];
$city              = $_SESSION["city"];
echo $name . "<br>";
echo $state . "<br>";
echo $city . "<br>";

?>


<?php
print_r($_SESSION);
?>