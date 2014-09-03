<html lang="en">
<head>
    <title>While Loops</title>
</head>
<body>
<?php

$count = 0;
while ($count <= 10){
    if ($count == 5){
        echo "FIVE <br />";
    } else {
        echo $count . "<br />";
    }
    $count++;
}
echo "<br />";
echo "Count: {$count}";

?>

</body>
</html>