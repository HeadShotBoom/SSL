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
<br />
Length: <?php echo strlen($third); ?><br />
Trim: <?php echo "A" . trim(" B C D "). "E"; ?><br />
Find: <?php echo strstr($third, "brown"); ?><br />
Replace by string: <?php echo str_replace("quick", "super-fast", $third); ?><br />
<br />
Repeat: <?php echo str_repeat($third, 2); ?><br />
Make Substring: <?php echo substr($third, 5 ,10); ?><br />
Find Position: <?php echo strpos($third, "brown"); ?><br />
Find Character: <?php echo strchr($third, "y"); ?><br />



</body>
</html>