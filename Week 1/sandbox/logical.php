<html lang="en">
<head>
    <title>Logical</title>
</head>
<body>
<?php

$a = 4;
$b = 6;

if ($a > $b){
    echo "A is larger than B.";
}elseif ($a < $b) {
    echo "A is smaller than B";
}else{
    echo "A = B";
}
?>
<br />
<?php
$new_user = true;
if ($new_user){
    echo "<h1>Welcome!</h1>";
    echo "<p>We are glad you decided to join us.</p>";
}else {
    "<h1>You need to register!</h1>";
}
?>
<br />
<?php
$numerator = 20;
$denominator = 0;
if ($denominator != 0){
    $result = $numerator / $denominator;
    echo "Result: {$result}";
}
?>

</body>
</html>