<html lang="en">
<head>
    <title>Untitled</title>

</head>
<body>
<?php

$first = "The quick brown fox";
$second = " says wha wha wha wha bleep bleep who bop ditty flop.";

$third = $first;
$third .= $second;

echo $third;

?>
<br />
Lowercase: <?php echo strtolower($third); ?><br />
Uppercase: <?php echo strtoupper($third); ?><br />
Uppercase First: <?php echo ucfirst($third); ?><br />
Uppercase Words: <?php echo ucwords($third); ?><br />


</body>
</html>