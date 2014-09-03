<?php

$name = (string) "Daniel";
$age = (integer) 28;

$person = array($name, $age, array("Name" => "Daniel", "Age" => 28));

echo "My name is " . $name . " and I am " . $age . " years young.<br />";
echo 'My name is ' . $name . ' and I am ' . $age . ' years young.<br />';

echo $person[0] . ' is ' . $person[1] . ' years old.<br />';

echo $person[2]["Name"] . " is " . $person[2]["Age"] . " years old.<br />";

$age = NULL;
echo "Age is ". $age;

unset($name);
echo "Name is " . $name;


?>