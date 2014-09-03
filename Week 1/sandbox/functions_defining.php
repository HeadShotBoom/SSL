<html lang="en">
<head>
    <title>Functions Defining</title>
</head>
<body>
<?php

function say_hello(){
    echo "Hello World!<br />";
}
say_hello();

function say_hello_to($word) {
    echo "Hello {$word}!<br />";
}
say_hello_to("Daniel");
say_hello_to("Jen");

say_hello_loudly();

function say_hello_loudly() {
    echo "<h1>HELLO!!!!!!</h1>";
}

?>

</body>
</html>