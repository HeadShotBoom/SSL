<html lang="en">
<head>
    <title>Functions Defining</title>
</head>
<body>
<?php

function say_hello_to($word) {
    echo "Hello {$word}!<br />";
}
$name = "Daniel Carroll";
say_hello_to($name);

?>

<?php

function better_hello($greeting, $target, $punct) {
    echo $greeting . " " . $target . " " . $punct . "<br />";
}

better_hello("Yo", $name, "!");
better_hello("Hello", $name, NULL);

?>

</body>
</html>