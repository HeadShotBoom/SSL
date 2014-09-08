<?php
// Retrieve an existing session and echo out the session variables you set in setsession.
session_start();
$name  = $_SESSION["name"];
$state = $_SESSION["state"];
$city  = $_SESSION["city"];
echo $name . "<br>";
echo $state . "<br>";
echo $city . "<br>";
?>


<?php
print_r($_SESSION);
?>