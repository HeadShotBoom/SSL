<html lang="en">
<head>
    <title>Untitled</title>

</head>
<body>
<?php

echo "Hello Daniel<br />";
echo 'Hello Daniel<br />';

$greeting = "Hello";
$target = "World";
$phrase = $greeting . " " . $target;
echo $phrase;
?>
<br />
<?php

echo "$phrase Again<br />";
echo "{$phrase}Again<br />"; //No space before Again



?>


</body>
</html>