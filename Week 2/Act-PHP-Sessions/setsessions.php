<?php
// Start a session and set session variables based on GET parameters you pass through the querystring. Set at least 3 variables.

session_start();

$_SESSION["name"]  = $_GET["name"];
$_SESSION["state"] = $_GET["state"];
$_SESSION["city"]  = $_GET["city"];
echo $_SESSION["name"];
echo $_SESSION["state"];
echo $_SESSION["city"];

?>